<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require('./path.php');
require FILEPATH.'includes/config.php';
include (FILEPATH."session.php");


$metaTitle = 'All categories of '.SITE_NAME;
$metaDescription = 'Here you can browse all the offer and voucher code categories';

$sql = "SELECT * FROM ".PREFIX."CATEGORIES WHERE PARENT_ID=0";

$res = executeQuery($sql);
include FILEPATH.'templates/categories.tpl.php';
free($res);
