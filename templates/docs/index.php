<div class="doc-wrapper"><div class="container"><div class="doc-header text-center"id="doc-header"><h1 class="doc-title"><i class="fa fa-paper-plane icon"></i>Quick Start</h1><div class="meta"><i class="fa-clock far"></i> Last updated:<?=version_date?></div></div><div class="doc-body row"><div class="col-12 col-md-9 doc-content order-1"><div class="content-inner"><section class="doc-section"id="intro-section"><h2 class="section-title">Introduction</h2><div class="section-block"><p>Anthill is a PHP framework designed to make web development easy. The framework copies functionality from PHP's Laravel framework with focus on Routing, Database and Session control. Anthill is delivered on the Composer PHP library to ensure scalablity in serving other plugins and OOP(s) available on the packagist.org portal.</p></div></section><section class="doc-section"id="download-section"><h2 class="section-title">Download</h2><div class="section-block"><p>Anthill is available for Download on the Golojan.net website. Use the botton below to download.</p><a class="btn btn-green"href="https://golojan.net/anthill"target="_blank"><i class="fa-download fas"></i> Download Anthill Framework</a></div></section><section class="doc-section"id="installation-section"><h2 class="section-title">Installing the Framework</h2><div class="section-block"id="step1"><h3 class="block-title">Using the Git Repository</h3><p>Since the <strong>Anthill Framework</strong> is updated on the Github repository <strong>https://github.com/aguchux/anthill</strong>, you can simply clone the repository.</p><div class="code-block"><h6>How to clone the git repository:</h6><p><code>C:\> cd workspace</code></p><p><code>C:\workspace>git clone https://github.com/aguchux/anthill.git</code></p><p><code>C:\workspace> cd anthill</code></p><p><code>C:\workspace\anthill></code></p><p>Inside the /anthill/ cloned directory, locate the composer.json file and make the neccessary editing on the settings and run the composer update command to generate the /vendor/ director.</p><p><code>C:\workspace\anthill> composer update</code></p></div></div><div class="section-block"id="step2"><h3 class="block-title">Using the Downloaded files</h3><p>Copy the downloaded Anthill files to your production directory and locate the composer.json file and make the neccessary editing on the settings and run the composer update command to generate the /vendor/ director.</p><div class="code-block"><h6>Goto the file root and run composer update command:</h6><p><code>C:\workspace> cd anthill</code></p><p><code>C:\workspace\anthill></code></p><p><code>C:\workspace\anthill> composer update</code></p></div></div></section><section class="doc-section"id="code-section"><h2 class="section-title">Setup & Configurations</h2><div class="section-block"><p><strong class="text-primary">Config.php</strong> provides the basic website settings as defined constants, you are free to add your own constants. Ensure the folder is read-only.</p></div><div class="section-block"id="config"><div class="code-block"><h6>HTML Code Example</h6><pre><code class="language-markup"style="width:100%">
/*
 * Copyright (C) 2014-2020 De-Golojan Technologies Ltd. (www.golojan.com)
 * Distributed under the terms of the license described in COPYING
 * Constants
 */

define("appname","Anthilltutors");
define("version","2.0.0");
define("version_date","29-03-2021");
define("debug",true);
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('DIR', __DIR__);
define("display_error",true);
define("language","en_US");
define("url",__DIR__);
define("baseurl",__DIR__);
define("apps_dir","./_apps/");
define("template_file_extension","php");
define("templates_dir","./templates/");
define("templates_default","404");
define("templates_default_route","/error/404/");
define("vendor_dir","./vendor/");
define("assets_dir","./templates/assets");
define("layouts_dir","./templates/layouts/");
define("store_dir","./_store/");
define("public_dir","./_public/");
define("dart_dir","./_dart/");
define("plugins_dir","./_plugins/");
define("server","remote");
define("use_token_security",true);
define("encrypt_salt","7WAO342QFANY6IKBF7L7SWEUU79WL3VMT920VB5NQMW");
define("default_timezone","Africa/Lagos");
define("offset_timezone",true);
define("session_path","./_sessions/");
define("session_timout",20);
define("session_delete_timout",30);
define("auth_session_key","logged_in");
define("auth_url","/auth/login");

define("domain", "https://localhost/anthill/");

define("db_host","localhost");
define("db_user","root");
define("db_password","");
define("db_name","db");
define("db_port",null);
define("db_charset","utf8");
define("db_socket",null);
</code></pre></div></div></section><div class="section-block"id="config"><div class="code-block"><h6>HTML Code Example</h6><pre><code class="language-markup"style="width:100%">//Home page//
$Route->add('/anthill/', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("docs.layouts.header");
    $Template->addfooter("docs.layouts.footer");
    $Template->assign("title","Anthill Home");

    $Template->render("docs.index");

}, 'GET');
//Home page//


                                </code></pre></div></div></div></div><div class="col-12 col-md-3 d-md-flex d-none doc-sidebar order-0"><div class="doc-nav"id="doc-nav"><nav class="flex-column nav doc-menu sticky"id="doc-menu"><a class="nav-link scrollto"href="#intro-section">Introduction</a> <a class="nav-link scrollto"href="#download-section">Download</a> <a class="nav-link scrollto"href="#installation-section">Installation</a><nav class="flex-column nav doc-sub-menu"><a class="nav-link scrollto"href="#step1">Git Repository</a> <a class="nav-link scrollto"href="#step2">Using Download</a></nav><a class="nav-link scrollto"href="#code-section">Setup & Configurations</a><nav class="flex-column nav doc-sub-menu"><a class="nav-link scrollto"href="#config">Config.php</a> <a class="nav-link scrollto"href="#routing">Basic Routing</a> <a class="nav-link scrollto"href="#templating">Templating</a> <a class="nav-link scrollto"href="#sessions">Storage & Sessions</a> <a class="nav-link scrollto"href="#forms">Form processing</a> <a class="nav-link scrollto"href="#database">Databases</a></nav></nav></div></div></div></div></div>