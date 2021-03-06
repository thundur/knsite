<?php

require 'config.default.php';
require 'lib/common.php';

$in = array_merge($_GET, $_POST);

// Get PATH
if(isset($_SERVER['ORIG_PATH_INFO']))
	$path = $_SERVER['ORIG_PATH_INFO'];
elseif(isset($_SERVER['PATH_INFO']))
	$path = $_SERVER['PATH_INFO'];
elseif(isset($_GET['path']))
	$path = $_GET['path'];
elseif(isset($_POST['path']))
	$path = $_POST['path'];
else
	$path = '';
	
$bits = explode('/', $path);

if(count($bits) == 0 or
   (empty($bits[0]) and count($bits) == 1) or
   (empty($bits[0]) and empty($bits[1])))
   	$act = 'default';
elseif(empty($bits[0]))
	$act = $bits[1];
else
	$act = $bits[0];

$file = "actions/$act.php";

if(!is_file($file)) {
	header('HTTP/1.0 404 Not Found');
	die("$act: Action doesn't exist");
}

require_once($file);

?>
