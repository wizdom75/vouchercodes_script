<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require('./path.php');
require FILEPATH.'includes/config.php';
include (FILEPATH."session.php");

$metaTitle = 'Create a free account';
$metaDescription = '';

include FILEPATH.'templates/register.tpl.php';