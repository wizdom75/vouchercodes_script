<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require('./path.php');
require FILEPATH.'includes/config.php';
include (FILEPATH."session.php");


$date = date('Y-m-d h:i:s', time());


$fname = doCleanInput($_GET['fname']);
$catId = getColumn('CATEGORIES', $fname, 'ID', 'FILENAME');

if(isset($_GET['categoryId']))
$catId = doCLeanInput($_GET['categoryId']);

$title = getColumn('CATEGORIES', $catId, 'TITLE', 'ID');
$metaTitle = $title.' - Vouchers and Promo Codes';
$metaDescription = 'Get valid offer and promo codes for '.$title.'.';

$sql = "SELECT * FROM ".PREFIX."CATEGORIES WHERE ID=$catId AND ISVALID='Y'";

$res = executeQuery($sql);

$row = getRow($res);

$sql2 = "SELECT USERID FROM ".PREFIX."USERINFO WHERE CATEGORY ='$catId'";

//$sql2 = "SELECT ".PREFIX."USERINFO.USERID FROM ".PREFIX."USERINFO LEFT JOIN ".PREFIX."USER ON ".PREFIX."USERINFO.USERID = ".PREFIX."USER.USERID AND ".PREFIX."USERINFO.CATEGORY=$catId AND ".PREFIX."USER.ISVALID = 'Y'";

$res2 = executeQuery($sql2);
$sql3= "SELECT * FROM ".PREFIX."VOUCHER_CODES WHERE END_DATE > '$date' AND USERID IN (";
$i=0;
while($row2 = getRow($res2)){
    $userId = $row2['USERID'];
    if($i > 0){
    $sql3 .= ', ';
    }
$sql3 .=  "'$userId' ";

$i++;
}
$sql3 .= ')';
//echo $sql3;
//$sql= "SELECT * FROM ".PREFIX."VOUCHER_CODES WHERE END_DATE > '$date' ORDER BY RAND() LIMIT 10";
include FILEPATH.'templates/category.tpl.php';
free($res);

//echo $sql2;
