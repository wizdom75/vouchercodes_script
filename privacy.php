<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require('./path.php');
require FILEPATH.'includes/config.php';
include (FILEPATH."session.php");

$metaTitle = 'Privacy &amp; cookie policy';
$metaDescription = '';

include FILEPATH.'templates/privacy.tpl.php';
