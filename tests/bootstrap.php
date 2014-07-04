<?php

	if ( ! defined('SIMPLETESTDIR')) {
		define('SIMPLETESTDIR', __DIR__);
	}

	error_reporting(E_ALL|E_STRICT);

    $vendorDirectory = __DIR__ . '/../vendor';
    $simpleTestSourceDirectory = $vendorDirectory . '/lastcraft/simpletest';
	
	include_once($vendorDirectory . '/autoload.php');

	require_once($simpleTestSourceDirectory . '/autorun.php');
	require_once($simpleTestSourceDirectory . '/compatibility.php');
	require_once($simpleTestSourceDirectory . '/browser.php');
	require_once($simpleTestSourceDirectory . '/web_tester.php');
	require_once($simpleTestSourceDirectory . '/unit_tester.php');
