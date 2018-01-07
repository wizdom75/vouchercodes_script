<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require('../path.php');
require FILEPATH.'includes/config.php';
include (FILEPATH."session.php");

$email        = doCleanInput($_POST['email']);
$first_name         = doCleanInput($_POST['first_name']);
$last_name          = doCleanInput($_POST['last_name']);
$gender             = doCleanInput($_POST['gender']);
$mobile             = doCleanInput($_POST['mobile']);
$postcode           = doCleanInput($_POST['postcode']);
$country            = doCleanInput($_POST['country']);
$current_password   = doCleanInput($_POST['current_password']);
$password           = doCleanInput($_POST['password']);
$password2          = doCleanInput($_POST['password2']);
$dob                = doCleanInput($_POST['dob']);

$mydob = $dob['year'].'-'.$dob['month'].'-'.$dob['day'];



if($email !== $visitorEmail){
    header('Location: '.SITE_URL.'member/myaccount?error=1');
    die();
}
$pass = decrypt(getColumn('VISITOR', $visitorId, 'PASSWORD', 'USERID'));


if($current_password !== $pass){
    $check = 1;
    header('Location: '.SITE_URL.'member/myaccount?error=2');
    die();
}
if($password !==''){
    if($password !== $password2){
        header('Location: '.SITE_URL.'member/myaccount?error=3');
        die();
        }
        if(strlen(trim($password)) > 5){
            $password = encrypt($password);
            echo   $sql = "UPDATE `".PREFIX."VISITOR` SET `PASSWORD`='$password', `REGISTERATION_IP`='$IP_ADDRESS' WHERE USERID=$visitorId";
executeQuery($sql);
            }else{
                header('Location: '.SITE_URL.'member/myaccount?error=4');
                die();
                }
        }
 $sql = "UPDATE ".PREFIX."VISITORINFO SET `FIRSTNAME`='$first_name',`LASTNAME`='$last_name',`GENDER`='$gender',`DOB`='$mydob',`STATE`='$state',`COUNTRY`='$country',`ZIP`='$postcode',`PHONE`='$phone',`MOBILE`='$mobile' WHERE USERID=$visitorId";

$res = executeQuery($sql);

if($res>0){
      header('Location: '.SITE_URL.'member/myaccount?error=0');
}else{
     header('Location: '.SITE_URL.'member/myaccount?error=5');
}