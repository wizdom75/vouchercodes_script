<?php
require('./path.php');
require FILEPATH.'includes/config.php';
include (FILEPATH."session.php");


$metaTitle = 'Free shipping offers & vouchers';
$metaDescription = '';

$date = date('Y-m-d h:i:s', time());
$limit = 50;
    $sql = "SELECT * FROM ".PREFIX."VOUCHER_CODES WHERE DESCRIPTION LIKE '%Free Shipping%' OR `DESCRIPTION` LIKE '%Free Delivery%' AND END_DATE > '$date' LIMIT 0 , $limit";

include FILEPATH.'templates/free-shipping.tpl.php';

echo $sql;