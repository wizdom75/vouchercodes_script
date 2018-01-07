<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require('../path.php');
require FILEPATH.'includes/config.php';
include (FILEPATH."session.php");

$merchantId = $_SESSION['origin_uid'];
$pageId = $_SESSION['pageId'];
$catId = $_SESSION['catId'];

$email      = doCleanInput($_POST['email']);
$first_name = doCleanInput($_POST['first_name']);
$last_name  = doCleanInput($_POST['last_name']);
$gender     = doCleanInput($_POST['gender']);
$password   = doCleanInput($_POST['password']);
$password1  = doCleanInput($_POST['password1']);

/*
if(validateEmailAddress($email) == 1);
$errors[]='';
if(length($first_name)>2)
    $errors[]='';
if(length($last_name)>2)
    $errors[]='';
if($gender!=='')
    $errors[]='';
if(length($password)>6)
    $errors[]='';
if(length($password1)>6)
    $errors[]='';

if($password==$password1)
    $errors[]='';

*/
    $userid = getNextId('VISITOR', 'USERID');
    $remoteIp = $_SERVER["REMOTE_ADDR"];
    $password = encrypt($password);
    $sql = "INSERT INTO `".PREFIX."VISITOR`(`USERID`, `EMAIL`, `PASSWORD`, `LASTLOGIN`, `ISVALID`, `VERIFICATION_CODE`, `REGISTERATION_DATE`, `REGISTERATION_IP`) VALUES ($userid,'$email','$password',NOW(),'Y','',NOW(),'$remoteIp')";
    $sql2 = "INSERT INTO `".PREFIX."VISITORINFO`(`USERID`, `FIRSTNAME`, `LASTNAME`, `GENDER`, `DOB`, `STATE`, `COUNTRY`, `ZIP`, `PHONE`, `MOBILE`) VALUES ($userid,'$first_name','$last_name','$gender','$dob','$state','$country','$zip','$phone','$mobile')";

    //echo $sql.'<br>';
   // echo $sql2.'<br>';

    $res = executeQuery($sql);
    
   if($res >0){
       
           $res2 = executeQuery($sql2);
                $_SESSION['visitorId']		= $userid;
                $_SESSION['visitorName']	= $first_name.' '.$last_name;
                $_SESSION['visitorEmail']	= $email;
                $_SESSION['visitorLastLogin']	= getTimeZoneTime();
                
                addSubscription($first_name, $last_name, $email, $pageId, $catId, $merchantId);
               
              header('Location: '.SITE_URL.'member/myaccount');
   }else{
      // echo $sql;
              header('Location: '.SITE_URL.'member/register'); 
   }
   
function addSubscription($first_name, $last_name, $email, $page='', $category='', $merchant=''){
       if($first_name == '')
           return 0;
       if($email == '')
           return 0;
       $sId = getNextId('MAILINGLIST_MEMBER');
       $sql = "INSERT INTO `".PREFIX."MAILINGLIST_MEMBER`(`ID`, `FIRST_NAME`, `LAST_NAME`, `EMAIL`, `PAGE`, `CATEGORY`, `MERCHANT`, `VERIFICATION_CODE`, `ISSUBSCRIBED`, `SUBSCRIBED_ON`, `UNSUBSCRIBED_ON`, `ISVALID`) VALUES ($sId,'$first_name','$last_name','$email','$page','$category','$merchant','$verificationCode','$isSubscribed','NOW()','$unSubscribed','$isValid')";
       
       //echo $sql; die();
       
       $res = executeQuery($sql);
       if ($res > 0)
           return $sId;
       else
           return 0;
   }