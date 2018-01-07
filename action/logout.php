<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require('../path.php');
require FILEPATH.'includes/config.php';
include (FILEPATH."session.php");
$return = $_GET['return_url'];

                unset($muserId);
		unset($visitorId);
		unset($visitorName);
		unset($visitorEmail);

		unset($_SESSION["muserId"]);
		unset($_SESSION["visitorId"]);
		unset($_SESSION["visitorName"]);
		unset($_SESSION["visitorEmail"]);
                
    header('Location: '.$return);