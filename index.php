<?php

use Apps\Core;

use function PHPSTORM_META\elementType;

define('DOT', '.');
require_once DOT . "/bootstrap.php";

//Home page//
$Route->add('/social_group/', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title","Home");

    $Template->render("home");

}, 'GET');
<<<<<<< HEAD
$Route->add('/social_group/register', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title","register");

    $Template->render("register");

}, 'GET');


$Route->add('/social_group/dashboard', function () {
     $Core = new Apps\Core; 
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.header");
    $Template->assign("title","dashboard");
    $selects = $Core->Selectmember();

    $Template->assign("select","$selects");

    $Template->render("dasboard");


},'GET');



$Route->add('/social_group/forms/register',function(){
    $Template = new Apps\Template;
    $Core = new Apps\Core;
    $Data = $Core->data;
    $fname = $Data->fname;
    $lname = $Data->lname;
    $email = $Data->email;
    $dateofbirth= $Data->dateofbirth;
    $mobile = $Data->mobile;
    $password = $Data->password;
    $repeatpassword = $Data->repeatpassword;
    $id = $Core->RegisterMembers($fname,$lname,$email,$mobile,$dateofbirth,$password,$repeatpassword);
    if($id){
        $Template->setError("Registered successfully" ,"success" ,"/social_group/dashboard");
        $Template->redirect("/social_group/dashboard");
    }else {
        $Template->setError("Registration failed ! Try again.","warning","/social_group/forms/register");
        $Template->redirect("/social_group/forms/register");
    }
},'POST');
//Home page//
=======
>>>>>>> 3d6c723cf82c032836149b346a8ed08405a31017


$Route->add('/social_group/login', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title","login");

    $Template->render("login");

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
