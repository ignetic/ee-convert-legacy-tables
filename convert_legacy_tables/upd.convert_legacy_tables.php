<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Convert tables ee4 Module Install/Update File
 *
 * @package		Convert_legacy_tables
 * @category	Module
 * @author		Simon Andersohn
 * @link		
 */
 
require_once PATH_THIRD.'convert_legacy_tables/config.php';


class Convert_legacy_tables_upd {
	
	public $version = CONVERT_LEGACY_TABLES_VERSION;
	public $class_name = CONVERT_LEGACY_TABLES_CLASS_NAME; 

	
	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->module_name = ucfirst($this->class_name);
	}
	
	// ----------------------------------------------------------------
	
	/**
	 * Installation Method
	 *
	 * @return 	boolean 	TRUE
	 */
	public function install()
	{
		$mod_data = array(
			'module_name'			=> $this->module_name,
			'module_version'		=> $this->version,
			'has_cp_backend'		=> "y",
			'has_publish_fields'	=> 'n'
		);
		
		ee()->db->insert('modules', $mod_data);
		
		// ee()->load->dbforge();
		/**
		 * In order to setup your custom tables, uncomment the line above, and 
		 * start adding them below!
		 */
		
		return TRUE;
	}

	// ----------------------------------------------------------------
	
	/**
	 * Uninstall
	 *
	 * @return 	boolean 	TRUE
	 */	
	public function uninstall()
	{
		$mod_id = ee()->db->select('module_id')
								->get_where('modules', array(
									'module_name'	=> $this->module_name
								))->row('module_id');
		
		if (ee()->db->table_exists('module_member_groups')) {
			ee()->db->where('module_id', $mod_id)
				->delete('module_member_groups');
		}	
		
		if (ee()->db->table_exists('module_member_roles')) {
			ee()->db->where('module_id', $mod_id)
				->delete('module_member_roles');
		}
		
		ee()->db->where('module_name', $this->module_name)
					 ->delete('modules');
		
		// ee()->load->dbforge();
		// Delete your custom tables & any ACT rows 
		// you have in the actions table
		
		return TRUE;
	}
	
	// ----------------------------------------------------------------
	
	/**
	 * Module Updater
	 *
	 * @return 	boolean 	TRUE
	 */	
	public function update($current = '')
	{
		// If you have updates, drop 'em in here.
		return TRUE;
	}
	
}
