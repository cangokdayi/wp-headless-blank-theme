<?php
/**
 * 404 template
 * 
 * @package WordPress
 * @subpackage wp-headless-theme 
 */

header('HTTP/1.1 404 Not Found');
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');

exit;