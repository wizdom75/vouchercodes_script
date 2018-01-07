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
$offerId = doCLeanInput($_GET['vcId']);

$sql = "SELECT * FROM ".PREFIX."VOUCHER_CODES WHERE ID='$offerId' AND END_DATE > '$date'";

$res = executeQuery($sql);

$row = getRow($res);


include FILEPATH.'templates/mobile-redirect.tpl.php';
free($res);