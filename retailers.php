<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require('./path.php');
require FILEPATH.'includes/config.php';
include (FILEPATH."session.php");


$lv = doCLeanInput($_GET['lv']);

                $sql = "SELECT * FROM ".PREFIX."USERINFO WHERE NAME LIKE '$lv%' ORDER BY NAME";
                if (is_numeric($lv))
                    $sql = "SELECT * FROM ".PREFIX."USERINFO WHERE NAME REGEXP '^[0-9]' ORDER BY NAME";
                if(!isset($lv))
                    $sql = "SELECT * FROM ".PREFIX."USERINFO WHERE NAME LIKE 'A%' ORDER BY NAME";

$metaTitle = 'Listed retailers by letter '.$lv;
$metaDescription = '';                
$res = executeQuery($sql);


if(is_numeric($lv))
    $lv = '0-9';
if(!isset($lv))
    include FILEPATH.'templates/retailers-featured.tpl.php';
else
    include FILEPATH.'templates/retailers.tpl.php';
//free($res);

//sql for the higest number of offers
/*
echo $sql = "SELECT USERID, COUNT( USERID ) c
FROM PROMO_VOUCHER_CODES
GROUP BY USERID
HAVING c >1
ORDER BY c DESC
LIMIT 0 , 10";*/