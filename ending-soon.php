<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require('./path.php');
require FILEPATH.'includes/config.php';
include (FILEPATH."session.php");


$metaTitle = 'Offers and Voucher Codes ending soon.';
$metaDescription = 'Get these soon to end offers before they are gone. Save money no need to wait.';


$date = date('Y-m-d h:i:s', time());
$limit = 30;
$sql = "SELECT * FROM ".PREFIX."VOUCHER_CODES WHERE END_DATE > '$date' GROUP BY END_DATE ASC LIMIT $limit";

include FILEPATH.'templates/ending-soon.tpl.php';
free($res);

//echo $sql;