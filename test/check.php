<?php

require_once(__DIR__ . '/vendor/autoload.php');

// Overwriting the Markdown parser so we get the Blocks instead of HTML.
class MyMarkdown extends \cebe\markdown\GithubMarkdown
{
    protected function parseBlocks($lines)
    {
        $blocks = [];

        // convert lines to blocks

        for ($i = 0, $count = count($lines); $i < $count; $i++) {
            if (!empty($lines[$i]) && rtrim($lines[$i]) !== '') { // skip empty lines
                // identify a blocks beginning
                $blockType = $this->identifyLine($lines, $i);

                // call consume method for the detected block type to consume further lines
                list($block, $i) = $this->{'consume' . $blockType}($lines, $i);
                if ($block !== false) {
                    $blocks[] = $block;
                }
            }
        }

        return $blocks;
    }
}

// Loading Markdown and parsing blocks from it.
$text = file_get_contents(__DIR__ . '/../README.md');
$markdown = new MyMarkdown();
$blocks = $markdown->parse($text);

// Run checks.
checkBlocks($blocks);
checkLinks($text);

// Some List items have a special formatting.
// List items that are stripos'ing one of these strings will be ignored.
function getIgnoredListItems()
{
    return array(
        'blog.ircmaxell.com/2013/09/beyond-design-patterns',
        'blog.ircmaxell.com/2012/03/phps-source-code-for-php-developers',
        'php.net/manual/en/features.gc.refcounting-basics',
    );
}

//--- Functions

function checkLinks($text)
{
    // Regex from: https://mathiasbynens.be/demo/url-regex
    preg_match_all('_\((?:(?:https?|ftp)://)(?:\S+(?::\S*)?@)?(?:(?!10(?:\.\d{1,3}){3})(?!127(?:\.\d{1,3}){3})(?!169\.254(?:\.\d{1,3}){2})(?!192\.168(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\x{00a1}-\x{ffff}0-9]+-?)*[a-z\x{00a1}-\x{ffff}0-9]+)(?:\.(?:[a-z\x{00a1}-\x{ffff}0-9]+-?)*[a-z\x{00a1}-\x{ffff}0-9]+)*(?:\.(?:[a-z\x{00a1}-\x{ffff}]{2,})))(?::\d{2,5})?(?:/[^\s\)]*)?\)_iuS', $text, $links);
    $links = array_map(function ($link) {
        return trim($link, '()');
    }, array_unique($links[0]));

    $client = new GuzzleHttp\Client();

    // Ignoring some domains.
    $links = array_filter($links, function($link) {
        $ignoredDomains = array(
            'www.owasp.org', // Their server somehow fails responding to curl.
        );
        foreach($ignoredDomains as $ignoredDomain) {
            if(false !== stripos($link, $ignoredDomain)) {
                return false;
            }
        }
        return true;
    });

    // Creating guzzle requests.
    $requests = array_map(function ($link) use ($client) {
        return $client->createRequest('GET', $link, array('verify' => false, 'timeout' => 99999));
    }, $links);

    // Start all these requests partially parallel.
    $responses = GuzzleHttp\batch(
        $client,
        $requests,
        array(
            'parallel' => 5,
            'complete' => function (\GuzzleHttp\Event\CompleteEvent $event) {
                echo 'Completed request to ' . $event->getRequest()->getUrl() . "\n";
            },
            'error' => function (\GuzzleHttp\Event\ErrorEvent $event) {
                echo 'Request failed: ' . $event->getRequest()->getUrl() . "\n";
                $event->throwImmediately(true);
            }
        )
    );

    // Check for exceptions.
    foreach($responses as $response) {
        if($response instanceof \Exception) {
            throw $response;
        }
    }
}

function checkBlocks(array $blocks)
{
    // Check List formatting
    $lists = onlyLists($blocks);
    $tableOfContent = array_shift($lists);
    checkLists($lists);

    // Check table of content ordering.
    $tableOfContent = $tableOfContent['items'];
    $indentedHeadlines = indentHeadlines(onlyHeadlines($blocks));
    // Checking array to be euqal.
    if (var_export($tableOfContent, true) != var_export($indentedHeadlines, true)) {
        throw new \Exception("Table of contents and headlines in document are _not_ in the same order.");
    }
}

function indentHeadlines(array $headlines)
{
    $indented = array();
    $index = 0;
    foreach ($headlines as $headline) {
        $content = $headline['content'];
        $contentFormatted = '[' . $content . '](#' . str_ireplace(' ', '-', strtolower($content)) . ')';
        if (1 == $headline['level']) {
            $index++;
            $indented[$index][] = $contentFormatted;
        } else {
            $indented[$index][] = '- ' . $contentFormatted;
        }
    }

    return $indented;
}

function checkLists(array $lists)
{
    array_map(function ($list) {
        if ('list' == $list['type']) {
            checkListItems($list['items']);
        }
    }, $lists);
}

function checkListItems(array $list)
{
    array_map(function ($items) {
        foreach ($items as $item) {
            validateListItem($item);
        }
    }, $list);
}

function validateListItem($item)
{
    $item = trim($item);

    foreach (getIgnoredListItems() as $ignoredString) {
        if (false !== stripos($item, $ignoredString)) {
            // ignore this list item because it contains a special formatting or such.
            return;
        }
    }

    if (!preg_match('@^\[(.+)\]\((.+)\) - (.+).$@i', $item, $matches)) {
        throw new \Exception("Invalid ListItem: " . $item);
    }
    //$name = $matches[1];
    //$url = $matches[2];
    //$description = $matches[3];
}

function onlyHeadlines(array $blocks)
{
    return array_values(array_filter($blocks, function ($block) {
        return 'headline' == $block['type'];
    }));
}

function onlyLists(array $blocks)
{
    return array_values(array_filter($blocks, function ($block) {
        return 'list' == $block['type'];
    }));
}
