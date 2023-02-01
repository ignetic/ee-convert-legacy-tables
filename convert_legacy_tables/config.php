<?php

/**
 * Config file for Convert Legacy Tables
 *
 * @package			convert_legacy_tables
 * @author			Simon Andersohn
 * @copyright 		Copyright (c) 2015
 * @license 		
 * @link			
 * @see				
 */

if ( ! defined('CONVERT_LEGACY_TABLES_NAME'))
{
	define('CONVERT_LEGACY_TABLES_NAME',        'Convert Legacy Tables');
	define('CONVERT_LEGACY_TABLES_CLASS_NAME',  'convert_legacy_tables');
	define('CONVERT_LEGACY_TABLES_DESCRIPTION', 'Convert EE3 legacy channel data tables to EE4+ tables');
	define('CONVERT_LEGACY_TABLES_VERSION',     '1.1.3');
	define('CONVERT_LEGACY_TABLES_DOCS_URL', 	'https://github.com/ignetic/'); 
}

$config['name'] 	= CONVERT_LEGACY_TABLES_NAME;
$config['version'] 	= CONVERT_LEGACY_TABLES_VERSION;


