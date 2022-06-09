<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['site_license_key'] = '';
// ExpressionEngine Config Items
// Find more configs and overrides at
// https://docs.expressionengine.com/latest/general/system-configuration-overrides.html

$config['app_version'] = '6.3.4';
$config['encryption_key'] = 'ebd45cfc3328472b205a92579818588a3d375254';
$config['session_crypt_key'] = '7be3d910eec426b117299bf760db91eb9182c53c';
$config['database'] = array(
	'expressionengine' => array(
		'hostname' => 'localhost',
		'database' => 'kiriche',
		'username' => 'root',
		'password' => '11041ima',
		'dbprefix' => 'exp_',
		'char_set' => 'utf8mb4',
		'dbcollat' => 'utf8mb4_unicode_ci',
		'port'     => ''
	),
);
$config['show_ee_news'] = 'y';
$config['share_analytics'] = 'y';

// EOF