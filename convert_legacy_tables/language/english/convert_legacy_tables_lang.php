<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$lang = array(
	'convert_tables_title' => 'Convert legacy fields to new native EE4+ fields',
	'convert_tables_only_for_ee4' => 'This is only available for EE4+',
	'legacy_fields' => '<big>Legacy fields</big> <small>(single channel_data table)</small>',
	'legacy_fields_desc' => 'Select to convert to new native EE4+ fields',
	'ee4_fields' => '<big>Native EE4+ fields</big> <small>(separate data_data_field_XX tables)</small>',
	'ee4_fields_desc' => 'Select to convert to old legacy fields',
	'ee4_fields_desc_warn' => '<br><span style="color:red">Beware that Fluid fields may be lost when converting back to legacy fields (disabled by default)!</span>',
	'convert_fields' => 'Convert Fields',
	'convert_channel_fields' => 'Convert Channel Fields',
	'convert_category_fields' => 'Convert Category Fields',
	'convert_member_fields' => 'Convert Member Fields',
	'convert_tables_engine' => 'Convert Tables Engine Tool',
	'btn_converting' => 'Converting...',
	
	'convert_tables_success' => 'Tables converted successfully',
	'convert_tables_success_desc' => 'Tables converted',	
	'convert_tables_warning' => 'Tables converted warning',
	'convert_tables_warning_desc' => 'Some tables may not have converted correcty',
	
	'myisam_tables' => 'MyISAM Tables',
	'myisam_tables_desc' => 'Select to convert tables from MyISAM to InnoDB',	
	'innodb_tables' => 'InnoDB Tables',
	'innodb_tables_desc' => 'Select to convert tables from InnoDB to MyISAM',
	
	'convert_engine_success' => 'Tables converted successfully',
	'convert_engine_success_desc' => 'Tables converted',
	'convert_engine_warning' => 'Warning: some tables may not have been converted',
	'convert_engine_warning_desc' => 'Tables converted',
	
	'warning' => 'Warning!',
	'warning_desc' => 'Make sure that you backup the database before converting.',
	

);

