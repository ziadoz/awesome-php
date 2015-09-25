# Awesome PHP
A curated list of amazingly awesome PHP libraries, resources and shiny things.

## Contributing
Please see [CONTRIBUTING](https://github.com/ziadoz/awesome-php/blob/master/CONTRIBUTING.md) for details.

## Table of Contents
- [Awesome PHP](#awesome-php)
	- [Dependency Management](#dependency-management)
	- [Dependency Management Extras](#dependency-management-extras)
	- [Frameworks](#frameworks)
	- [Framework Extras](#framework-extras)
	- [Components](#components)
	- [Micro Frameworks](#micro-frameworks)
	- [Micro Framework Extras](#micro-framework-extras)
	- [Routers](#routers)
	- [Templating](#templating)
	- [Static Site Generators](#static-site-generators)
	- [HTTP](#http)
	- [Middlewares](#middlewares)
	- [URL](#url)
	- [Email](#email)
	- [Files](#files)
	- [Streams](#streams)
	- [Dependency Injection](#dependency-injection)
	- [Imagery](#imagery)
	- [Testing](#testing)
	- [Continuous Integration](#continuous-integration)
	- [Documentation](#documentation)
	- [Security](#security)
	- [Passwords](#passwords)
	- [Code Analysis](#code-analysis)
	- [Architectural](#architectural)
	- [Debugging and Profiling](#debugging-and-profiling)
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
	- [Markup](#markup)
	- [Strings](#strings)
	- [Numbers](#numbers)
	- [Filtering and Validation](#filtering-and-validation)
	- [API](#api)
	- [Caching](#caching)
	- [Data Structure and Storage](#data-structure-and-storage)
	- [Notifications](#notifications)
	- [Deployment](#deployment)
	- [Internationalisation and Localisation](#internationalisation-and-localisation)
	- [Third Party APIs](#third-party-apis)
	- [Extensions](#extensions)
	- [Miscellaneous](#miscellaneous)
- [Software](#software)
	- [PHP Installation](#php-installation)
	- [Development Environment](#development-environment)
	- [Virtual Machines](#virtual-machines)
	- [Integrated Development Environment](#integrated-development-environment)
	- [Web Applications](#web-applications)
	- [Infrastructure](#infrastructure)
- [Resources](#resources)
	- [PHP Websites](#php-websites)
	- [Other Websites](#other-websites)
	- [PHP Books](#php-books)
	- [PHP Videos](#php-videos)
	- [PHP Reading](#php-reading)
	- [PHP Internals Reading](#php-internals-reading)
- [Contributing](#contributing)

## Dependency Management
*Libraries for dependency and package management.*

* [Composer](http://getcomposer.org/)/[Packagist](http://packagist.org/) - A package and dependency manager.
* [Composer Installers](https://github.com/composer/installers) - A  multi framework Composer library installer.
* [Pickle](https://github.com/FriendsOfPHP/pickle) - A PHP extension installer.
* [Melody](http://melody.sensiolabs.org/) - A tool to build one file Composer scripts.

## Dependency Management Extras
*Extras related to dependency management.*

* [Satis](https://github.com/composer/satis) - A static Composer repository generator.
* [Toran Proxy](https://toranproxy.com) - A static Composer repository and proxy.
* [Composition](https://github.com/bamarni/composition) - A library to check your Composer environment at runtime.
* [Version](https://github.com/herrera-io/php-version) - A parsing and comparison library for semantic versioning.
* [NameSpacer](https://github.com/ralphschindler/Namespacer) - A library to convert from underscores to namespaces.
* [Patch Installer](https://github.com/goatherd/patch-installer) - A library to install patches using Composer.
* [Composer Checker](https://github.com/silpion/composer-checker) - A tool to validate Composer configurations.

## Frameworks
*Web development frameworks.*

* [Symfony 2](http://symfony.com/) - A framework comprised of individual components (SF2).
* [Zend Framework 2](http://framework.zend.com) - Another framework comprised of individual components (ZF2).
* [Laravel 5](http://laravel.com/) - Another PHP framework (L5).
* [Aura PHP](http://auraphp.com/) - A framework of independent components.
* [Yii2](https://github.com/yiisoft/yii2/) - Another PHP framework.
* [Nette](http://nette.org) - Another framework comprised of individual components.
* [PPI Framework 2](http://www.ppi.io) - An interoperability framework.
* [CakePHP](http://cakephp.org/) - A rapid application development framework (CP).
* [Phalcon](http://phalconphp.com/en/) - A framework implemented as a C extension.

## Framework Extras
*Extras related to web development frameworks.*

* [Symfony CMF](https://github.com/symfony-cmf/symfony-cmf) - A Content Management Framework to create custom CMS.
* [Knp RAD Bundle](http://rad.knplabs.com/) - A Rapid Application Development (RAD) bundle for Symfony 2.
* [CakePHP CRUD](https://github.com/friendsofcake/crud) - A Rapid Application Development (RAD) plugin for CakePHP.

## Components
*Standalone components from web development frameworks and development groups.*

* [Symfony2 Components](http://symfony.com/doc/master/components/index.html) - The components that make Symfony 2.
* [Zend Framework 2 Components](https://packages.zendframework.com/) - The components that make Zend Framework.
* [Aura Components](http://auraphp.github.com/) - A package of PHP 5.4 components.
* [CakePHP Plugins](http://plugins.cakephp.org/) - A directory of CakePHP plugins.
* [Hoa Project](http://hoa-project.net/En/) - Another package of PHP components.
* [League of Extraordinary Packages](https://thephpleague.com/) - A PHP package development group.

## Micro Frameworks
*Micro frameworks and routers.*

* [Silex](http://silex.sensiolabs.org/) - A micro framework built around Symfony2 components.
* [Slim](http://www.slimframework.com/) - Another simple micro framework.
* [Bullet PHP](http://bulletphp.com/) - A micro framework for building REST APIs.
* [Lumen](http://lumen.laravel.com) - A micro-framework by Laravel.
* [Proton](https://github.com/alexbilbie/Proton) - A StackPHP compatible micro framework

## Micro Framework Extras
*Extras related to micro frameworks and routers.*

* [Silex Skeleton](https://github.com/fabpot/Silex-Skeleton) - A project skeleton for Silex.
* [Silex Web Profiler](https://github.com/silexphp/Silex-WebProfiler) - A web debug toolbar for Silex.
* [Slim Skeleton](https://github.com/codeguy/Slim-Skeleton) - A skeleton for Slim.
* [Slim View](https://github.com/codeguy/Slim-Views) - A collection of custom views for Slim.

## Routers
*Libraries for handling application routing.*
* [Fast Route](https://github.com/nikic/FastRoute) - A fast routing library.
* [Route](https://github.com/thephpleague/route) - A routing library built on top of Fast Route.
* [Pux](https://github.com/c9s/Pux) - Another fast routing library.
* [Klein](https://github.com/chriso/klein.php) - A flexible router.

## Templating
*Libraries and tools for templating and lexing.*

* [Twig](http://twig.sensiolabs.org/) - A comprehensive templating language.
* [Twig Cache Extension](https://github.com/asm89/twig-cache-extension) - A template fragment cache library for Twig.
* [Mustache](https://github.com/bobthecow/mustache.php) - A PHP implementation of the Mustache template language.
* [Phly Mustache](https://github.com/weierophinney/phly_mustache) - Another PHP implementation of the Mustache template language.
* [MtHaml](https://github.com/arnaud-lb/MtHaml) - A PHP implementation of the HAML template language.
* [PHPTAL](http://phptal.org/) - A PHP implementation of the [TAL](http://en.wikipedia.org/wiki/Template_Attribute_Language) templating language.
* [Plates](http://platesphp.com/) - A native PHP templating library.
* [Lex](https://github.com/pyrocms/lex) - A lightweight template parser.

## Static Site Generators
*Tools for pre-processing content to generate web pages.*

* [Sculpin](http://sculpin.io) - A tool that converts Markdown and Twig into static HTML.
* [Phrozn](http://phrozn.info) - Another tool that converts Textile, Markdown and Twig into HTML.

## HTTP
*Libraries for working with HTTP and scraping websites.*

* [Guzzle]( https://github.com/guzzle/guzzle) - A comprehensive HTTP client.
* [Buzz](https://github.com/kriswallsmith/Buzz) - Another HTTP client.
* [Requests](https://github.com/rmccue/Requests) - A simple HTTP library.
* [HTTPFul](https://github.com/nategood/httpful) - A chainable HTTP client.
* [Goutte](https://github.com/fabpot/Goutte) - A simple web scraper.
* [PHP VCR](http://php-vcr.github.io/) - A library for recording and replaying HTTP requests.

## Middlewares
*Libraries for building application using middlewares.*

* [Stack](https://github.com/stackphp) - A library of stackable middleware for Silex/Symfony.
* [Slim Middleware](https://github.com/codeguy/Slim-Middleware) - A collection of custom middleware for Slim.
* [Conduit](https://github.com/phly/conduit) - A port of [Sencha Connect](https://github.com/senchalabs/connect) to PHP.

## URL
*Libraries for parsing URLs.*

* [Purl](https://github.com/jwage/purl) - A URL manipulation library.
* [PHP Domain Parser](https://github.com/jeremykendall/php-domain-parser) - A domain suffix parser library.
* [Url](https://github.com/thephpleague/url) - A simple URL manipulation library.

## Email
*Libraries for sending and parsing email.*

* [SwiftMailer](http://swiftmailer.org/) - A mailer solution.
* [PHPMailer](https://github.com/PHPMailer/PHPMailer) - Another mailer solution.
* [Fetch](https://github.com/tedivm/Fetch) - An IMAP library.
* [Email Reply Parser](https://github.com/willdurand/EmailReplyParser) - An email reply parser library.
* [Stampie](https://github.com/henrikbjorn/Stampie) - A library for email services such as [SendGrid](http://sendgrid.com), [PostMark](http://postmarkapp.com), [MailGun](http://www.mailgun.com) and [Mandrill](http://www.mandrill.com).
* [CssToInlineStyles](https://github.com/tijsverkoyen/CssToInlineStyles) - A library to inline CSS in email templates.
* [Email Validator](https://github.com/nojacko/email-validator) - A small email address validation library.

## Files
*Libraries for file manipulation and MIME type detection.*

* [Gaufrette](https://github.com/KnpLabs/Gaufrette) - A filesystem abstraction layer.
* [Flysystem](https://github.com/FrenkyNet/Flysystem) - Another filesystem abstraction layer.
* [Canal](https://github.com/dflydev/dflydev-canal) - A library to determine internet media types.
* [Apache MIME Types](https://github.com/dflydev/dflydev-apache-mime-types) - A library that parses Apache MIME types.
* [Ferret](https://github.com/versionable/Ferret) - A MIME detection library.
* [Hoa Mime](https://github.com/hoaproject/Mime) - Another MIME detection library.
* [Lurker](https://github.com/henrikbjorn/Lurker) - A resource tracking library.
* [PHP File Locator](https://github.com/herrera-io/php-file-locator) - A library for locating files in large projects.
* [PHP FFmpeg](https://github.com/alchemy-fr/PHP-FFmpeg/) - A wrapper for the [FFmpeg](http://www.ffmpeg.org/) video library.
* [CSV](https://github.com/thephpleague/csv) - A CSV data manipulation library.

## Streams
*Libraries for working with streams.*

* [Streamer](https://github.com/fzaninotto/Streamer) - A simple object-orientated stream wrapper library.

## Dependency Injection
*Libraries that implement the dependency injection design pattern.*

* [Pimple](http://pimple.sensiolabs.org/) - A tiny dependency injection container.
* [Auryn](https://github.com/rdlowrey/Auryn) - Another dependency injection container.
* [Container](https://github.com/thephpleague/container) - Another flexible dependency injection container.
* [PHP-DI](http://php-di.org/) - A dependency injection container that supports autowiring.
* [Acclimate](https://github.com/jeremeamia/acclimate) - A common interface to dependency injection containers and service locators.
* [Symfony DI](https://github.com/symfony/DependencyInjection) - A dependency injection container component (SF2).

## Imagery
*Libraries for manipulating images.*

* [Imagine](http://imagine.readthedocs.org/en/latest/index.html) - An image manipulation library.
* [PHP Image Workshop](https://github.com/Sybio/ImageWorkshop) - Another image manipulation library.
* [Intervention Image](https://github.com/Intervention/image) - Another image manipulation library.
* [GIF Frame Extractor](https://github.com/Sybio/GifFrameExtractor) - A library to extract GIF animation frame information.
* [GIF Creator](https://github.com/Sybio/GifCreator) - A library to create GIF animations from multiple images.
* [Image With Text](https://github.com/nmcteam/image-with-text) - A library for embedding text into images.
* [Color Extractor](https://github.com/php-loep/color-extractor) - A library for extracting colours from images.
* [Glide](https://github.com/thephpleague/glide) - An on-demand image manipulation library.
* [Image Optimizer](https://github.com/psliwa/image-optimizer) - A library for optimizing images.

## Testing
*Libraries for testing codebases and generating test data.*

* [PHPUnit](https://github.com/sebastianbergmann/phpunit) - A unit testing framework.
* [DBUnit](https://github.com/sebastianbergmann/dbunit) - A database testing library for PHPUnit.
* [ParaTest](https://github.com/brianium/paratest) - A parallel testing library for PHPUnit.
* [PHPSpec](https://github.com/phpspec/phpspec) - A design by specification unit testing library.
* [Codeception](https://github.com/Codeception/Codeception) - A full stack testing framework.
* [AspectMock](https://github.com/Codeception/AspectMock) - A mocking framework for PHPUnit/Codeception.
* [Atoum](https://github.com/atoum/atoum) - A simple testing library.
* [Mockery](https://github.com/padraic/mockery) - A mock object library for testing.
* [Phake](https://github.com/mlively/Phake) - Another mock object library for testing.
* [Prophecy](https://github.com/phpspec/prophecy) - A highly opinionated mocking framework.
* [Faker](https://github.com/fzaninotto/Faker) - A fake data generator library.
* [Samsui](https://github.com/mauris/samsui) - Another fake data generator library.
* [Alice](https://github.com/nelmio/alice) - An expressive fixture generation library.
* [Behat](http://behat.org/) - A behaviour driven development (BDD) testing framework.
* [Pho](https://github.com/danielstjules/pho) - Another behaviour driven development testing framework.
* [Mink](http://mink.behat.org/) - Web acceptance testing.
* [HTTP Mock](https://github.com/InterNations/http-mock) - A library for mocking HTTP requests in unit tests.
* [VFS Stream](https://github.com/mikey179/vfsStream) - A virtual filesystem stream wrapper for testing.
* [VFS](https://github.com/adlawson/vfs.php) - Another virtual filesystem for testing.
* [Locust](http://locust.io/) - A modern load test library written in Python.
* [Peridot](https://github.com/peridot-php/peridot) - An event driven test framework.

## Continuous Integration
*Libraries and applications for continuous integration.*

* [Travis CI](https://travis-ci.org/) - A continuous integration platform.
* [SemaphoreCI](https://semaphoreapp.com/) - A continuous integration platform for open source and private projects.
* [PHPCI](http://www.phptesting.org/) - An open source continuous integration platform for PHP.
* [Sismo](http://sismo.sensiolabs.org/) - A continuous testing server library.
* [Jenkins](http://jenkins-ci.org/) - A continous integration platform with [PHP support](http://jenkins-php.org/index.html).
* [JoliCi](https://github.com/jolicode/JoliCi) - A continuous integration client written in PHP and powered by Docker.

## Documentation
*Libraries for generating project documentation.*

* [Sami](https://github.com/fabpot/Sami) - An API documentation generator.
* [APIGen](https://github.com/apigen/apigen) - Another API documentation generator.
* [PHP Documentor 2](https://github.com/phpDocumentor/phpDocumentor2) - A documentation generator.
* [phpDox](http://phpdox.de/) - A documentation generator for PHP projects (that is not limited to API documentation).

## Security
*Libraries for generating secure random numbers, encrypting data and scanning for vulnerabilities.*

* [HTML Purifier](https://github.com/ezyang/htmlpurifier) - A standards compliant HTML filter.
* [RandomLib](https://github.com/ircmaxell/RandomLib) - A library for generating random numbers and strings.
* [True Random](https://github.com/pixeloution/true-random) - A library that generates random numbers using [www.random.org](http://www.random.org/).
* [SecurityMultiTool](https://github.com/padraic/SecurityMultiTool) - A PHP security library.
* [PHPSecLib](http://phpseclib.sourceforge.net/) - A pure PHP secure communications library.
* [TCrypto](https://github.com/timoh6/TCrypto) - A simple encrypted key-value storage library.
* [PHP IDS](https://github.com/PHPIDS/PHPIDS) - A structured PHP security layer.
* [PHP SSH](https://github.com/Herzult/php-ssh) - An experimental object orientated SSH wrapper library.
* [IniScan](https://github.com/psecio/iniscan) - A tool that scans PHP INI files for security.
* [SensioLabs Security Check](https://security.sensiolabs.org/) - A web tool to check your Composer dependencies for security advisories.
* [Zed](https://www.owasp.org/index.php/OWASP_Zed_Attack_Proxy_Project) - An integrated penetration testing tool for web applications.

## Passwords
*Libraries and tools for working with and storing passwords.*

* [Password Compat](https://github.com/ircmaxell/password_compat) - A compatibility library for the new PHP 5.5 password functions.
* [phpass](http://www.openwall.com/phpass/) - A portable password hashing framework.
* [PHP Password Lib](https://github.com/ircmaxell/PHP-PasswordLib) - A library for generating and validating passwords.
* [Password Policy](https://github.com/ircmaxell/password-policy) - A password policy library for PHP and JavaScript.
* [Password Validator](https://github.com/jeremykendall/password-validator) - A library for validating and upgrading password hashes.
* [Zxcvbn PHP](https://github.com/bjeavons/zxcvbn-php) - A realistic PHP password strength estimate library based on Zxcvbn JS.
* [GenPhrase](https://github.com/timoh6/GenPhrase) - A library for generating secure random passphrases.

## Code Analysis
*Libraries and tools for analysing, parsing and manipulating codebases.*

* [PHP Parser](https://github.com/nikic/PHP-Parser) - A PHP parser written in PHP.
* [PHPPHP](https://github.com/ircmaxell/PHPPHP) - A PHP VM implementation in PHP.
* [PHPSandbox](https://github.com/fieryprophet/php-sandbox) - A PHP sandbox environment.
* [Dissect](https://github.com/jakubledl/dissect) - A set of tools for lexical and syntactical analysis.
* [PHP Mess Detector](http://phpmd.org/) - A library that scans code for bugs, sub-optimal code, unused parameters and more.
* [PHP Code Sniffer](https://github.com/squizlabs/PHP_CodeSniffer) - A library that detects PHP, CSS and JS coding standard violations.
* [PHPCPD](https://github.com/sebastianbergmann/phpcpd) - A library that detects copied and pasted code.
* [PHP Analyser](https://github.com/scrutinizer-ci/php-analyzer) - A library for analysing PHP code to find bugs and errors.
* [PHP CS Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) - A coding standards fixer library.
* [PHP Manipulator](https://github.com/schmittjoh/php-manipulator) - A library for analysing and modifying PHP Source Code.
* [PHP Metrics](https://github.com/Halleck45/PhpMetrics) - A static metric library.
* [PHP Refactoring Browser](https://github.com/QafooLabs/php-refactoring-browser) - A command line utility for refactoring PHP code.
* [UBench](https://github.com/devster/ubench) - A simple micro benchmark library.
* [Athletic](https://github.com/polyfractal/athletic) - An annotation based benchmark framework.
* [Mondrian](https://github.com/Trismegiste/Mondrian) - A code analysis tool using Graph Theory.
* [Scrutinizer](https://scrutinizer-ci.com/) - A web tool to scrutinise PHP code.
* [PHPLOC](https://github.com/sebastianbergmann/phploc) - A tool for quickly measuring the size of a PHP project.
* [PHPCheckstyle](https://github.com/jbrooksuk/phpcheckstyle) - A tool to help adhere to certain coding conventions.
* [PhpDependencyAnalysis](https://github.com/mamuz/PhpDependencyAnalysis) - A tool to create customisable dependency graphs.
* [Code Climate](http://codeclimate.com) - An automated code review.

## Architectural
*Libraries related to design patterns, programming approaches and ways to organize code.*

* [PHP Option](https://github.com/schmittjoh/php-option) - An option type library.
* [Ruler](https://github.com/bobthecow/Ruler) - A simple stateless production rules engine.
* [Finite](http://yohan.giarel.li/Finite) - A simple PHP finite state machine.
* [Compose](https://github.com/igorw/compose) - A function composition library.
* [Monad PHP](https://github.com/ircmaxell/monad-php) - A simple Monad library.
* [Patchwork](http://antecedent.github.io/patchwork/) - A library for redefining userland functions.
* [Galapagos](https://github.com/endel/galapagos) - Evolutionary language transformation.
* [Design Patterns PHP](https://github.com/domnikl/DesignPatternsPHP) - A repository of software patterns implemented in PHP.
* [Functional PHP](https://github.com/lstrojny/functional-php) - A functional programming library.
* [Lib Accessor](https://github.com/phine/lib-accessor) - A library for simplifying accessors.
* [Iter](https://github.com/nikic/iter) - A library that provides iteration primitives using generators.

## Debugging and Profiling
*Libraries and tools for debugging and profiling code.*

* [xDebug](https://github.com/xdebug/xdebug) - A debug and profile tool for PHP.
* [PHP Debug Bar](http://phpdebugbar.com/) - A debugging toolbar.
* [PHP Console](https://github.com/Seldaek/php-console) - A web debugging console.
* [Barbushin PHP Console](https://github.com/barbushin/php-console) - Another web debugging console using Google Chrome.
* [PHPDBG](http://phpdbg.com/) - An interactive PHP debugger.
* [Tracy](https://github.com/nette/tracy) - A simple error detection, logging and time measuring library.
* [Z-Ray](http://www.zend.com/en/products/server/z-ray) - A debug and profile tool for Zend Server.
* [XHProf](https://github.com/phacility/xhprof) - A profiling tool originally developed by Facebook.
* [Blackfire.io](http://blackfire.io) - A low-overhead code profiler.
* [Kint](https://github.com/raveren/kint) - A debugging and profiling tool.

## Build Tools
*Project build and automation tools.*

* [Go](https://github.com/herrera-io/php-go) - A simple PHP build tool.
* [Bob](https://github.com/CHH/bob) - A simple project automation tool.
* [Phake](https://github.com/jaz303/phake) - A rake PHP clone library.
* [Box](https://github.com/kherge/Box) - A utility to build PHAR files.
* [Phing](http://www.phing.info/) - A PHP project build system inspired by Apache Ant.

## Task Runners
*Libraries for automating and running tasks.*
* [Task](http://taskphp.github.io/) - A pure PHP task runner inspired by Grunt and Gulp.
* [Robo](https://github.com/Codegyre/Robo) - A PHP Task runner with object-orientated configurations.
* [Bldr](http://bldr.io/) - A PHP Task runner built on Symfony components.

## Navigation
*Tools for building navigation structures.*

* [KnpMenu](https://github.com/KnpLabs/KnpMenu) - A menu library.
* [Cartographer](https://github.com/tackk/cartographer) - A sitemap generation library.

## Asset Management
*Tools for managing, compressing and minifying website assets.*

* [Assetic](https://github.com/kriswallsmith/assetic) - An asset manager pipeline library.
* [Pipe](https://github.com/CHH/pipe) - Another asset manager pipeline library.
* [Munee](https://github.com/meenie/munee) - An asset optimiser library.
* [JShrink](https://github.com/tedivm/JShrink) - A JavaScript minifier library.
* [Puli](https://github.com/webmozart/puli) - A library for determining assets absolute paths.

## Geolocation
*Libraries for geocoding addresses and working with latitudes and longitudes.*

* [GeoCoder](http://geocoder-php.org/) - A geocoding library.
* [GeoTools](https://github.com/php-loep/Geotools) - A library of geo-related tools.
* [PHPGeo](https://github.com/mjaschen/phpgeo) - A simple geo library.
* [GeoJSON](https://github.com/jmikola/geojson) - A GeoJSON implementation.

## Date and Time
*Libraries for working with dates and times.*

* [Carbon](https://github.com/briannesbitt/Carbon) - A simple DateTime API extension.
* [ExpressiveDate](https://github.com/jasonlewis/expressive-date) - Another DateTime API extension.
* [CalendR](http://yohan.giarel.li/CalendR) - A calendar management library.

## Event
*Libraries that are event-driven or implement non-blocking event loops.*

* [React](https://github.com/reactphp/react) - An event driven non-blocking I/O library.
* [Rx.PHP](https://github.com/asm89/Rx.PHP) - A reactive extension library.
* [Ratchet](https://github.com/cboden/Ratchet) - A web socket library.
* [Hoa WebSocket](https://github.com/hoaproject/Websocket) - Another web socket library.
* [Elephant.io](https://github.com/Wisembly/Elephant.io) - Yet another web socket library.
* [Hoa EventSource](https://github.com/hoaproject/Eventsource) - An event source library.
* [Evenement](https://github.com/igorw/evenement) - An event dispatcher library.
* [Event](https://github.com/thephpleague/event) - An event library with a focus on domain events.
* [Cake Event](https://github.com/cakephp/event) - An event dispatcher library (CP).
* [Broadway](https://github.com/qandidate-labs/broadway) - An event source and CQRS library.

## Logging
*Libraries for generating and working with log files.*

* [Monolog](https://github.com/Seldaek/monolog) - A comprehensive logger.
* [KLogger](https://github.com/katzgrau/KLogger) - An easy-to-use PSR-3 compliant logging class.
* [Analog](https://github.com/jbroadway/analog) - A closure-based micro logging package.

## E-commerce
*Libraries and applications for taking payments and building online e-commerce stores.*

* [OmniPay](https://github.com/thephpleague/omnipay) - A framework agnostic multi-gateway payment processing library.
* [Payum](https://github.com/payum/payum) - A payment abstraction library.
* [Sylius](http://www.sylius.org/) - An open source e-commerce solution.
* [Thelia](http://thelia.net/v2/) - Another open source e-commerce solution.
* [Money](https://github.com/mathiasverraes/money) - A PHP implementation of Fowler's money pattern.
* [Sebastian Money](https://github.com/sebastianbergmann/money) - Another library for working with monetary values.
* [Swap](https://github.com/florianv/swap) - An exchange rates library.

## PDF
*Libraries and software for working with PDF files.*

* [Snappy](https://github.com/KnpLabs/snappy) - A PDF and image generation library.
* [WKHTMLToPDF](https://github.com/antialize/wkhtmltopdf) - A tool to convert HTML to PDF.
* [PHPPdf](https://github.com/psliwa/PHPPdf) - A library for generating PDFs and images from XML.

## Office
*Libraries for working with office suite documents.*

* [PHPWord](https://github.com/PHPOffice/PHPWord) - A library for working with Microsoft Word documents.
* [PHPExcel](https://github.com/PHPOffice/PHPExcel) - A library for working with Microsoft Excel documents.
* [PHPPowerPoint](https://github.com/PHPOffice/PHPPowerPoint) - A library for working with Microsoft PowerPoint Presentations.
* [ExcelAnt](https://github.com/Wisembly/ExcelAnt) - A library for manipulating Microsoft Excel documents.

## Database
*Libraries for interacting with databases using object-relational mapping (ORM) or datamapping techniques.*

* [Doctrine](http://www.doctrine-project.org/) - A comprehensive DBAL and ORM.
* [Doctrine Extensions](https://github.com/l3pp4rd/DoctrineExtensions) - A collection of Doctrine behavioural extensions.
* [Propel](http://www.propelorm.org/) - A fast ORM, migration library and query builder.
* [Eloquent](https://github.com/illuminate/database) - A simple ORM (L5).
* [Baum](https://github.com/etrepat/baum) - A nested set implementation for Eloquent.
* [Spot2](https://github.com/vlucas/spot2) - A MySQL datamapper ORM.
* [RedBean](http://redbeanphp.com/) - A lightweight, configuration-less ORM.
* [Pomm](https://github.com/chanmix51/Pomm) - An Object Model Manager for PostgreSQL.
* [ProxyManager](https://github.com/Ocramius/ProxyManager) - A set of utilities to generate proxy objects for data mappers.
* [Cake ORM](https://github.com/cakephp/orm) - Object-Relational Mapper, implemented using the DataMapper pattern (CP).

## Migrations
Libraries to help manage database schemas and migrations.

* [PHPMig](https://github.com/davedevelopment/phpmig) - Another migration management library.
* [Phinx](https://github.com/robmorgan/phinx) - Another database migration library.
* [Migrations](https://github.com/icomefromthenet/Migrations) - A migration management library.
* [Doctrine Migrations](http://docs.doctrine-project.org/projects/doctrine-migrations/en/latest/toc.html) - A migration library for Doctrine.

## NoSQL
*Libraries for working with "NoSQL" backends.*

* [MongoQB](https://github.com/alexbilbie/MongoQB) - A MongoDB query builder library.
* [Monga](https://github.com/thephpleague/monga) - A MongoDB abstraction library.
* [Predis](https://github.com/nrk/predis) - A feature complete Redis library.

## Queue
*Libraries for working with event and task queues.*

* [Pheanstalk](https://github.com/pda/pheanstalk) - A Beanstalkd client library.
* [PHP AMQP](https://github.com/videlalvaro/php-amqplib) - A pure PHP AMQP library.
* [Thumper](https://github.com/videlalvaro/Thumper) - A RabbitMQ pattern library.
* [Bernard](https://github.com/bernardphp/bernard) - A multibackend abstraction library.

## Search
*Libraries and software for indexing and performing search queries on data.*

* [ElasticSearch PHP](https://github.com/elasticsearch/elasticsearch-php) - The official client library for [ElasticSearch](http://www.elasticsearch.org/).
* [Elastica](https://github.com/ruflin/Elastica) - A client library for ElasticSearch.
* [Solarium](http://www.solarium-project.org/) - A client library for [Solr](http://lucene.apache.org/solr/).
* [SphinxQL query builder](http://foolcode.github.io/SphinxQL-Query-Builder/) - A query library for the [Sphinx](http://sphinxsearch.com/) search engine.

## Command Line
*Libraries related to the command line.*

* [Boris](https://github.com/d11wtq/boris) - A tiny PHP REPL.
* [PsySH](https://github.com/bobthecow/psysh) - Another PHP REPL.
* [Pecan](https://github.com/mcrumm/pecan) - An event-driven, non-blocking shell.
* [GetOpt](https://github.com/ulrichsg/getopt-php) - A command line opt parser.
* [OptParse](https://github.com/CHH/optparse) - Another command line opt parser.
* [Commando](https://github.com/nategood/commando) - Another simple command line opt parser.
* [GetOptionKit](https://github.com/c9s/php-GetOptionKit) - Another command line opt parser.
* [Cron Expression](https://github.com/mtdowling/cron-expression) - A library to calculate cron run dates.
* [ShellWrap](https://github.com/MrRio/shellwrap) - A simple command line wrapper library.
* [Hoa Console](https://github.com/hoaproject/Console) - Another command line library.
* [Shunt](https://github.com/php-loep/shunt) - A library for running commands in parallel on multiple remote machines.
* [Cilex](https://github.com/Cilex/Cilex) - A micro framework for building command line tools.
* [CLImate](https://github.com/thephpleague/climate) - A library for outputting colours and special formatting.

## Authentication and Authorization
*Libraries for implementing user authentication and authorization.*

* [Sentinel](https://cartalyst.com/manual/sentinel/2.0) - A framework agnostic authentication & authorisation library.
* [Sentinel Social](https://cartalyst.com/manual/sentinel-social/2.0) - A library for social network authentication.
* [Opauth](https://github.com/opauth/opauth) - A multi-provider authentication framework.
* [OAuth2 Server](http://oauth2.thephpleague.com/) - An OAuth2 authentication server, resource server and client library.
* [OAuth2 Server](http://bshaffer.github.io/oauth2-server-php-docs/) - Another OAuth2 server implementation.
* [PHP oAuthLib](https://github.com/Lusitanian/PHPoAuthLib) - Another OAuth library.
* [TwitterOAuth](https://github.com/ruudk/twitteroauth) - A Twitter OAuth library.
* [TwitterSDK](https://github.com/lyrixx/twitter-sdk) - A fully tested Twitter SDK.
* [Hawk](https://github.com/dflydev/dflydev-hawk) - A Hawk HTTP authentication library.
* [HybridAuth](https://github.com/hybridauth/hybridauth) - An open source social sign on library.
* [Lock](https://github.com/BeatSwitch/lock) - A library for implementing Access Control Lists (ACL) systems.
* [OAuth 1.0 Client](https://github.com/thephpleague/oauth1-client) - An OAuth 1.0 client library.
* [OAuth 2.0 Client](https://github.com/thephpleague/oauth2-client) - An OAuth 2.0 client library.

## Markup
*Libraries for working with markup.*

* [Decoda](http://milesj.me/code/php/decoda) - A lightweight markup parser library.
* [PHP Markdown](https://github.com/michelf/php-markdown) - A Markdown parser.
* [CommonMark PHP](https://github.com/thephpleague/commonmark) - A Markdown parser which supports the full [CommonMark spec](http://spec.commonmark.org/).
* [Parsedown](https://github.com/erusev/parsedown) - Another Markdown parser.
* [Ciconia](https://github.com/kzykhys/Ciconia) - Another Markdown parser that supports Github flavoured Markdown.
* [Cebe Markdown](https://github.com/cebe/markdown) - An fast and extensible Markdown parser.
* [HTML5 PHP](https://github.com/Masterminds/html5-php) - An HTML5 parser and serializer library.
* [Emoji](https://github.com/heyupdate/Emoji) - A library that converts unicode characters and names into emoji images.

## Strings
*Libraries for parsing and manipulating strings.*

* [ANSI to HTML5](https://github.com/sensiolabs/ansi-to-html) - An ANSI to HTML5 converter library.
* [Patchwork UTF-8](https://github.com/nicolas-grekas/Patchwork-UTF8) - A portable library for working with UTF-8 strings.
* [Hoa String](https://github.com/hoaproject/String) - Another UTF-8 string library.
* [Stringy](https://github.com/danielstjules/Stringy) - A string manipulation library with multibyte support.
* [Color Jizz](https://github.com/mikeemoo/ColorJizz-PHP) - A library for manipulating and converting colours.
* [UUID](https://github.com/ramsey/uuid) - A library for generating UUIDs.
* [Slugify](https://github.com/cocur/slugify) - A library to convert strings to slugs.
* [Urlify](https://github.com/jbroadway/urlify) - A PHP port of Django's URLify.js.
* [Text](https://github.com/kzykhys/Text) - A text manipulation library.
* [SQL Formatter](https://github.com/jdorn/sql-formatter/) - A library for formatting SQL statements.
* [UA Parser](https://github.com/tobie/ua-parser/tree/master/php) - A library for parsing user agent strings.
* [Device Detector](https://github.com/piwik/device-detector) - Another library for parsing user agent strings.
* [Mobile-Detect](https://github.com/serbanghita/Mobile-Detect) - A lightweight PHP class for detecting mobile devices (including tablets).

## Numbers
*Libraries for working with numbers.*

* [Numbers PHP](https://github.com/powder96/numbers.php) - A library for working with numbers.
* [Math](https://github.com/moontoast/math) - A library for working with large numbers.
* [ByteUnits](https://github.com/gabrielelana/byte-units) - A library to parse, format and convert byte units in binary and metric systems.
* [PHP Units of Measure](https://github.com/triplepoint/php-units-of-measure) - A library for converting between units of measure.
* [PHP Conversion](https://github.com/Crisu83/php-conversion) - Another library for converting between units of measure.
* [LibPhoneNumber for PHP](https://github.com/giggsey/libphonenumber-for-php) - A PHP implementation of Google's phone number handling library.

## Filtering and Validation
*Libraries for filtering and validating data.*

* [Filterus](https://github.com/ircmaxell/filterus) - A simple PHP filtering library.
* [Respect Validate](https://github.com/Respect/Validation) - A simple validation library.
* [Valitron](https://github.com/vlucas/valitron) - Another validation library.
* [Cake Validation](https://github.com/cakephp/validation) - Another validation library (CP).
* [Upload](https://github.com/codeguy/Upload) - A library for handling file uploads and validation.
* [DMS Filter](https://github.com/rdohms/DMS-Filter) - An annotation filtering library.
* [MetaYaml](https://github.com/romaricdrigon/MetaYaml) - A schema validation library that supports YAML, JSON and XML.
* [ISO-codes](https://github.com/ronanguilloux/IsoCodes) - A library for validating various ISO and ZIP codes (IBAN, SWIFT/BIC, BBAN, VAT, SSN, UKNIN).

## API
*Libraries and web tools for developing APIs.*

* [Apigility](https://github.com/zfcampus/zf-apigility-skeleton) - An API builder built with Zend Framework 2.
* [Hateoas](https://github.com/willdurand/Hateoas) - A HATEOAS REST web service library.
* [HAL](https://github.com/blongden/hal) - A Hypertext Application Language (HAL) builder library.
* [Negotiation](https://github.com/willdurand/Negotiation) - A content negotiation library.
* [Drest](https://github.com/leedavis81/drest) - A library for exposing Doctrine entities as REST resource endpoints.
* [Restler](https://github.com/Luracast/Restler) - A lightweight framework to expose PHP methods as RESTful web API.
* [wsdl2phpgenerator](https://github.com/wsdl2phpgenerator/wsdl2phpgenerator) - A tool to generate PHP classes from SOAP WSDL files.

## Caching
*Libraries for caching data.*

* [Alternative PHP Cache (APC)](http://www.php.net/manual/en/book.apc.php) - Open opcode cache for PHP.
* [Doctrine Cache](https://github.com/doctrine/cache) - A caching library.
* [Zend Cache](https://github.com/zendframework/zend-cache) - Another caching library (ZF2).
* [Cake Cache](https://github.com/cakephp/cache) - A caching library (CP).
* [Stash](https://github.com/tedivm/Stash) - Another library for caching.
* [CacheTool](https://github.com/gordalina/cachetool) - A tool to clear APC/opcode caches from the command line.

## Data Structure and Storage
*Libraries that implement data structure or storage techniques.*

* [Ardent](https://github.com/morrisonlevi/Ardent) - A library of data structures.
* [PHP Collections](https://github.com/schmittjoh/php-collection) - A simple collections library.
* [Serializer](https://github.com/schmittjoh/serializer) - A library for serialising and de-serialising data.
* [Zend Serializer](https://github.com/zendframework/zend-serializer) - Another library for serialising and de-serialising data (ZF2).
* [PHP Object Storage](https://github.com/herrera-io/php-object-storage) - A library for object storage.
* [Fractal](https://github.com/php-loep/fractal) - A library for converting complex data structures to JSON output.
* [Totem](http://github.com/Wisembly/Totem) - A library to manage and create data changesets.
* [PINQ](https://github.com/TimeToogo/Pinq) - A real Linq library for PHP.
* [JsonMapper](https://github.com/netresearch/jsonmapper) - A library that maps nested JSON structures onto PHP classes.
* [Cake Collection](https://github.com/cakephp/collection) - A simple collections library (CP).

## Notifications
*Libraries for working with notification software.*

* [Nod](https://github.com/filp/nod) - A notification library (e.g., Growl).
* [Notificato](https://github.com/wrep/notificato) - A library for handling push notifications.
* [Notification Pusher](https://github.com/Ph3nol/NotificationPusher) - A standalone library for device push notifications.
* [Notificator](https://github.com/namshi/notificator) - A lightweight notification library.

## Deployment
*Libraries for project deployment.*

* [Pomander](https://github.com/tamagokun/pomander) - A deployment tool for PHP applications.
* [Rocketeer](https://github.com/Anahkiasen/rocketeer) - A fast and easy deployer for the PHP world.
* [Envoy](https://github.com/laravel/envoy) - A tool to run SSH tasks with PHP.
* [Plum](https://github.com/aerialls/Plum) - A deployer library.
* [Deployer](https://github.com/deployphp/deployer) - A deployment tool.

## Internationalisation and Localisation
*Libraries for Internationalization (I18n) and Localization (L10n).*

* [Aura Intl](https://github.com/auraphp/Aura.Intl)
* [Cake I18n](https://github.com/cakephp/i18n) - Message translation and localization for dates and numbers (CP)

## Third Party APIs
*Libraries for accessing third party APIs.*

* [Amazon Web Service SDK](https://github.com/aws/aws-sdk-php) - The official PHP AWS SDK library.
* [S3 Stream Wrapper](https://github.com/gwkunze/S3StreamWrapper) - A stream wrapper library for Amazon S3.
* [Stripe](https://github.com/stripe/stripe-php) - The official Stripe PHP library.
* [Campaign Monitor](http://campaignmonitor.github.com/createsend-php/) - The official Campaign Monitor PHP library.
* [Digital Ocean](https://github.com/toin0u/DigitalOcean) - A library to interface with the Digital Ocean API.
* [Github](https://github.com/dsyph3r/github-api3-php) - A library to interface with the Github API.
* [PHP Github API](https://github.com/KnpLabs/php-github-api) - Another library to interface with the Github API.
* [Twitter OAuth](https://github.com/widop/twitter-oauth) - A library to interface with Twitter's OAuth workflow.
* [Twitter REST](https://github.com/widop/twitter-rest) - A library to interact with Twitter's REST API.
* [Dropbox SDK](https://github.com/dropbox/dropbox-sdk-php) - The official PHP Dropbox SDK library.
* [Twilio](https://github.com/twilio/twilio-php) - The official Twilio PHP REST API.
* [Mailgun](https://github.com/mailgun/mailgun-php) The official Mailgun PHP API.

## Extensions
*Libraries to help build PHP extensions.*

* [Zephir](https://github.com/phalcon/zephir) - A compiled language between PHP and C++ for developing PHP extensions.
* [PHP CPP](http://www.php-cpp.com/) - A C++ library for developing PHP extensions.

## Miscellaneous
*Useful libraries or tools that don't fit in the categories above.*

* [Spork](https://github.com/kriswallsmith/spork) - A process forking library.
* [JSON Lint](https://github.com/Seldaek/jsonlint) - A JSON lint utility.
* [JSONPCallbackValidator](https://github.com/willdurand/JsonpCallbackValidator) - A library for validating JSONP callbacks.
* [Pagerfanta](https://github.com/whiteoctober/Pagerfanta) - A pagination library.
* [LiteCQRS](https://github.com/beberlei/litecqrs-php) - A CQRS (Command Query Responsibility Separation) library.
* [Chief](https://github.com/adamnicholson/Chief) - A command bus library.
* [Sslurp](https://github.com/EvanDotPro/Sslurp) - A library that makes dealing with SSL suck less.
* [Metrics](https://github.com/beberlei/metrics) - A simple metrics API library.
* [Sabre VObject](https://github.com/evert/sabre-vobject) - A library for parsing VCard and iCalendar objects.
* [Annotations](https://github.com/doctrine/annotations) - An annotations library (part of Doctrine).
* [Whoops](https://github.com/filp/whoops) - A pretty error handling library.
* [LadyBug](https://github.com/raulfraile/Ladybug) - A dumper library.
* [Symfony VarDumper](http://symfony.com/doc/current/components/var_dumper/introduction.html) - A variable dumper component (SF2).
* [Procrastinator](https://github.com/lstrojny/Procrastinator) - A library for running time consuming tasks.
* [SuperClosure](https://github.com/jeremeamia/super_closure) - A library that allows Closures to be serialized.
* [Jumper](https://github.com/kakawait/Jumper) - A remote service executor library.
* [Underscore](http://anahkiasen.github.io/underscore-php/) - A PHP port of the Underscore JS library.
* [PHP PassBook](https://github.com/eymengunay/php-passbook) - A PHP library for iOS PassBook.
* [PHP Expression](https://github.com/Kitano/php-expression) - A PHP expression language.
* [RMT](https://github.com/liip/RMT) - A library for versioning and releasing software.
* [Wise](https://github.com/herrera-io/php-wise) - A configuration manager.
* [Opengraph](https://github.com/euskadi31/Opengraph) - An opengraph library.
* [Essence](https://github.com/felixgirault/essence) - A library for extracting web media.
* [Embera](https://github.com/mpratt/Embera) - An Oembed consumer library.
* [Graphviz](https://github.com/alexandresalome/graphviz) - A Graphviz library.
* [Flux](https://github.com/selvinortiz/flux) - A regular expression building library.
* [PHPCR](https://github.com/phpcr/phpcr) - A PHP port of the Java Content Repository (JCR).
* [ClassPreloader](https://github.com/mtdowling/ClassPreloader) - A library for optimising autoloading.
* [Lib Country](https://github.com/phine/lib-country) - A library for country and subdivision data.
* [PHPStack](http://dunkels.com/adam/phpstack/) - A TCP/IP stack proof of concept written in PHP.
* [Nmap](https://github.com/willdurand/nmap) - A PHP wrapper around [Nmap](http://nmap.org/).
* [Code Mover](https://github.com/dantleech/code-mover) - A library for moving code.
* [Lambda PHP](https://github.com/igorw/lambda-php) - A Lambda calculus interpreter in PHP.
* [Country List](https://github.com/umpirsky/country-list) - A list of all countries with names and ISO 3166-1 codes.
* [PHP-GPIO](https://github.com/ronanguilloux/php-gpio) - A library for playing with the Raspberry PI's GPIO pins.
* [print_o](https://github.com/koriym/print_o) - An object graph visualizer.
* [Alias](https://github.com/fuelphp/alias) - A class aliasing library.
* [Cake Utility](https://github.com/cakephp/utility) - Utility classes such as Inflector, String, Hash, Security and Xml (CP).

# Software
*Software for creating a development environment.*

## PHP Installation
*Tools to help install and manage PHP on your computer.*

* [HomeBrew](http://mxcl.github.com/homebrew/) - A package manager for OSX.
* [HomeBrew PHP](https://github.com/josegonzalez/homebrew-php) - A PHP tap for HomeBrew.
* [PHP OSX](http://php-osx.liip.ch/) - A PHP installer for OSX.
* [PHP Brew](https://github.com/c9s/phpbrew) - A PHP version manager and installer.
* [PHP Env](https://github.com/CHH/phpenv) - Another PHP version manager.
* [PHP Switch](https://github.com/jubianchi/phpswitch) - Another version manager.
* [PHP Build](https://github.com/CHH/php-build) - Another PHP version installer.
* [VirtPHP](http://virtphp.org/) - A tool for creating and managing isolated PHP environments.

## Development Environment
*Software and tools for creating a sandboxed development environment.*

* [Vagrant](http://www.vagrantup.com/) - A portable development environment utility.
* [Ansible](http://www.ansibleworks.com/) - A radically simple orchestration framework.
* [Puppet](http://puppetlabs.com/) - A server automation framework and application.
* [PuPHPet](https://puphpet.com/) - A web tool for building PHP development virtual machines.
* [Protobox](http://getprotobox.com/) - Another web tool for building PHP development virtual machines.
* [Phansible](http://phansible.com/) - A web tool for building PHP development virtual machines with Ansible.

## Virtual Machines
*Alternative PHP virtual machines.*

* [HipHop PHP](https://github.com/facebook/hiphop-php) - A Virtual Machine, Runtime and JIT for PHP by Facebook.
* [HippyVM](http://hippyvm.com/) - Another PHP virtual machine.
* [Hack](http://hacklang.org/) - A programming language for [HHVM](https://github.com/facebook/hiphop-php) that interoperates seamlessly with PHP.

## Integrated Development Environment
*Integrated Development Environments with support for PHP.*

* [Netbeans](https://netbeans.org) - An IDE with support for PHP and HTML5.
* [Eclipse for PHP Developers](https://www.eclipse.org/downloads/) - A PHP IDE based on the Eclipse platform.
* [PhpStorm](http://www.jetbrains.com/phpstorm/) - A commercial PHP IDE.

## Web Applications
*Web-based applications and tools.*

* [3V4L](http://3v4l.org/) - An online PHP & HHVM shell.
* [DBV](http://dbv.vizuina.com/) - A database version control application.
* [PHP Queue](https://github.com/CoderKungfu/php-queue) - An application for managing queueing backends.
* [Composer as a Service](http://composer.borreli.com/) - A tool for downloading Composer packages as a zip file.
* [MailCatcher](https://github.com/sj26/mailcatcher) - A web tool for capturing and viewing emails.
* [Cachet](https://github.com/cachethq/cachet) - The open source status page system.

## Infrastructure
*Infrastructure for providing PHP applications and services.*

* [appserver.io](http://appserver.io/) - A multithreaded application server for PHP, written in PHP.

# Resources
Various resources, such as books, websites and articles, for improving your PHP development skills and knowledge.

## PHP Websites
*Useful PHP-related websites.*

* [PHP The Right Way](http://www.phptherightway.com/) - A PHP best practice quick reference guide.
* [PHP Best Practices](http://phpbestpractices.org/) - A PHP best practice guide.
* [PHP Weekly](http://www.phpweekly.com/archive.html) - A weekly PHP newsletter.
* [Securing PHP](http://securingphp.com/) - A newsletter about PHP security and library recommendations.
* [PHP Security](http://phpsecurity.readthedocs.org/en/latest/index.html) - A guide to PHP security.
* [PHP FIG](http://www.php-fig.org/) - The PHP Framework Interoperability Group.
* [PHP UG](http://php.ug) - A website to help people locate their nearest PHP user group (UG).
* [Seven PHP](http://7php.com/) - A website that interviews members of the PHP community.
* [Nomad PHP](http://nomadphp.com/) - A online PHP learning resource.
* [PHP Mentoring](http://phpmentoring.org/) - Peer to peer PHP mentorship organization.

## Other Websites
*Useful websites related to web development.*

* [The Open Web Application Security Project (OWASP)](https://www.owasp.org/index.php/Main_Page) - An open software security community.
* [WebSec IO](http://websec.io/) - A web security community resource.
* [Web Advent](http://webadvent.org) - An advent calendar for web developers.
* [Semantic Versioning](http://semver.org/) - A website explaining semantic versioning.
* [Atlassian Git Tutorials](https://www.atlassian.com/git) - A series of Git tutorials.
* [Hg Init](http://hginit.com/) - A series of Mercurial tutorials.
* [Servers for Hackers](http://serversforhackers.com/) - A newsletter about server management.

## PHP Books
*Fantastic PHP-related books.*

* [Scaling PHP Applications](http://www.scalingphpbook.com) - An ebook about scaling PHP applications by Steve Corona.
* [The Grumpy Programmer's Guide to Building Testable PHP Applications](https://leanpub.com/grumpy-testing) - A book about building testing PHP applications by Chris Hartjes.
* [Grumpy PHPUnit](https://leanpub.com/grumpy-phpunit) - A book about unit testing with PHPUnit by Chris Hartjes.
* [Mastering Object-Orientated PHP](http://www.brandonsavage.net) - A book about object-orientated PHP by Brandon Savage.
* [Signaling PHP](https://leanpub.com/signalingphp) - A book about catching PCNTL signals in CLI scripts by Cal Evans.
* [Securing PHP: Core Concepts](https://leanpub.com/securingphp-coreconcepts) - A book about common security terms and practices for PHP by Chris Cornutt.
* [Modernising Legacy Applications in PHP](https://leanpub.com/mlaphp) - A book about modernising legacy PHP applications by Paul M. Jones.
* [Modern PHP New Features and Good Practices](http://shop.oreilly.com/product/0636920033868.do) - A book about new PHP features and best practices by Josh Lockhart.

## Other Books
*Books related to general computing and web development.*

* [The Linux Command Line](http://linuxcommand.org/tlcl.php) - A book about the Linux command line by William Shotts.
* [Understanding Computation](http://computationbook.com) - A book about computation theory by Tom Stuart.
* [The Tangled Web — Securing Web Applications](http://www.amazon.ca/The-Tangled-Web-Securing-Applications/dp/1593273886) - A book about securing web applications by Michal Zalewski.
* [Elasticsearch: The Definitive Guide](http://www.elasticsearch.org/guide/) - A guide to working with Elasticsearch by Clinton Gormley and Zachary Tong.
* [Eloquent JavaScript](http://eloquentjavascript.net/) - A book about JavaScript programming by Marijn Haverbeke.
* [Vagrant Cookbook](https://leanpub.com/vagrantcookbook) - A book about creating Vagrant environments by Erika Heidi.
* [Pro Git](http://git-scm.com/book/en/v2) - A book about Git by Scott Chacon and Ben Straub.
* [Head First Design Patterns](http://www.headfirstlabs.com/books/hfdp/) - A book that expains software design patterns.

## PHP Videos
*Fantastic PHP-related videos.*

* [Taking PHP Seriously](http://www.infoq.com/presentations/php-history) - A talk outlining PHP's strengths by Keith Adams of Facebook.
* [PHP Town Hall](http://phptownhall.com/) - A casual PHP podcast by Ben Edmunds and Phil Sturgeon.
* [Programming with Anthony](http://www.youtube.com/playlist?list=PLM-218uGSX3DQ3KsB5NJnuOqPqc5CW2kW) - A video series by Anthony Ferrara.
* [PHP UK Conference](https://www.youtube.com/user/phpukconference/videos) - A collection of videos from the PHP UK Conference.

## PHP Reading
*PHP-releated reading materials.*

* [Create Your Own PHP Framework](http://fabien.potencier.org/article/50/create-your-own-framework-on-top-of-the-symfony2-components-part-1) - A series of articles on how to make your own PHP framework by Fabien Potencier.
* [Seven Ways to Screw Up BCrypt](http://blog.ircmaxell.com/2012/12/seven-ways-to-screw-up-bcrypt.html) - An article about correct BCrypt implementation.
* [Preventing CSRF Attacks](http://blog.ircmaxell.com/2013/02/preventing-csrf-attacks.html) - An article on preventing CSRF attacks.
* [Don't Worry About BREACH](http://blog.ircmaxell.com/2013/08/dont-worry-about-breach.html) - An article about the BREACH hack and CSRF tokens.
* [On PHP 5.3, Lamda Functions and Closures](http://fabien.potencier.org/article/17/on-php-5-3-lambda-functions-and-closures) - An article about lambda functions and closures.
* [Use Env](http://seancoates.com/blogs/use-env) - An article about using the unix environment helper.
* [Composer Primer](http://daylerees.com/composer-primer) - A Composer primer.
* [Composer Versioning](https://igor.io/2013/01/07/composer-versioning.html) - An article about Composer versioning.
* [Composer Stability Flags](https://igor.io/2013/02/07/composer-stability-flags.html) - An article about Composer stability flags.
* [Innocent Villagefolk or a Pillagin’ Pirate?](http://blog.astrumfutura.com/2012/04/php-innocent-villagefolk-or-a-pillagin-pirate/) - An article about PHP taking ideas from other language.
* [Predicting Random Numbers in PHP](http://blog.astrumfutura.com/2013/03/predicting-random-numbers-in-php-its-easier-than-you-think/) - An article about generating random numbers.
* [A 20 Point List for Preventing XSS in PHP](http://blog.astrumfutura.com/2013/04/20-point-list-for-preventing-cross-site-scripting-in-php/) - An article about preventing XSS.
* [PHP Sucks! But I Like It!](http://blog.ircmaxell.com/2012/04/php-sucks-but-i-like-it.html) - An article about the pros and cons of PHP.
* [PHP Is Much Better Than You Think](http://fabien.potencier.org/article/64/php-is-much-better-than-you-think) - An article about the PHP language and ecosystem.

## PHP Internals Reading
*Reading materials related to the PHP internals or performance.*

* [PHP RFCs](https://wiki.php.net/rfc) - The home of PHP RFCs (Request for Comments).
* [PHP Internals Book](http://www.phpinternalsbook.com) - An online book about PHP internals, written by three core developers.
* [Print vs Echo, Which One is Faster?](http://fabien.potencier.org/article/8/print-vs-echo-which-one-is-faster) - An article about print and echo performance.
* [The PHP Ternary Operator. Fast or Not?](http://fabien.potencier.org/article/48/the-php-ternary-operator-fast-or-not) - An article ternary performance.
* [Disproving the Single Quotes Myth](http://nikic.github.com/2012/01/09/Disproving-the-Single-Quotes-Performance-Myth.html) - An article about performance of single and double quoted strings.
* [You're Being Lied To](http://blog.golemon.com/2007/01/youre-being-lied-to.html) - An article about internal ZVALs.
* [How Long is a Piece of String](http://blog.golemon.com/2006/06/how-long-is-piece-of-string.html) - An article about string internals.
* [Understanding OpCodes](http://blog.golemon.com/2008/01/understanding-opcodes.html) - An article about opcodes.
* [How Foreach Works](http://stackoverflow.com/questions/10057671/how-foreach-actually-works/14854568#14854568) - A detailed StackOverflow answer about foreach.
* [When Does Foreach Copy?](http://nikic.github.com/2011/11/11/PHP-Internals-When-does-foreach-copy.html) - An article about the internals of foreach.
* [How Big Are PHP Arrays (And Values) Really?](http://nikic.github.com/2011/12/12/How-big-are-PHP-arrays-really-Hint-BIG.html) - An article about array internals.
* [Why Objects (Usually) Use Less Memory Than Arrays](https://gist.github.com/nikic/5015323) - An article about object and array internals.
* [PHP Evaluation Order](https://gist.github.com/nikic/6699370) - An article about evaluation order in PHP.
* PHP Source Code for Developers: [1](http://blog.ircmaxell.com/2012/03/phps-source-code-for-php-developers.html) [2](http://nikic.github.com/2012/03/16/Understanding-PHPs-internal-function-definitions.html) [3](http://blog.ircmaxell.com/2012/03/phps-source-code-for-php-developers_21.html) [4](http://nikic.github.com/2012/03/28/Understanding-PHPs-internal-array-implementation.html) - A series about the PHP source code.
* Collecting Garbage: [1](http://www.php.net/manual/en/features.gc.refcounting-basics.php) [2](http://www.php.net/manual/en/features.gc.collecting-cycles.php) [3](http://www.php.net/manual/en/features.gc.performance-considerations.php) - A series about the PHP garbage collection internals.

## PHP Magazines
*Fantastic PHP-related magazines.*

* [php[architect]](http://www.phparch.com/magazine/) - A monthly magazine dedicated to PHP.
