<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require('../path.php');
require FILEPATH.'includes/config.php';
include (FILEPATH."session.php");

$days = doCleanInput($_POST['days']);
$origin_url = doCleanInput($_POST['origin_url']);
$origin_uid = doCleanInput($_POST['origin_uid']);



       header('Location: '.SITE_URL.'member/subscriptions'); 


