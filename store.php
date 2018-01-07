<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require('./path.php');
require FILEPATH.'includes/config.php';
include (FILEPATH."session.php");


$fname = doCleanInput($_GET['fname']);

$userId = getColumn('USERINFO', $fname, 'USERID', 'PAGE_TITLE');

if(isset($_GET['userId']))
$userId = doCleanInput($_GET['userId']);

$catId = getColumn('USERINFO', $userId, 'CATEGORY', 'USERID');

$sql = "SELECT * FROM ".PREFIX."USERINFO WHERE USERID = '$userId'";

$title = getColumn('USERINFO', $userId, 'NAME', 'USERID');
$domain = getColumn('USERINFO', $userId, 'URL', 'USERID');
$domain =  str_ireplace('www.', '', parse_url($domain));
             $domain = $domain['host'];
$storeLogo = IMAGES_PATH."readfile.php?f=".urlencode("upload/merchant/".strtolower($userId).".jpg");
$store_desc = getColumn('USERINFO', $userId, 'PAGE_DESCRIPTION', 'USERID');

$metaTitle = $fname.' - Vouchers &amp; Promo Codes - '.$title;
$metaDescription = 'Get deals &amp discount codes from '.$fname.' We have numerous deals listed here for '.$fname;

include FILEPATH.'templates/store.tpl.php';