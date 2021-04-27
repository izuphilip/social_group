<?php


define('DOT', '.');
require_once DOT . "/bootstrap.php";

//Home page//
$Route->add('/anthilltutors/', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("docs.layouts.header");
    $Template->addfooter("docs.layouts.footer");
    $Template->assign("title","Anthill Home");

    $Template->render("docs.index");

}, 'GET');
//Home page//





//Logout Sessions//
$Route->add(
    '/auth/logout',
    function () {
        $Template = new Apps\Template;
        $Template->expire();
        $Template->cleanAll(session_delete_timout);
        $Template->redirect(auth_url);
    },
    'GET'
);
//Logout Sessions//



$Route->run('/');
