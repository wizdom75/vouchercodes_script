<?php
require('./path.php');
require FILEPATH.'includes/config.php';
include (FILEPATH."session.php");


$date = date('Y-m-d h:i:s', time());
$limit = 20;
    $sql = "SELECT * FROM ".PREFIX."VOUCHER_CODES WHERE TYPE ='Discount Voucher' AND END_DATE > '$date' GROUP BY USERID LIMIT $limit";

include FILEPATH.'templates/top20.tpl.php';
                        
        
