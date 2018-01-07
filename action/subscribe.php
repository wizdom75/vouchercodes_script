<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require('../path.php');
require FILEPATH.'includes/config.php';

$email = doCleanInput($_POST['email']);
$origin_url = doCleanInput($_POST['origin_url']);
$origin_uid = doCleanInput($_POST['origin_uid']);

if(validateEmailAddress($email)==0){
    unset($_SESSION['email']);
    header('Location: '.SITE_URL.'member/register?info=1');
    return 0;
    die();  
}else{
    session_start();
    $_SESSION['email'] = $email;
       header('Location: '.SITE_URL.'member/register'); 
}