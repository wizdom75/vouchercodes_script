<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require('../path.php');
require FILEPATH.'includes/config.php';


$email = doCleanInput($_POST['email']);

if($email==''){
    header('location: '.SITE_URL.'member/account-retrieval?info=3');
die();
}
$sql = "SELECT EMAIL, PASSWORD FROM ".PREFIX."MEMBER WHERE EMAIL =$email";

$res = executeQuery($sql);

while($row= getRow($res)){
    $pword = $row['PASSWORD'];

}
$password = encrypt($pword);
$subject = 'Password Reminder!';
$body = "Your password is $password";

    sendMail($email, SITE_WEBMASTER, $subject, $body);
    
    header('location: '.SITE_URL.'member/login');