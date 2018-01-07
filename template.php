<?php
require('./path.php');
require FILEPATH.'includes/config.php';
include (FILEPATH."session.php");

$metaTitle = 'Template';
$metaDescription = '';

include FILEPATH.'templates/template.tpl.php';