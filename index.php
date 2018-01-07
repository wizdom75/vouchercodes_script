<?php

require('path.php');

error_reporting();

include FILEPATH.'includes/config.php';

include (FILEPATH."session.php");

$metaTitle = '';
$metaDescription = '';

$banner = getTotalRecords('BANNER');
$sql = "SELECT LINKTEXT FROM ".PREFIX."BANNER WHERE ISVALID='Y'";
$res = executeQuery($sql);

$sql2 = "SELECT ID FROM ".PREFIX."BANNER WHERE ISVALID='Y'";
$res2 = executeQuery($sql2);

$sql3 = "SELECT IMAGE, LINK FROM ".PREFIX."BANNER WHERE ISVALID='Y'";
$res3 = executeQuery($sql3);

include FILEPATH.'templates/index.tpl.php';
                        
                     