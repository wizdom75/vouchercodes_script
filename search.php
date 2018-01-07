<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require('./path.php');
require FILEPATH.'includes/config.php';
include (FILEPATH."session.php");

$term = doCleanInput($_GET['q']);

$sql = "SELECT * FROM ".PREFIX."USERINFO WHERE NAME LIKE '%$term%' LIMIT 0, 6";

$sql2 = "SELECT COUNT(USERID) FROM ".PREFIX."USERINFO WHERE NAME LIKE '%$term%'";
$res2 = executeQuery($sql2);
$row2 = getRow($res2);

$total_results = $row2['COUNT(USERID)'];
$metaTitle = $total_results.' Search results found';
$metaDescription = '';

$sql2 = "SELECT USERID FROM ".PREFIX."USERINFO WHERE NAME LIKE '%$term%'";
while($rowVoucher = getRow($res2)){
    $array[] = $rowVoucher['USERID'];
}

$sqlVoucher = 'SELECT * FROM '.PREFIX.'VOUCHER_CODES WHERE `USERID` IN (' . @implode(',', @array_map('intval', $array)) . ')';
include FILEPATH.'templates/search.tpl.php';
