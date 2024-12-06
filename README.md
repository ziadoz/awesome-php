# Awesome PHP [![Awesome](https://cdn.jsdelivr.net/gh/sindresorhus/awesome@d7305f38d29fed78fa85652e3a63e154dd8e8829/media/badge.svg)](https://github.com/sindresorhus/awesome)

A curated list of amazingly awesome PHP libraries, resources, and shiny things.

## Contributing and Collaborating
Please see [CONTRIBUTING](https://github.com/ziadoz/awesome-php/blob/master/CONTRIBUTING.md), [CODE-OF-CONDUCT](https://github.com/ziadoz/awesome-php/blob/master/CODE-OF-CONDUCT.md) and [COLLABORATING](https://github.com/ziadoz/awesome-php/blob/master/COLLABORATING.md) for details.

## Table of Contents
- [Awesome PHP](#awesome-php)
  - [Composer Repositories](#composer-repositories)
  - [Dependency Management](#dependency-management)
  - [Dependency Management Extras](#dependency-management-extras)
  - [Frameworks](#frameworks)
  - [Framework Extras](#framework-extras)
  - [Content Management Systems](#content-management-systems-cms)
  - [Components](#components)
  - [Micro Frameworks](#micro-frameworks)
  - [Micro Framework Extras](#micro-framework-extras)
  - [Routers](#routers)
  - [Templating](#templating)
  - [Static Site Generators](#static-site-generators)
  - [HTTP](#http)
  - [Scraping](#scraping)
  - [Middlewares](#middlewares)
  - [URL](#url)
  - [Email](#email)
  - [Files](#Files)
  - [Streams](#streams)
  - [Dependency Injection](#dependency-injection)
  - [Imagery](#imagery)
  - [Testing](#testing)
  - [Continuous Integration](#continuous-integration)
  - [Documentation](#documentation)
  - [Security](#security)
  - [Passwords](#passwords)
  - [Code Analysis](#code-analysis)
  - [Code Quality](#code-quality)
  - [Static Analysis](#static-analysis)
  - [Architectural](#architectural)
  - [Debugging and Profiling](#debugging-and-profiling)
  - [Error Tracking and Monitoring Services](#error-tracking-and-monitoring-services)
  - [Build Tools](#build-tools)
  - [Task Runners](#task-runners)
  - [Navigation](#navigation)
  - [Asset Management](#asset-management)
  - [Geolocation](#geolocation)
  - [Date and Time](#date-and-time)
  - [Event](#event)
  - [Logging](#logging)
  - [E-commerce](#e-commerce)
  - [PDF](#pdf)
  - [Office](#office)
  - [Database](#database)
  - [Migrations](#migrations)
  - [NoSQL](#nosql)
  - [Queue](#queue)
  - [Search](#search)
  - [Command Line](#command-line)
  - [Authentication and Authorization](#authentication-and-authorization)
  - [Markup and CSS](#markup-and-css)
  - [JSON](#json)
  - [Strings](#strings)
  - [Numbers](#numbers)
  - [Filtering, Sanitizing and Validation](#filtering-sanitizing-and-validation)
  - [API](#api)
  - [Caching and Locking](#caching-and-locking)
  - [Data Structure and Storage](#data-structure-and-storage)
  - [Notifications](#notifications)
  - [Deployment](#deployment)
  - [Internationalisation and Localisation](#internationalisation-and-localisation)
  - [Serverless](#serverless)
  - [Configuration](#configuration)
  - [LLMs](#llms)
  - [Third Party APIs](#third-party-apis)
  - [Extensions](#extensions)
  - [Miscellaneous](#miscellaneous)
- [Software](#software)
  - [PHP Installation](#php-installation)
  - [Development Environment](#development-environment)
  - [Virtual Machines](#virtual-machines)
  - [Text Editors and IDEs](#text-editors-and-ides)
  - [Web Applications](#web-applications)
  - [Infrastructure](#infrastructure)
- [Resources](#resources)
  - [PHP Websites](#php-websites)
  - [PHP Books](#php-books)
  - [PHP Videos](#php-videos)
  - [PHP Conferences](#php-conferences)
  - [PHP Podcasts](#php-podcasts)
  - [PHP Newsletters](#php-newsletters)
  - [PHP Reading](#php-reading)
  - [PHP Internals Reading](#php-internals-reading)

### Composer Repositories
*Composer Repositories.*

* [Firegento](https://packages.firegento.com/) - Magento Module Composer Repository.
* [Packagist](https://packagist.org/) - The PHP Package Repository.
* [Packalyst](https://packalyst.com/) - The Laravel Package Repository
* [Private Packagist](https://packagist.com/) - Composer package archive as a service for PHP.
* [WordPress Packagist](https://wpackagist.org/) - Manage your plugins with Composer.

### Dependency Management
*Libraries for dependency and package management.*

* [Composer Installers](https://github.com/composer/installers) - A  multi-framework Composer library installer.
* [Composer](https://getcomposer.org/) - A package and dependency manager.
* [Pie](https://github.com/php/pie) - The official PHP installer for extensions.
* [Phive](https://phar.io/) - A PHAR manager.
* [Pickle](https://github.com/FriendsOfPHP/pickle) - A PHP extension installer.

### Dependency Management Extras
*Extras related to dependency management.*

* [Composed](https://github.com/joshdifabio/composed) - A library to parse your project's Composer environment at runtime.
* [Composer Merge Plugin](https://github.com/wikimedia/composer-merge-plugin) - A composer plugin to merge several `composer.json` files.
* [Composer Normalize](https://github.com/ergebnis/composer-normalize) - A plugin for normalizing `composer.json` files.
* [Composer Patches](https://github.com/cweagans/composer-patches) - A plugin for Composer to apply patches.
* [Composer Prefer Lowest Validator](https://github.com/dereuromark/composer-prefer-lowest) - A plugin to check if minimum dependencies can be installed and tested.
* [Composer Require Checker](https://github.com/maglnet/ComposerRequireChecker) - CLI tool to analyze composer dependencies and verify that no unknown symbols are used in the sources of a package.
* [Composer Unused](https://github.com/composer-unused/composer-unused) - A CLI Tool to scan for unused composer packages.
* [Repman](https://repman.io) - A private PHP package repository manager and Packagist proxy.
* [Satis](https://github.com/composer/satis) - A static Composer repository generator.
* [Tooly](https://github.com/tommy-muehle/tooly-composer-script) - A library to manage PHAR files in a project using Composer.
* [Toran Proxy](https://toranproxy.com) - A Composer proxy for speed and reliability. (:warning: Toran Proxy is being phased out.)

### Frameworks
*Web development frameworks.*

* [CakePHP](https://cakephp.org/) - A rapid application development framework.
* [CodeIgniter](https://codeigniter.com/) - A powerful PHP framework with a very small footprint.
* [Laminas](https://getlaminas.org/) - A framework comprised of individual components (previously Zend Framework).
* [Laravel](https://laravel.com/) - A web application framework with expressive, elegant syntax.
* [Nette](https://nette.org) - A web framework comprised of mature components.
* [Phalcon](https://phalcon.io/en-us) - A framework implemented as a C extension.
* [Spiral](https://spiral.dev/) - A high-performance PHP/Go framework.
* [Symfony](https://symfony.com/) - A set of reusable components and a web framework.
* [Yii2](https://github.com/yiisoft/yii2/) - A fast, secure, and efficient web framework.

### Framework Extras
*Extras related to web development frameworks.*

* [CakePHP CRUD](https://github.com/friendsofcake/crud) - A Rapid Application Development (RAD) plugin for CakePHP.
* [Knp RAD Components](https://rad.knplabs.com/) - A set of Rapid Application Development (RAD) components for Symfony.
* [LaravelS](https://github.com/hhxsv5/laravel-s) - An out-of-the-box adapter between Laravel/Lumen and Swoole.
* [Livewire](https://livewire.laravel.com/) - Powerful, dynamic, front-end UIs without leaving PHP.

### Content Management Systems (CMS)
*Tools for managing digital content.*

* [Backdrop](https://backdropcms.org) - A CMS targeting small-to-medium-sized business and non-profits (a fork of Drupal).
* [Concrete5](https://www.concretecms.com/) - A CMS targeting users with a minimum of technical skills.
* [CraftCMS](https://github.com/craftcms/cms) - A flexible, user-friendly CMS for creating custom digital experiences on the web and beyond.
* [Drupal](https://www.drupal.org) - An enterprise level CMS.
* [Grav](https://github.com/getgrav/grav) - A modern flat-file CMS.
* [Joomla](https://www.joomla.org/) - Another leading CMS.
* [Kirby](https://getkirby.com/) - A flat-file CMS that adapts to any project.
* [Magento](https://github.com/magento/magento2) - The most popular e-commerce platform.
* [Moodle](https://moodle.org/) - An open-source learning platform.
* [Pico CMS](https://picocms.org/) - A stupidly simple, blazing fast, flat file CMS.
* [Statamic](https://statamic.com/) - Build beautiful, easy-to-manage websites.
* [Sulu](https://sulu.io/) - A user and developer friendly focused CMS and Platform based on the Symfony Framework.
* [WordPress](https://github.com/WordPress/WordPress) - A blogging platform and CMS.

### Components
*Standalone components from web development frameworks and development groups.*

* [Aura](https://auraphp.com/) - Independent components, fully decoupled from each other and from any framework.
* [CakePHP Plugins](https://plugins.cakephp.org/) - A directory of CakePHP plugins.
* [Laravel Components](https://github.com/illuminate) - The Laravel Framework components.
* [League of Extraordinary Packages](https://thephpleague.com/) - A PHP package development group.
* [Spatie Open Source](https://spatie.be/open-source) - A collection of open-source PHP and Laravel packages.
* [Symfony Components](https://symfony.com/components) - The components that make Symfony.
* [Laminas Components](https://docs.laminas.dev/components/) - The components that make the Laminas Framework.

### Micro Frameworks
*Micro frameworks and routers.*

* [Laravel Zero](https://laravel-zero.com) - A micro-framework for console applications.
* [Mezzio](https://getexpressive.org/) - A micro-framework by Laminas.
* [Minicli](https://github.com/minicli/minicli) - Minimalist, dependency-free framework for building CLI-centric PHP applications.
* [Silly](https://github.com/mnapoli/silly) - A micro-framework for CLI applications.
* [Slim](https://www.slimframework.com/) - Another simple micro framework.

### Micro Framework Extras
*Extras related to micro frameworks and routers.*

* [Slim Skeleton](https://github.com/slimphp/Slim-Skeleton) - A skeleton for Slim.
* [Slim Twig View](https://github.com/slimphp/Slim-Views) - Integrate Twig into Slim.
* [Slim PHP View](https://github.com/slimphp/PHP-View) - A simple PHP renderer for Slim.

### Routers
*Libraries for handling application routing.*

* [Aura.Router](https://github.com/auraphp/Aura.Router) - A full-featured routing library.
* [Fast Route](https://github.com/nikic/FastRoute) - A fast routing library.
* [Klein](https://github.com/klein/klein.php) - A flexible router.
* [Pux](https://github.com/c9s/Pux) - Another fast routing library.
* [Route](https://github.com/thephpleague/route) - A routing library built on top of Fast Route.

### Templating
*Libraries and tools for templating and lexing.*

* [Latte](https://latte.nette.org/) - The safest and truly intuitive templates for PHP.
* [MtHaml](https://github.com/arnaud-lb/MtHaml) - A PHP implementation of the HAML template language.
* [Mustache](https://github.com/bobthecow/mustache.php) - A PHP implementation of the Mustache template language.
* [PHPTAL](https://phptal.org/) - A PHP implementation of the [TAL](https://en.wikipedia.org/wiki/Template_Attribute_Language) templating language.
* [Plates](http://platesphp.com/) - A native PHP templating library.
* [Smarty](https://www.smarty.net/) - A template engine to complement PHP.
* [Twig](https://twig.symfony.com/) - A comprehensive templating language.

### Static Site Generators
*Tools for pre-processing content to generate web pages.*

* [Couscous](http://couscous.io) - Couscous turns Markdown documentation into beautiful websites. It's GitHub Pages on steroids.
* [Jigsaw](https://jigsaw.tighten.com/) - Simple static sites with Laravel's Blade.
* [Sculpin](https://sculpin.io) - A tool that converts Markdown and Twig into static HTML.

### HTTP
*Libraries for working with HTTP.*

* [Buzz](https://github.com/kriswallsmith/Buzz) - Another HTTP client.
* [Guzzle]( https://github.com/guzzle/guzzle) - A comprehensive HTTP client.
* [HTTPlug](http://httplug.io) - An HTTP client abstraction without binding to a specific implementation.
* [Nyholm PSR-7](https://github.com/Nyholm/psr7) - A super lightweight PSR-7 implementation. Very strict and very fast.
* [PHP VCR](https://php-vcr.github.io/) - A library for recording and replaying HTTP requests.
* [Requests](https://github.com/WordPress/Requests) - A simple HTTP library.
* [Retrofit](https://github.com/tebru/retrofit-php) - A library to ease creation of REST API clients.
* [Symfony HTTP Client](https://github.com/symfony/http-client) - A component to fetch HTTP resources synchronously or asynchronously.
* [Laminas Diactoros](https://github.com/laminas/laminas-diactoros) - PSR-7 HTTP Message implementation.

### Scraping
*Libraries for scraping websites and detecting crawlers.*

* [Chrome PHP](https://github.com/chrome-php/chrome) - Instrument headless Chrome/Chromium instances from PHP.
* [CrawlerDetect](https://github.com/JayBizzle/Crawler-Detect) - A PHP class for detecting bots/crawlers/spiders via the user agent.
* [DiDOM](https://github.com/Imangazaliev/DiDOM) - A super-fast HTML scrapper and parser.
* [Embed](https://github.com/oscarotero/Embed) - An information extractor from any web service or page.
* [PHP Spider](https://github.com/mvdbos/php-spider) - A configurable and extensible PHP web spider.
* [Symfony Panther](https://github.com/symfony/panther) - A browser testing and web crawling library for PHP and Symfony.

### Middlewares
*Libraries for building application using middlewares.*

* [PSR-7 Middlewares](https://github.com/oscarotero/psr7-middlewares) - Inspiring collection of handy middlewares.
* [Relay](https://github.com/relayphp/Relay.Relay) - A PHP 5.5 PSR-7 middleware dispatcher.
* [Stack](https://github.com/stackphp) - A library of stackable middleware for Symfony.
* [Laminas Stratigility](https://github.com/laminas/laminas-stratigility) - Middleware for PHP built on top of PSR-7.

### URL
*Libraries for parsing URLs.*

* [PHP Domain Parser](https://github.com/jeremykendall/php-domain-parser) - A domain suffix parser library.
* [Purl](https://github.com/jwage/purl) - A URL manipulation library.
* [sabre/uri](https://github.com/sabre-io/uri) - A functional URI manipulation library.
* [Uri](https://github.com/thephpleague/uri) - Another URL manipulation library.

### Email
*Libraries for sending and parsing email.*

* [CssToInlineStyles](https://github.com/tijsverkoyen/CssToInlineStyles) - A library to inline CSS in email templates.
* [Email Reply Parser](https://github.com/willdurand/EmailReplyParser) - An email reply parser library.
* [Email Validator](https://github.com/nojacko/email-validator) - A small email address validation library.
* [Fetch](https://github.com/tedious/Fetch) - An IMAP library.
* [Mautic](https://github.com/mautic/mautic) - Email marketing automation
* [PHPMailer](https://github.com/PHPMailer/PHPMailer) - Another mailer solution.
* [PHP IMAP](https://github.com/barbushin/php-imap) - A library to access mailboxes via POP3, IMAP and NNTP.
* [Stampie](https://github.com/Stampie/Stampie) - A library for email services such as [SendGrid](https://sendgrid.com/en-us), [PostMark](https://postmarkapp.com), [MailGun](https://www.mailgun.com/) and [MailChimp](https://mailchimp.com/features/transactional-email/).
* [SwiftMailer](https://swiftmailer.symfony.com) - A mailer solution.
* [Symfony Mailer](https://github.com/symfony/mailer) - A powerful library for creating and sending emails.

### Files
*Libraries for file manipulation and MIME type detection.*

* [CSV](https://github.com/thephpleague/csv) - A CSV data manipulation library.
* [Flysystem](https://github.com/thephpleague/Flysystem) - Abstraction for local and remote filesystems.
* [Gaufrette](https://github.com/KnpLabs/Gaufrette) - A filesystem abstraction layer.
* [PHP FFmpeg](https://github.com/PHP-FFmpeg/PHP-FFmpeg/) - A wrapper for the [FFmpeg](https://www.ffmpeg.org/) video library.
* [UnifiedArchive](https://github.com/wapmorgan/UnifiedArchive) - A unified reader and writer of compressed archives.
* [Parquet](https://github.com/flow-php/parquet) - PHP implementation of Parquet file format 

### Streams
*Libraries for working with streams.*

* [ByteStream](https://amphp.org/byte-stream) - An asynchronous stream abstraction.
* [Streamer](https://github.com/fzaninotto/Streamer) - A simple object-orientated stream wrapper library.

### Dependency Injection
*Libraries that implement the dependency injection design pattern.*

* [Aura.Di](https://github.com/auraphp/Aura.Di) - A serializable dependency injection container with constructor and setter injection, interface and trait awareness, configuration inheritance, and much more.
* [Acclimate](https://github.com/AcclimateContainer/acclimate-container) - A common interface to dependency injection containers and service locators.
* [Auryn](https://github.com/rdlowrey/Auryn) - A recursive dependency injector.
* [Container](https://github.com/thephpleague/container) - Another flexible dependency injection container.
* [Disco](https://github.com/bitExpert/disco) - A PSR-11 compatible, annotation-based dependency injection container.
* [PHP-DI](https://php-di.org/) - A dependency injection container that supports autowiring.
* [Pimple](https://pimple.symfony.com/) - A tiny dependency injection container.
* [Symfony DI](https://github.com/symfony/dependency-injection) - A dependency injection container component.

### Imagery
*Libraries for manipulating images.*

* [Color Extractor](https://github.com/thephpleague/color-extractor) - A library for extracting colours from images.
* [Glide](https://github.com/thephpleague/glide) - An on-demand image manipulation library.
* [Image Hash](https://github.com/jenssegers/imagehash) - A library for generating perceptual image hashes.
* [Image Optimizer](https://github.com/psliwa/image-optimizer) - A library for optimizing images.
* [Imagine](https://imagine.readthedocs.io/en/latest/index.html) - An image manipulation library.
* [Intervention Image](https://github.com/Intervention/image) - Another image manipulation library.
* [PHP Image Workshop](https://github.com/Sybio/ImageWorkshop) - Another image manipulation library.
* [PHP QR Code](https://github.com/chillerlan/php-qrcode/) - QR Code generator and reader.

### Testing
*Libraries for testing codebases and generating test data.*

* [Alice](https://github.com/nelmio/alice) - An expressive fixture generation library.
* [Atoum](https://github.com/atoum/atoum) - A simple testing library.
* [Behat](https://docs.behat.org/en/latest/) - A behaviour driven development (BDD) testing framework.
* [Codeception](https://github.com/Codeception/Codeception) - A full stack testing framework.
* [Faker](https://github.com/fakerphp/faker) - A fake data generator library.
* [Foundry](https://github.com/zenstruck/foundry) - A fixture factory generation library for Doctrine.
* [Infection](https://github.com/infection/infection) - An AST-based PHP Mutation testing framework.
* [Kahlan](https://github.com/kahlan/kahlan) - Full stack Unit/BDD testing framework with built-in stub, mock and code-coverage support.
* [Mink](https://mink.behat.org/en/latest/) - Web acceptance testing.
* [Mockery](https://github.com/mockery/mockery) - A mock object library for testing.
* [Nette Tester](https://github.com/nette/tester) - A productive and enjoyable parallel unit testing framework.
* [ParaTest](https://github.com/paratestphp/paratest) - A parallel testing library for PHPUnit.
* [Pest](https://pestphp.com/) - A testing framework with a focus on simplicity.
* [Phake](https://github.com/phake/phake) - Another mock object library for testing.
* [PHP-Mock](https://github.com/php-mock/php-mock) - A mock library for built-in PHP functions (e.g. time()).
* [PHP MySQL Engine](https://github.com/vimeo/php-mysql-engine) -  A MySQL engine written in pure PHP.
* [PHPSpec](https://github.com/phpspec/phpspec) - A design by specification unit testing library.
* [PHPT](https://qa.php.net/write-test.php) - A test tool used by PHP itself.
* [PHPUnit](https://github.com/sebastianbergmann/phpunit) - A unit testing framework.
* [PHPUnit Polyfills](https://github.com/Yoast/PHPUnit-Polyfills/) - Simplifies running PHPUnit tests on multiple PHPUnit versions.
* [Prophecy](https://github.com/phpspec/prophecy) - A highly opinionated mocking framework.
* [VFS Stream](https://github.com/bovigo/vfsStream) - A virtual filesystem stream wrapper for testing.

### Continuous Integration
*Libraries and applications for continuous integration.*

* [CircleCI](https://circleci.com) - A continuous integration platform.
* [GitlabCi](https://about.gitlab.com/solutions/continuous-integration/) - Let GitLab CI test, build, deploy your code. TravisCi like.
* [Jenkins](https://www.jenkins.io/) - A continuous integration platform with [PHP support](https://www.jenkins.io/solutions/php/).
* [JoliCi](https://github.com/jolicode/JoliCi) - A continuous integration client written in PHP and powered by Docker.
* [PHPCI](https://github.com/dancryer/phpci) - An open-source continuous integration platform for PHP.
* [SemaphoreCI](https://semaphoreci.com) - A continuous integration platform for open-source and private projects.
* [Shippable](https://jfrog.com/blog/weve-acquired-shippable-to-complete-devops-pipeline-automation-from-code-to-production/) - A Docker based continuous integration platform for open source and private projects.
* [Travis CI](https://www.travis-ci.com) - A continuous integration platform.
* [Setup PHP](https://github.com/shivammathur/setup-php) - A GitHub Action for PHP.

### Documentation
*Libraries for generating project documentation.*

* [APIGen](https://github.com/apigen/apigen) - Another API documentation generator.
* [daux.io](https://github.com/dauxio/daux.io) - A documentation generator that uses Markdown files.
* [phpDocumentor](https://phpdoc.org/) - A documentation generator.
* [phpDox](https://phpdox.net/) - A documentation generator for PHP projects (that is not limited to API documentation).
* [zircote/swagger-php](https://github.com/zircote/swagger-php) - Generate OpenAPI documentation for your RESTful API.

### Security
*Libraries for generating secure random numbers, encrypting data and scanning and testing for vulnerabilities.*

* [AntiXSS](https://github.com/voku/anti-xss) - A library that tries to preventing Cross-Site Scripting (XSS) attacks by blacklisting.
* [Halite](https://paragonie.com/project/halite) - A simple library for encryption using [libsodium](https://github.com/jedisct1/libsodium).
* [Optimus](https://github.com/jenssegers/optimus) - Id obfuscation based on Knuth's multiplicative hashing method.
* [OWASP](https://owasp.org/) - Explore the world of cyber security.
* [PHPGGC](https://github.com/ambionics/phpggc) - A library of PHP unserializable payloads along with a tool to generate them.
* [PHP Encryption](https://github.com/defuse/php-encryption) - Secure PHP Encryption Library.
* [PHPSecLib](https://phpseclib.sourceforge.net) - A pure PHP secure communications library.
* [random_compat](https://github.com/paragonie/random_compat) - PHP 5.x support for `random_bytes()` and `random_int()`
* [Roave Security Advisories](https://github.com/Roave/SecurityAdvisories) - This package ensures that your application doesn't have installed dependencies with known security vulnerabilities.
* [Secure Headers](https://github.com/BePsvPT/secure-headers) - A package that adds security related headers to HTTP response.
* [Symfony Security Monitoring](https://security.symfony.com/) - A web tool to check your Composer dependencies for security advisories, previously known as "SensioLabs Security Check".
* [SQLMap](https://github.com/sqlmapproject/sqlmap) - An automatic SQL injection and database takeover tool.
* [Zap](https://github.com/zaproxy/zaproxy) - An integrated penetration testing tool for web applications.

### Passwords
*Libraries and tools for working with and storing passwords.*

* [GenPhrase](https://github.com/timoh6/GenPhrase) - A library for generating secure random passphrases.
* [Password Compat](https://github.com/ircmaxell/password_compat) - A compatibility library for the new PHP 5.5 password functions.
* [Password Policy](https://github.com/ircmaxell/password-policy) - A password policy library for PHP and JavaScript.
* [Password Validator](https://github.com/jeremykendall/password-validator) - A library for validating and upgrading password hashes.
* [Password-Generator](https://github.com/hackzilla/password-generator) - PHP library to generate random passwords.
* [PHP Password Lib](https://github.com/ircmaxell/PHP-PasswordLib) - A library for generating and validating passwords.
* [phpass](https://www.openwall.com/phpass/) - A portable password hashing framework.
* [Zxcvbn PHP](https://github.com/bjeavons/zxcvbn-php) - A realistic PHP password strength estimate library based on Zxcvbn JS.

### Code Analysis
*Libraries and tools for analysing, parsing and manipulating codebases.*

* [Better Reflection](https://github.com/Roave/BetterReflection) - AST-based reflection library that allows analysis and manipulation of code
* [Code Climate](https://codeclimate.com) - An automated code review.
* [Editorconfig-Checker](https://github.com/editorconfig-checker/editorconfig-checker.php) - A command line utility which verifies that your files implement your `.editorconfig` rules.
* [GrumPHP](https://github.com/phpro/grumphp) - A PHP code-quality tool.
* [PHP AST Viewer](https://php-ast-viewer.com/) - A tool for viewing the Abstract Syntax Tree of PHP code.
* [PHP Magic Number Detector](https://github.com/povils/phpmnd) - A library that detects magic numbers in code.
* [PHP Parser](https://github.com/nikic/PHP-Parser) - A PHP parser written in PHP.
* [PHP Semantic Versioning Checker](https://github.com/tomzx/php-semver-checker) - A command line utility that compares two source sets and determines the appropriate semantic versioning to apply.
* [Phpactor](https://github.com/phpactor/phpactor) - PHP completion, refactoring and introspection tool.
* [PHPLOC](https://github.com/sebastianbergmann/phploc) - A tool for quickly measuring the size of a PHP project.
* [PHPQA](https://github.com/EdgedesignCZ/phpqa) - A tool for running QA tools (phploc, phpcpd, phpcs, pdepend, phpmd, phpmetrics).
* [Rector](https://github.com/rectorphp/rector) - A tool to upgrade and refactor code.
* [Scrutinizer](https://scrutinizer-ci.com/) - A web tool to [scrutinise PHP code](https://github.com/scrutinizer-ci/php-analyzer).
* [UBench](https://github.com/devster/ubench) - A simple micro-benchmark library.

### Code Quality
*Libraries for managing code quality, formatting and linting.*

* [CaptainHook](https://github.com/captainhookphp/captainhook) - An easy-to-use and flexible Git hook library.
* [PHP CodeSniffer](https://github.com/PHPCSStandards/PHP_CodeSniffer) - A library that detects and can auto-fix PHP, CSS and JS coding standard violations.
* [PHP CS Fixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer) - A coding standards fixer library.
* [PHP CS Fixer Configurator](https://mlocati.github.io/php-cs-fixer-configurator/) - A web application to help configure PHP CS Fixer rule sets.
* [PHP Mess Detector](https://github.com/phpmd/phpmd) - A library that scans code for bugs, sub-optimal code, unused parameters and more.
* [PHPCheckstyle](https://github.com/PHPCheckstyle/phpcheckstyle) - A tool to help adhere to certain coding conventions.
* [PHPCPD](https://github.com/sebastianbergmann/phpcpd) - A library that detects copied and pasted code.
* [Laravel Pint](https://github.com/laravel/pint) - A coding standards fixer library for Laravel.

### Static Analysis
*Libraries for performing static analysis of PHP code.*

* [Exakat](https://github.com/exakat/exakat) - A static analysis engine for PHP.
* [Deptrac](https://github.com/qossmic/deptrac) - A static code analysis tool that helps to enforce rules for dependencies between software layers.
* [Mondrian](https://github.com/Trismegiste/Mondrian) - A code analysis tool using Graph Theory.
* [phan](https://github.com/phan/phan) - A static analyzer based on PHP 7+ and the php-ast extension.
* [PHP Architecture Tester](https://github.com/carlosas/phpat) - Easy-to-use architecture testing tool for PHP.
* [PHPCompatibility](https://github.com/PHPCompatibility/PHPCompatibility) - A PHP compatibility checker for PHP CodeSniffer.
* [PhpDependencyAnalysis](https://github.com/mamuz/PhpDependencyAnalysis) - A tool to create customizable dependency graphs.
* [PHPDoc Parser](https://github.com/phpstan/phpdoc-parser) - Next-gen phpDoc parser with support for intersection types and generics
* [PHP Metrics](https://github.com/phpmetrics/PhpMetrics) - A static metric library.
* [PHP Migration](https://github.com/monque/PHP-Migration) - A static analyzer for PHP version migration.
* [PHPStan](https://github.com/phpstan/phpstan) - A PHP Static Analysis Tool.
* [Psalm](https://github.com/vimeo/psalm) - A static analysis tool for finding errors in PHP applications.

### Architectural
*Libraries related to design patterns, programming approaches and ways to organize code.*

* [Design Patterns PHP](https://github.com/DesignPatternsPHP/DesignPatternsPHP ) - A repository of software patterns implemented in PHP.
* [Finite](https://yohan.giarel.li/Finite/) - A simple PHP finite state machine.
* [Functional PHP](https://github.com/lstrojny/functional-php) - A functional programming library.
* [Iter](https://github.com/nikic/iter) - A library that provides iteration primitives using generators.
* [IterTools PHP](https://github.com/markrogoyski/itertools-php) - A library that provides functionality for working with iterable entities (similar to itertools library in Python).
* [Pipeline](https://github.com/thephpleague/pipeline) - A pipeline pattern implementation.
* [Porter](https://github.com/ScriptFUSION/Porter) - Data import abstraction library for consuming Web APIs and other data sources.
* [RulerZ](https://github.com/K-Phoen/rulerz) - A powerful rule engine and implementation of the Specification pattern.

### Debugging and Profiling
*Libraries and tools for debugging errors and profiling code.*

* [APM](https://pecl.php.net/package/APM) - Monitoring extension collecting errors and statistics into SQLite/MySQL/StatsD.
* [Barbushin PHP Console](https://github.com/barbushin/php-console) - Another web debugging console using Google Chrome.
* [Kint](https://github.com/kint-php/kint) - A debugging and profiling tool.
* [Metrics](https://github.com/beberlei/metrics) - A simple metrics API library.
* [PCOV](https://github.com/krakjoe/pcov) - A self-contained code coverage compatible driver.
* [PHP Console](https://github.com/Seldaek/php-console) - A web debugging console.
* [PHP Debug Bar](http://phpdebugbar.com/) - A debugging toolbar.
* [PHPBench](https://github.com/phpbench/phpbench) - A benchmarking Framework.
* [PHPSpy](https://github.com/adsr/phpspy) - A low-overhead sampling profiler.
* [Symfony VarDumper](https://github.com/symfony/var-dumper) - A variable dumper component.
* [Tracy](https://github.com/nette/tracy) - A simple error detection, logging and time measuring library.
* [Whoops](https://github.com/filp/whoops) - A pretty error-handling library.
* [xDebug](https://github.com/xdebug/xdebug) - A debug and profile tool for PHP.
* [XHProf](https://github.com/phacility/xhprof) - A profiling tool originally developed by Facebook.
* [Z-Ray](https://www.zend.com/products/z-ray) - A debug and profile tool for Zend Server.

### Error Tracking and Monitoring Services
*Self-hosted or cloud-based application performance monitoring & error tracking tools*

* [Blackfire](https://www.blackfire.io) - A low-overhead code profiler.
* [BugSnag](https://www.bugsnag.com/) - Error and Real User Monitoring.
* [Honeybadger](https://www.honeybadger.io/) - Error Tracking & Application Monitoring for Developers.
* [Rollbar](https://rollbar.com/) - Error Logging & Tracking Service for Software Teams.
* [Sentry](https://sentry.io/welcome/) - Application Performance Monitoring & Error Tracking Software.
* [Tideways](https://tideways.com/) - Monitoring and profiling tool.

### Build Tools
*Project build and automation tools.*

* [Box](https://github.com/box-project/box) - A utility to build PHAR files.
* [Construct](https://github.com/jonathantorres/construct) - A PHP project/micro-package generator.
* [Phing](https://www.phing.info/) - A PHP project build system inspired by Apache Ant.
* [RMT](https://github.com/liip/RMT) - A library for versioning and releasing software.

### Task Runners
*Libraries for automating and running tasks.*

* [Bldr](https://bldr.io/) - A PHP Task runner built on Symfony components.
* [Jobby](https://github.com/jobbyphp/jobby) - A PHP cron job manager without modifying crontab.
* [Robo](https://github.com/consolidation/Robo) - A PHP Task runner with object-orientated configurations.
* [Task](https://taskphp.github.io/) - A pure PHP task runner inspired by Grunt and Gulp.

### Navigation
*Tools for building navigation structures.*

* [KnpMenu](https://github.com/KnpLabs/KnpMenu) - A menu library.
* [Menu](https://github.com/spatie/menu) - A flexible menu library with a fluent interface.

### Asset Management
*Tools for managing, compressing and minifying website assets.*

* [JShrink](https://github.com/tedious/JShrink) - A JavaScript minifier library.
* [Laravel Mix](https://github.com/laravel-mix/laravel-mix ) - An elegant wrapper around Webpack for the 80% use case.
* [Symfony Asset](https://github.com/symfony/asset) - Manages URL generation and versioning of web assets.
* [Symfony Encore](https://github.com/symfony/webpack-encore) - A simple but powerful API for processing and compiling assets built around Webpack.

### Geolocation
*Libraries for geocoding addresses and working with latitudes and longitudes.*

* [Country List](https://github.com/umpirsky/country-list) - A list of all countries with names and ISO 3166-1 codes.
* [GeoCoder](https://geocoder-php.org/) - A geocoding library.
* [GeoJSON](https://github.com/jmikola/geojson) - A GeoJSON implementation.
* [GeoTools](https://github.com/thephpleague/geotools) - A library of geo-related tools.
* [PHPGeo](https://github.com/mjaschen/phpgeo) - A simple geo library.

### Date and Time
*Libraries for working with dates and times.*

* [CalendR](https://yohan.giarel.li/CalendR/) - A calendar management library.
* [Carbon](https://github.com/briannesbitt/Carbon) - A simple DateTime API extension.
* [Chronos](https://github.com/cakephp/chronos) - A DateTime API extension supporting both mutable and immutable date/time.
* [Moment.php](https://github.com/fightbulc/moment.php) - Moment.js inspired PHP DateTime handler with i18n support.
* [Yasumi](https://github.com/azuyalabs/yasumi) - A library to help you calculate the dates and names of holidays.

### Event
*Libraries that are event-driven or implement non-blocking event loops.*
* [Amp](https://github.com/amphp/amp) - An event driven non-blocking I/O library.
* [Broadway](https://github.com/broadway/broadway) - An event source and CQRS library.
* [CakePHP Event](https://github.com/cakephp/event) - An event dispatcher library.
* [Elephant.io](https://github.com/ElephantIO/elephant.io) - Yet another web socket library.
* [Evenement](https://github.com/igorw/evenement) - An event dispatcher library.
* [Event](https://github.com/thephpleague/event) - An event library with a focus on domain events.
* [Fast CGI Client](https://github.com/hollodotme/fast-cgi-client) - A client to make synchronous/asynchronous requests through php-fpm socket.
* [FrankenPHP](https://frankenphp.dev/) - A modern PHP app server written in Go.
* [Pawl](https://github.com/ratchetphp/Pawl) - An asynchronous web socket client.
* [Prooph Event Store](https://github.com/prooph/event-store) - An event source component to persist event messages
* [PHP Defer](https://github.com/php-defer/php-defer) - Golang's defer statement for PHP.
* [Ratchet](https://github.com/ratchetphp/Ratchet) - A web socket library.
* [ReactPHP](https://github.com/reactphp/reactphp) - An event driven non-blocking I/O library.
* [RxPHP](https://github.com/ReactiveX/RxPHP) - A reactive extension library.
* [Swoole](https://github.com/swoole/swoole-src) - An event-driven asynchronous and concurrent networking communication framework with high performance for PHP written in C.
* [Workerman](https://github.com/walkor/Workerman) - An event driven non-blocking I/O library.

### Logging
*Libraries for generating and working with log files.*

* [Monolog](https://github.com/Seldaek/monolog) - A comprehensive logger.

### E-commerce
*Libraries and applications for taking payments and building online e-commerce stores.*

* [Money](https://github.com/moneyphp/money) - A PHP implementation of Fowler's money pattern.
* [Brick Money](https://github.com/brick/money) - A money library for PHP, with support for contexts, cash roundings, currency conversion.
* [OmniPay](https://github.com/thephpleague/omnipay) - A framework agnostic multi-gateway payment processing library.
* [Payum](https://github.com/payum/payum) - A payment abstraction library.
* [Shopsys Framework](https://github.com/shopsys/shopsys/) - An open source e-commerce platform for in-house development teams.
* [Shopware](https://github.com/shopware/shopware) - Highly customizable e-commerce software
* [Swap](https://github.com/florianv/swap) - An exchange rates library.
* [Sylius](https://sylius.com/) - An open source e-commerce solution.

### PDF
*Libraries and software for working with PDF files.*

* [Browsershot](https://github.com/spatie/browsershot) - Convert HTML to an image, PDF or string.
* [Dompdf](https://github.com/dompdf/dompdf) - A HTML to PDF converter.
* [Gotenberg](https://github.com/gotenberg/gotenberg-php) - A PHP client for interacting with Gotenberg.
* [Snappy](https://github.com/KnpLabs/snappy) - A PDF and image generation library.
* [TCPDF](https://tcpdf.org/) - An open source PHP class for generating PDF documents.

### Office
*Libraries for working with office suite documents.*

* [PHPPowerPoint](https://github.com/PHPOffice/PHPPresentation) - A library for working with Microsoft PowerPoint Presentations.
* [PHPWord](https://github.com/PHPOffice/PHPWord) - A library for working with Microsoft Word documents.
* [PHPSpreadsheet](https://github.com/PHPOffice/PhpSpreadsheet) - A pure PHP library for reading and writing spreadsheet files (successor of PHPExcel).
* [OpenSpout](https://github.com/openspout/openspout) - A community driven fork of `box/spout`, a PHP library to read and write spreadsheet files (CSV, XLSX and ODS), in a fast and scalable way.
### Database
*Libraries for interacting with databases using object-relational mapping (ORM) or datamapping techniques.*

* [Atlas.Orm](https://github.com/atlasphp/Atlas.Orm) - A data mapper implementation for your persistence model in PHP.
* [Aura.Sql](https://github.com/auraphp/Aura.Sql) - Provides an extension to the native PDO along with a profiler and connection locator.
* [Aura.SqlQuery](https://github.com/auraphp/Aura.SqlQuery) - Independent query builders for MySQL, PostgreSQL, SQLite, and Microsoft SQL Server.
* [Baum](https://github.com/etrepat/baum) - A nested set implementation for Eloquent.
* [CakePHP ORM](https://github.com/cakephp/orm) - Object-Relational Mapper, implemented using the DataMapper pattern.
* [Cycle ORM](https://github.com/cycle/orm) - PHP DataMapper, ORM.
* [Doctrine Extensions](https://github.com/doctrine-extensions/DoctrineExtensions ) - A collection of Doctrine behavioural extensions.
* [Doctrine](https://www.doctrine-project.org/) - A comprehensive DBAL and ORM.
* [Laravel Eloquent](https://github.com/illuminate/database) - A simple ORM.
* [Pomm](https://github.com/chanmix51/Pomm) - An Object Model Manager for PostgreSQL.
* [ProxyManager](https://github.com/Ocramius/ProxyManager) - A set of utilities to generate proxy objects for data mappers.
* [RedBean](https://redbeanphp.com/index.php) - A lightweight, configuration-less ORM.
* [Slimdump](https://github.com/webfactory/slimdump) - An easy dumper tool for MySQL.
* [Spot2](https://github.com/spotorm/spot2) - A MySQL datamapper ORM.

### Migrations
Libraries to help manage database schemas and migrations.

* [Doctrine Migrations](https://www.doctrine-project.org/projects/migrations.html) - A migration library for Doctrine.
* [Migrations](https://github.com/icomefromthenet/Migrations) - A migration management library.
* [Phinx](https://github.com/cakephp/phinx) - Another database migration library.
* [PHPMig](https://github.com/davedevelopment/phpmig) - Another migration management library.
* [Ruckusing](https://github.com/ruckus/ruckusing-migrations) - Database migrations for PHP ala ActiveRecord Migrations with support for MySQL, Postgres, SQLite.

### NoSQL
*Libraries for working with "NoSQL" backends.*

* [MongoDB](https://github.com/mongodb/mongo-php-driver) - MongoDB PHP Driver.
* [PHPMongo](https://github.com/sokil/php-mongo) - A MongoDB ORM.
* [Predis](https://github.com/predis/predis) - A feature-complete Redis library.

### Queue
*Libraries for working with event and task queues.*

* [Bernard](https://github.com/bernardphp/bernard) - A multibackend abstraction library.
* [BunnyPHP](https://github.com/jakubkulhan/bunny) - A performant pure-PHP AMQP (RabbitMQ) sync and also async (ReactPHP) library.
* [Pheanstalk](https://github.com/pheanstalk/pheanstalk) - A Beanstalkd client library.
* [PHP AMQP](https://github.com/php-amqplib/php-amqplib) - A pure PHP AMQP library.
* [Tarantool Queue](https://github.com/tarantool-php/queue) - PHP bindings for Tarantool Queue.
* [Thumper](https://github.com/php-amqplib/Thumper) - A RabbitMQ pattern library.
* [Enqueue](https://github.com/php-enqueue/enqueue-dev) - A message queue packages for PHP that supports RabbitMQ, AMQP, STOMP, Amazon SQS, Redis and Doctrine transports.

### Search
*Libraries and software for indexing and performing search queries on data.*

* [Elastica](https://github.com/ruflin/Elastica) - A client library for ElasticSearch.
* [ElasticSearch PHP](https://github.com/elastic/elasticsearch-php) - The official client library for [ElasticSearch](https://www.elastic.co/).
* [Solarium](https://www.solarium-project.org/) - A client library for [Solr](https://solr.apache.org/).
* [SphinxQL Query Builder](https://foolcode.github.io/SphinxQL-Query-Builder/) - A query library for the [Sphinx](https://sphinxsearch.com/) and [Manticore](https://manticoresearch.com/) search engines.

### Command Line
*Libraries related to the command line.*

* [Aura.Cli](https://github.com/auraphp/Aura.Cli) - Provides the equivalent of request ( Context ) and response ( Stdio ) objects for the command line interface, including Getopt support, and an independent Help object for describing commands.
* [Cilex](https://github.com/Cilex/Cilex) - A micro framework for building command line tools.
* [CLI Menu](https://github.com/php-school/cli-menu) - A library for building CLI menus.
* [CLIFramework](https://github.com/c9s/CLIFramework) - A command-line framework supports zsh/bash completion generation, subcommands and option constraints. It also powers phpbrew.
* [CLImate](https://github.com/thephpleague/climate) - A library for outputting colors and special formatting.
* [Commando](https://github.com/nategood/commando) - Another simple command line opt parser.
* [Cron Expression](https://github.com/mtdowling/cron-expression) - A library to calculate cron run dates.
* [GetOpt](https://github.com/getopt-php/getopt-php) - A command line opt parser.
* [GetOptionKit](https://github.com/c9s/GetOptionKit) - Another command line opt parser.
* [PsySH](https://github.com/bobthecow/psysh) - Another PHP REPL.
* [ShellWrap](https://github.com/MrRio/shellwrap) - A simple command line wrapper library.

### Authentication and Authorization
*Libraries for implementing user authentication and authorization.*

* [Aura.Auth](https://github.com/auraphp/Aura.Auth) - Provides authentication functionality and session tracking using various adapters.
* [SocialConnect Auth](https://github.com/socialConnect/auth) - An open source social sign (OAuth1\OAuth2\OpenID\OpenIDConnect).
* [Json Web Token](https://github.com/lcobucci/jwt) - Json Tokens to authenticate and transmit information.
* [OAuth 1.0 Client](https://github.com/thephpleague/oauth1-client) - An OAuth 1.0 client library.
* [OAuth 2.0 Client](https://github.com/thephpleague/oauth2-client) - An OAuth 2.0 client library.
* [OAuth2 Server](https://bshaffer.github.io/oauth2-server-php-docs/) - Another OAuth2 server implementation.
* [OAuth2 Server](https://oauth2.thephpleague.com/) - An OAuth2 authentication server, resource server and client library.
* [Opauth](https://github.com/opauth/opauth) - A multi-provider authentication framework.
* [Paseto](https://github.com/paragonie/paseto) - Platform-Agnostic Security Tokens.
* [PHP oAuthLib](https://github.com/daviddesberg/PHPoAuthLib) - Another OAuth library.
* [Sentinel Social](https://cartalyst.com/manual/sentinel-social/2.0) - A library for social network authentication.
* [Sentinel](https://cartalyst.com/manual/sentinel/2.0) - A framework agnostic authentication & authorisation library.
* [TwitterOAuth](https://github.com/abraham/twitteroauth) - A Twitter OAuth library.

### Markup and CSS
*Libraries for working with markup and CSS formats.*

* [Cebe Markdown](https://github.com/cebe/markdown) - A fast and extensible Markdown parser.
* [CommonMark PHP](https://github.com/thephpleague/commonmark) - Highly-extensible Markdown parser which fully supports the [CommonMark spec](https://spec.commonmark.org/).
* [Decoda](https://github.com/milesj/decoda) - A lightweight markup parser library.
* [Essence](https://github.com/essence/essence) - A library for extracting web media.
* [Embera](https://github.com/mpratt/Embera) - An Oembed consumer library.
* [HTML to Markdown](https://github.com/thephpleague/html-to-markdown) - Converts HTML into Markdown.
* [HTML5 PHP](https://github.com/Masterminds/html5-php) - An HTML5 parser and serializer library.
* [Parsedown](https://github.com/erusev/parsedown) - Another Markdown parser.
* [PHP CSS Parser](https://github.com/MyIntervals/PHP-CSS-Parser) - A Parser for CSS Files written in PHP.
* [PHP Markdown](https://github.com/michelf/php-markdown) - A Markdown parser.
* [Shiki PHP](https://github.com/spatie/shiki-php) - A [Shiki](https://github.com/shikijs/shiki) code highlighting package in PHP.
* [VObject](https://github.com/sabre-io/vobject) - A library for parsing VCard and iCalendar objects.

### JSON
*Libraries for working with JSON.*

* [JSON Lint](https://github.com/Seldaek/jsonlint) - A JSON lint utility.
* [JSONMapper](https://github.com/JsonMapper/JsonMapper) - A library for mapping JSON to PHP objects.

### Strings
*Libraries for parsing and manipulating strings.*

* [Agent](https://github.com/jenssegers/agent) - A PHP desktop/mobile user agent parser, based on Mobiledetect.
* [ANSI to HTML5](https://github.com/sensiolabs/ansi-to-html) - An ANSI to HTML5 converter library.
* [Color Jizz](https://github.com/mikeemoo/ColorJizz-PHP) - A library for manipulating and converting colors.
* [Device Detector](https://github.com/matomo-org/device-detector) - Another library for parsing user agent strings.
* [Hyphenation](https://github.com/heiglandreas/Org_Heigl_Hyphenator) - Text-Hyphenation based on the TeX-hyphenation Algorithm
* [Jieba-PHP](https://github.com/fukuball/jieba-php) - A PHP port of Python's jieba. Chinese text segmentation for natural language processing.
* [Mobile-Detect](https://github.com/serbanghita/Mobile-Detect) - A lightweight PHP class for detecting mobile devices (including tablets).
* [Patchwork UTF-8](https://github.com/nicolas-grekas/Patchwork-UTF8) - A portable library for working with UTF-8 strings.
* [Portable ASCII](https://github.com/voku/portable-ascii) - A library to convert strings to ASCII.
* [Portable UTF-8](https://github.com/voku/portable-utf8) - A string manipulation library with UTF-8 safe replacement methods.
* [Slugify](https://github.com/cocur/slugify) - A library to convert strings to slugs.
* [SQL Formatter](https://github.com/jdorn/sql-formatter/) - A library for formatting SQL statements.
* [Stringy](https://github.com/voku/Stringy) - A string manipulation library with multibyte support.
* [UA Parser](https://github.com/tobie/ua-parser/tree/master/php) - A library for parsing user agent strings.
* [URLify](https://github.com/jbroadway/urlify) - A PHP port of Django's URLify.js.
* [UUID](https://github.com/ramsey/uuid) - A library for generating UUIDs.

### Numbers
*Libraries for working with numbers.*

* [Brick Math](https://github.com/brick/math) - A library providing large number support: `BigInteger`, `BigDecimal` and `BigRational`.
* [ByteUnits](https://github.com/gabrielelana/byte-units) - A library to parse, format and convert byte units in binary and metric systems.
* [DecimalObject](https://github.com/php-collective/decimal-object) - A value object to handle decimals/floats easily and more precisely.
* [IP](https://github.com/darsyn/ip) - An immutable value object for working with IPv4 and IPv6 addresses.
* [LibPhoneNumber for PHP](https://github.com/giggsey/libphonenumber-for-php) - A PHP implementation of Google's phone number handling library.
* [PHP Conversion](https://github.com/Crisu83/php-conversion) - Another library for converting between units of measure.
* [PHP Units of Measure](https://github.com/triplepoint/php-units-of-measure) - A library for converting between units of measure.
* [MathPHP](https://github.com/markrogoyski/math-php) - A math library for PHP.

### Filtering, Sanitizing and Validation
*Libraries for filtering, sanitizing and validating data.*

* [Assert](https://github.com/beberlei/assert) - A validation library with a rich set of assertions. Supports assertion chaining and lazy assertions.
* [Aura.Filter](https://github.com/auraphp/Aura.Filter) - Provides tools to validate and sanitize objects and arrays.
* [CakePHP Validation](https://github.com/cakephp/validation) - Another validation library.
* [Filterus](https://github.com/ircmaxell/filterus) - A simple PHP filtering library.
* [HTML Purifier](https://github.com/ezyang/htmlpurifier) - A standards compliant HTML filter.
* [ISO-codes](https://github.com/ronanguilloux/IsoCodes) - A library for validating inputs according to standards from ISO, International Finance, Public Administrations, GS1, Book Industry, Phone numbers & Zipcodes for many countries.
* [JSON Schema](https://github.com/jsonrainbow/json-schema) - A [JSON Schema](https://json-schema.org/) validation library.
* [MetaYaml](https://github.com/romaricdrigon/MetaYaml) - A schema validation library that supports YAML, JSON and XML.
* [Respect Validation](https://github.com/Respect/Validation) - A simple validation library.
* [Symfony HTML Sanitizer](https://github.com/symfony/html-sanitizer) - An HTML sanitizer library.
* [Upload](https://github.com/brandonsavage/Upload) - A library for handling file uploads and validation.
* [Valitron](https://github.com/vlucas/valitron) - Another validation library.
* [Valinor](https://github.com/CuyZ/Valinor) - A library for mapping to strongly typed value objects.
* [Volan](https://github.com/serkin/Volan) - Another simplified validation library.

### API
*Libraries and web tools for developing APIs.*

* [API Platform](https://api-platform.com ) - Expose in minutes a hypermedia REST API that embraces JSON-LD, Hydra format.
* [Laminas API Tool Skeleton](https://github.com/laminas-api-tools/api-tools-skeleton) - An API builder built with the Laminas Framework.
* [Drest](https://github.com/leedavis81/drest) - A library for exposing Doctrine entities as REST resource endpoints.
* [HAL](https://github.com/blongden/hal) - A Hypertext Application Language (HAL) builder library.
* [Hateoas](https://github.com/willdurand/Hateoas) - A HATEOAS REST web service library.
* [Jane](https://github.com/janephp/janephp/) - An OpenApi client generator with validation support.
* [Negotiation](https://github.com/willdurand/Negotiation) - A content negotiation library.
* [Restler](https://github.com/Luracast/Restler) - A lightweight framework to expose PHP methods as RESTful web API.
* [PackageGenerator](https://github.com/WsdlToPhp/PackageGenerator) - Package Generator generates a PHP SDK from any WSDL.

### Caching and Locking
*Libraries for caching data and acquiring locks.*

* [APIx Cache](https://github.com/apix/cache) - A thin PSR-6 cache wrapper to various caching backends emphasizing cache tagging and indexing.
* [CacheTool](https://github.com/gordalina/cachetool) - A tool to clear APC/opcode caches from the command line.
* [CakePHP Cache](https://github.com/cakephp/cache) - A caching library.
* [Doctrine Cache](https://github.com/doctrine/cache) - A caching library.
* [Metaphore](https://github.com/sobstel/metaphore) - Cache slam defense using a semaphore to prevent dogpile effect.
* [Stash](https://github.com/tedious/Stash) - Another library for caching.
* [Laminas Cache](https://github.com/laminas/laminas-cache) - Another caching library.
* [Lock](https://github.com/php-lock/lock) - A lock library to provide exclusive execution.

### Data Structure and Storage
*Libraries that implement data structure or storage techniques.*

* [CakePHP Collection](https://github.com/cakephp/collection) - A simple collections library.
* [Fractal](https://github.com/thephpleague/fractal) - A library for converting complex data structures to JSON output.
* [Ginq](https://github.com/akanehara/ginq) - Another PHP library based on .NET's LINQ.
* [JsonMapper](https://github.com/cweiske/jsonmapper) - A library that maps nested JSON structures onto PHP classes.
* [JSON Machine](https://github.com/halaxa/json-machine) - Provides iteration over huge JSONs using simple `foreach`
* [Knapsack](https://github.com/DusanKasan/Knapsack) - Collection library inspired by Clojure's sequences.
* [msgpack.php](https://github.com/rybakit/msgpack.php) - A pure PHP implementation of the [MessagePack](https://msgpack.org/) serialization format.
* [PINQ](https://github.com/TimeToogo/Pinq) - A PHP library based on .NET's LINQ (Language Integrated Query).
* [Serializer](https://github.com/schmittjoh/serializer) - A library for serializing and de-serializing data.
* [YaLinqo](https://github.com/Athari/YaLinqo) - Yet Another LINQ to Objects for PHP.
* [Laminas Serializer](https://github.com/laminas/laminas-serializer) - Another library for serialising and de-serialising data.

### Notifications
*Libraries for working with notification software.*

* [JoliNotif](https://github.com/jolicode/JoliNotif) - A cross-platform library for desktop notification (support for Growl, notify-send, toaster, etc)
* [Notification Pusher](https://github.com/Ph3nol/NotificationPusher) - A standalone library for device push notifications.
* [Notificato](https://github.com/mac-cain13/notificato) - A library for handling push notifications.
* [Notificator](https://github.com/namshi/notificator) - A lightweight notification library.
* [Php-pushwoosh](https://github.com/gomoob/php-pushwoosh) - A PHP Library to easily send push notifications with the Pushwoosh REST Web Services.

### Deployment
*Libraries for project deployment.*

* [Deployer](https://github.com/deployphp/deployer) - A deployment tool.
* [Envoy](https://github.com/laravel/envoy) - A tool to run SSH tasks with PHP.
* [Rocketeer](https://github.com/rocketeers/rocketeer) - A fast and easy deployer for the PHP world.

### Internationalisation and Localisation
*Libraries for Internationalization (I18n) and Localization (L10n).*

* [Aura.Intl](https://github.com/auraphp/Aura.Intl) - Provides internationalization (I18N) tools, specifically package-oriented per-locale message translation.
* [CakePHP I18n](https://github.com/cakephp/i18n) - Message translation and localization for dates and numbers.

### Serverless
*Libraries and tools to help build serverless web applications.*

* [Bref](https://bref.sh/) - Serverless PHP on AWS Lambda.
* [OpenWhisk](https://openwhisk.apache.org/) - An open-source serverless cloud platform.
* [Serverless Framework](https://www.serverless.com/framework) - An open-source framework for building serverless applications.
* [Laravel Vapor](https://vapor.laravel.com/) - A serverless deployment platform for Laravel, powered by AWS.

## Configuration
*Libraries and tools for configuration.*

* [PHP Dotenv](https://github.com/vlucas/phpdotenv) - Parse and load environment variables from `.env` files.
* [Symfony Dotenv](https://github.com/symfony/dotenv)- Parse and load environment variables from `.env` files.
* [Yo! Symfony TOML](https://github.com/yosymfony/toml) - A PHP parser for [TOML](https://github.com/toml-lang/toml).

### LLMs
*Libraries for working with Large Language Models.*

* [Instructor for PHP](https://github.com/cognesy/instructor-php) - Structured data outputs with LLMs, in PHP.
* [LLPhant](https://github.com/theodo-group/LLPhant) - A comprehensive PHP Generative AI Framework using OpenAI GPT 4. Inspired by Langchain.
* [OpenAI Client](https://github.com/openai-php/client) - OpenAI PHP is a supercharged community-maintained PHP API client that allows you to interact with OpenAI API.
* [OpenAI Client for Laravel](https://github.com/openai-php/laravel) - OpenAI PHP for Laravel is a supercharged PHP API client that allows you to interact with OpenAI API.
* [PHP Mistral AI SDK](https://github.com/SoftCreatR/php-mistral-ai-sdk) - A powerful and easy-to-use PHP SDK for the Mistral AI API, allowing seamless integration of advanced AI-powered features into your PHP projects.
* [AIpi - Universal API client for common AI models](https://github.com/skito/aipi-php) - Simple lightweight PHP library for interacting with common AI models, that provides universal interface.

### Third Party APIs
*Libraries for accessing third party APIs.*

* [Amazon Web Service SDK](https://github.com/aws/aws-sdk-php) - The official PHP AWS SDK library.
* [AsyncAWS](https://async-aws.com/) - An unofficial asynchronous PHP AWS SDK.
* [Campaign Monitor](https://campaignmonitor.github.io/createsend-php/) - The official Campaign Monitor PHP library.
* [Github](https://github.com/KnpLabs/php-github-api) - A library to interface with the Github API.
* [Mailgun](https://github.com/mailgun/mailgun-php) The official Mailgun PHP API.
* [Square](https://github.com/square/connect-php-sdk) - The official Square PHP SDK for payments and other Square APIs.
* [Stripe](https://github.com/stripe/stripe-php) - The official Stripe PHP library.
* [Twilio](https://github.com/twilio/twilio-php) - The official Twilio PHP REST API.

### Extensions
*Libraries to help build PHP extensions.*

* [PHP CPP](https://www.php-cpp.com/) - A C++ library for developing PHP extensions.
* [Zephir](https://github.com/zephir-lang/zephir ) - A compiled language between PHP and C++ for developing PHP extensions.

### Miscellaneous
*Useful libraries or utilities that don't fit into the categories above.*

* [Annotations](https://github.com/doctrine/annotations) - An annotation library (part of Doctrine).
* [BotMan](https://github.com/botman/botman) - A framework agnostic PHP library to build cross-platform chatbots.
* [ClassPreloader](https://github.com/ClassPreloader/ClassPreloader) - A library for optimizing autoloading.
* [Ganesha](https://github.com/ackintosh/ganesha) - A PHP implementation of Circuit Breaker pattern.
* [Hprose-PHP](https://github.com/hprose/hprose-php) - A cross-language RPC.
* [Laravel Serializable Closure](https://github.com/laravel/serializable-closure) - A library that allows Closures to be serialized.
* [noCAPTCHA](https://github.com/ARCANEDEV/noCAPTCHA) - Helper for Google's noCAPTCHA (reCAPTCHA).
* [Pagerfanta](https://github.com/whiteoctober/Pagerfanta) - A pagination library.
* [Safe](https://github.com/thecodingmachine/safe) - All PHP functions, rewritten to throw exceptions instead of returning false.

# Software
*Software for creating a development environment.*

### PHP Installation
*Tools to help install and manage PHP on your computer.*

* [Brew PHP Switcher](https://github.com/philcook/brew-php-switcher) - Brew PHP switcher.
* [HomeBrew](https://brew.sh/) - A package manager for OSX.
* [PHP Brew](https://github.com/phpbrew/phpbrew) - A PHP version manager and installer.
* [PHP Build](https://github.com/php-build/php-build) - Another PHP version installer.
* [Static PHP CLI](https://github.com/crazywhalecc/static-php-cli) - Build or [download](https://dl.static-php.dev/static-php-cli/) static versions of PHP CLI and FPM.

### Development Environment
*Software and tools for creating and sharing a development environment.*

* [Ansible](https://www.ansible.com/) - A radically simple orchestration framework.
* [DDEV](https://github.com/ddev/ddev) - a local web development environment system for PHP.
* [Docker](https://www.docker.com/) - A containerization platform.
* [Docker PHP Extension Installer](https://github.com/mlocati/docker-php-extension-installer) - Easily install PHP extensions in Docker containers.
* [Docksal](https://github.com/docksal/docksal) - Unified, Docker :whale: powered web development environments for macOS, Windows, and Linux.
* [Expose](https://github.com/beyondcode/expose) - An open-source PHP tunneling service.
* [Lando](https://lando.dev/) - Push-button development environments.
* [Laravel Homestead](https://laravel.com/docs/master/homestead) - A local development environment for Laravel.
* [Laravel Herd](https://herd.laravel.com/) - A one click PHP development environment for macOS and Windows.
* [Laradock](http://laradock.io/) - A full PHP development environment based on Docker.
* [PHPMon](https://phpmon.app/) - A macOS menu bar app for managing PHP installations (works with [Laravel Valet](https://laravel.com/docs/master/valet)).
* [Puppet](https://www.puppet.com) - A server automation framework and application.
* [Takeout](https://github.com/tighten/takeout) - A Docker-based development-only dependency manager.
* [Vagrant](https://www.vagrantup.com/) - A portable development environment utility.

### Virtual Machines
*Alternative PHP virtual machines.*

* [Hack](https://hacklang.org/) - A programming language for HHVM.
* [HHVM](https://github.com/facebook/hhvm) - A Virtual Machine, Runtime and JIT for PHP by Facebook.
* [PeachPie](https://github.com/peachpiecompiler/peachpie) - PHP compiler and runtime for .NET and .NET Core.

### Text Editors and IDEs
*Text Editors and Integrated Development Environments (IDE) with support for PHP.*

* [Eclipse for PHP Developers](https://www.eclipse.org/downloads/) - A PHP IDE based on the Eclipse platform.
* [Apache NetBeans](https://netbeans.apache.org/front/main/index.html) - An IDE with support for PHP and HTML5.
* [PhpStorm](https://www.jetbrains.com/phpstorm/) - A commercial PHP IDE.
* [VS Code](https://code.visualstudio.com/) - An open source code editor.

### Web Applications
*Web-based applications and tools.*

* [3V4L](https://3v4l.org/) - An online PHP & HHVM shell.
* [Adminer](https://www.adminer.org/) - Database management in a single PHP file.
* [Cachet](https://github.com/cachethq/cachet) - The open source status page system.
* [DBV](https://github.com/victorstanciu/dbv) - A database version control application.
* [Lychee](https://github.com/electerious/Lychee) - An easy to use and great looking photo-management-system.
* [MailCatcher](https://github.com/sj26/mailcatcher) - A web tool for capturing and viewing emails.
* [phpMyAdmin](https://github.com/phpmyadmin/phpmyadmin) - A web interface for MySQL/MariaDB.
* [PHP Queue](https://github.com/CoderKungfu/php-queue) - An application for managing queueing backends.
* [phpRedisAdmin](https://github.com/ErikDubbelboer/phpRedisAdmin) - A simple web interface to manage [Redis](https://redis.io/) databases.
* [PHPSandbox](https://phpsandbox.io) - An online IDE for PHP in the browser.

### Infrastructure
*Infrastructure for providing PHP applications and services.*

* [appserver.io](https://github.com/appserver-io/appserver) - A multithreaded application server for PHP, written in PHP.
* [php-pm](https://github.com/php-pm/php-pm) - A process manager, supercharger and load balancer for PHP applications.
* [RoadRunner](https://github.com/roadrunner-server/roadrunner) - High-performance PHP application server, load-balancer and process manager.

# Resources
Various resources, such as books, websites and articles, for improving your PHP development skills and knowledge.

### PHP Websites
*Useful PHP-related websites.*

* [Nomad PHP](https://nomadphp.com/) - A online PHP learning resource.
* [Laravel News](https://laravel-news.com/) - The official Laravel blog.
* [PHP Annotated Monthly](https://blog.jetbrains.com/phpstorm/tag/php-annotated-monthly/) - A monthly digest of PHP news.
* [PHP FIG](https://www.php-fig.org/) - The PHP Framework Interoperability Group.
* [PHP Package Development Standards](http://php-pds.com) - Package development standards for PHP.
* [PHP School](https://www.phpschool.io/) - Open Source Learning for PHP.
* [PHP The Right Way](https://phptherightway.com/) - A PHP best practice quick reference guide.
* [PHP UG](https://php.ug) - A website to help people locate their nearest PHP user group (UG).
* [PHP Watch](https://php.watch/) - PHP articles, news, upcoming changes, RFCs and more.
* [Unit Testing Tips](https://testing-tips.sarvendev.com/) - Unit Testing Tips by examples in PHP.

### PHP Books
*Fantastic PHP-related books.*

* [Domain-Driven Design in PHP](https://leanpub.com/ddd-in-php) - Real examples written in PHP showcasing DDD Architectural Styles.
* [Functional Programming in PHP](https://www.functionalphp.com/) - This book will show you how to leverage these new PHP5.3+ features by understanding functional programming principles
* [Grumpy PHPUnit](https://leanpub.com/grumpy-phpunit) - A book about unit testing with PHPUnit by Chris Hartjes.
* [Mastering Object-Orientated PHP](https://masteringobjectorientedphp.com/) - A book about object-orientated PHP by Brandon Savage.
* [PHP Cookbook](https://www.oreilly.com/library/view/php-cookbook/9781098121310/) - This cookbook provides code recipes to help you resolve a variety of coding issues.
* [Modernizing Legacy Applications in PHP](https://leanpub.com/mlaphp) - A book about modernizing legacy PHP applications by Paul M. Jones.
* [Scaling PHP Applications](https://www.scalingphpbook.com) - An ebook about scaling PHP applications by Steve Corona.
* [Securing PHP: Core Concepts](https://leanpub.com/securingphp-coreconcepts) - A book about common security terms and practices for PHP by Chris Cornutt.
* [Signaling PHP](https://leanpub.com/signalingphp) - A book about catching PCNTL signals in CLI scripts by Cal Evans.
* [XML Parsing with PHP](https://www.phparch.com/books/xml-parsing-with-php/) - This book covers parsing and validating XML documents, leveraging XPath expressions, and working with namespaces as well as how to create and modify XML files programmatically.

### PHP Videos
*Fantastic PHP-related videos.*

* [Laracasts](https://laracasts.com) - Screencasts about Laravel, Vue JS and more.
* [Laravel YouTube Channel](https://www.youtube.com/channel/UCfO2GiQwb-cwJTb1CuRSkwg) - The official Laravel YouTube channel.
* [Program With Gio](https://www.youtube.com/playlist?list=PLr3d3QYzkw2xabQRUpcZ_IBk9W50M9pe-) - PHP 8 course by Gio.
* [Programming with Anthony](https://www.youtube.com/playlist?list=PLM-218uGSX3DQ3KsB5NJnuOqPqc5CW2kW) - A video series by Anthony Ferrara.
* [SymfonyCasts](https://symfonycasts.com/) - Screencasts and tutorials about PHP and Symfony.

### PHP Conferences
*PHP conferences.*

* [Laracon EU](https://www.youtube.com/@LaraconEU) - Laracon EU is a 2-day event for people who are interested in learning Laravel and related technologies, or who want to share their knowledge with others.
* [PHP[TEK]](https://tek.phparch.com/) - The longest-running web developer conference in the United States that has a focus on the PHP programming language.
* [PHP UK Conference](https://www.youtube.com/user/phpukconference/videos) - A collection of videos from the PHP UK Conference.

### PHP Podcasts
*Podcasts with a focus on PHP topics.*

* [Laravel News Podcast](https://podcast.laravel-news.com/) - The Laravel News Podcast brings you all the latest news and events related to the Laravel PHP Framework.
* [Mostly Technical](https://mostlytechnical.com/) - Hosted by Ian Landsman and Aaron Francis, Mostly Technical is a lively discussion on Laravel, business, and an eclectic mix of related topics.
* [No Compromises](https://show.nocompromises.io/) - Two seasoned salty programming veterans talk best practices based on years of working with Laravel SaaS teams.
* [North Meets South Web Podcast](https://www.northmeetssouth.audio/) - Jacob Bennett and Michael Dyrynda conquer a 14.5 hour time difference to talk about life as web developers.
* [Over Engineered](https://overengineered.fm/) - A podcast in mini-series where we explore unimportant programming questions in extreme detail.
* [PHP Internals News](https://phpinternals.news) - A podcast about PHP internals.
* [PHP Town Hall](https://phptownhall.com/) - A casual PHP podcast by Ben Edmunds and Phil Sturgeon.
* [php[podcast] episodes from php[architect]](https://www.phparch.com/podcast/) - The official podcast of php[architect] the industry's leading tech magazine and publisher focused on PHP and web development.
* [PHPUgly](https://www.phpugly.com/) - The ramblings of a few overworked PHP Developers.
* [The Laracasts Snippet](https://laracasts.simplecast.com) - The Laracasts snippet, each episode, offers a single thought on some aspect of web development.
* [The Laravel Podcast](https://laravelpodcast.com/) - Laravel and PHP development news and discussion.
* [The PHP Roundtable](https://phproundtable.com/) - The PHP Roundtable is a casual gathering of developers discussing topics that PHP nerds care about.
* [Voices of the ElePHPant](https://voicesoftheelephpant.com/) - Interviews with the people who make the PHP community special.

### PHP Newsletters
*PHP-related news directly to your inbox.*

* [PHP Weekly](https://www.phpweekly.com/) - A weekly newsletter about PHP.

### PHP Reading
*PHP-related reading materials.*

* [php[architect]](https://www.phparch.com/magazine/) - A monthly magazine dedicated to PHP.

### PHP Internals Reading
*Reading materials related to the PHP internals or performance.*

* [PHP RFCs](https://wiki.php.net/rfc) - The home of PHP RFCs (Request for Comments).
* [Externals](https://externals.io/) - PHP internal discussions.
* [PHP RFC Watch](https://github.com/beberlei/php-rfc-watch) - Watch the latest PHP [RFCs](https://wiki.php.net/rfc).
* [PHP Internals Book](https://www.phpinternalsbook.com/) - An online book about PHP internals, written by three core developers.
