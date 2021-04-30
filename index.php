<?php


define('DOT', '.');
require_once DOT . "/bootstrap.php";

//Home page//
$Route->add('/social_group/', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title","SOCIALY");

    $Template->render("home");

}, 'GET');

$Route->add('/social_group/register', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title","register");

    $Template->render("register");

}, 'GET');

$Route->add('/social_group/update', function() {
    $Template = new Apps\Template;
    $Core = new Apps\Core;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.header");
    $Template->assign("title","update");
    $Template->render("update");
}, 'GET');


$Route->add('/social_group/dashboard', function () {
    $Template = new Apps\Template;
    $Core = new Apps\Core;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.header");
    $Template->assign("title","dashboard");
    $Members = $Core->Getregistered();
    $Template->assign("Members", $Members);
    $Template->render("dashboard");
},'GET');





$Route->add('/social_group/login', function () {
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title","login");
    $Template->render("login");
}, 'GET');



$Route->add('/social_group/forms/login', function () {
    $Core = new Apps\Core; 
    $Template = new Apps\Template;
    $Data = $Core->data;
    $email = $Data->email;
    $password = $Core->password1tohash($Data->password);
    $login = $Core->UserLogin($email, $password);
    if ($login->id) {
        $Template->authorize($login->id);

    $Template->setError("Login Successful","success","/social_group/dashboard");
    $Template->redirect("/social_group/dashboard");

    }else{
        $Template->setError("Invalid Email or Password !","warning","/social_group/login");
        $Template->redirect("/social_group/login");
    }
    
    
}, 'POST');



$Route->add('/social_group/forms/register', function(){
$Core = new Apps\Core;
$Template = new Apps\Template;
$Data = $Core->data;
$email = $Data->email;
$fname = ucfirst($Data->fname);
$lname = ucfirst($Data->lname);
$dateofbirth = $Data->dateofbirth;
$mobile = $Data->mobile;
$password = $Core->password1tohash($Data->password);
$repeatpassword = $Core->password1tohash($Data->repeatpassword);
 if($password === $repeatpassword){
    $id = $Core->RegisterMembers($fname,$lname,$email,$mobile,$dateofbirth,$password);
    if($id){
        $Template->setError("Registered successfully", "success", "/social_group/login");
        $Template->redirect("/social_group/login");
    }
        $Template->setError("Registration failed!, some credentials already in use retry.", "warning", "/social_group/register");
        $Template->redirect("/social_group/register");
    } 

    $Template->setError("Password did not match","warning","/social_group/register");
    $Template->redirect("/social_group/register");
},'POST');



//Logout Sessions//
$Route->add(
    '/social_group/logout',
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
