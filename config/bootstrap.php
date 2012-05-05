<?php 
$dependencies = array(
	'php' => array(
		'version' => '5.3'
	),
	'mongo' => array(
		'version' => '2.0'
	),
	'imagmagick' => array(
		'version' => '1.2'
	),
	'gd' => array(
		'version' => '1.2'
	),
	'mysql' => array(
		'version' => '5.0'
	),
	'apc' => 'true',
	'writable' => array(
		'/app/tmp/code', 
		'app/tmp/uploads'
	),
	'executable' => array(
		'/path/to/file', 
		'/another/path/to/file/'
	)
);
?>