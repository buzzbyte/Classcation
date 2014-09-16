<?php
	define('CLASSCATION', true); // ONLY USED FOR SINGLE-FILE TESTING!!

	/**
	 * loadmodules.php
	 * Loads module classes into Classcation.
	 */
	
	if(!defined('CLASSCATION')) die("Failed.");

	define('ABSPATH', dirname(__FILE__)."/");
	define('PLUGINS_DIR', ABSPATH.'plugins/');

	if(!file_exists(PLUGINS_DIR)) mkdir(PLUGINS_DIR);

	$modlst = scandir(PLUGINS_DIR);

	foreach ($modlst as $plugin) {
		if($plugin == ".") continue;
		if($plugin == "..") continue;
		echo "Loading " . $plugin . "...";
		if (mod_main_exists($plugin)) {
			//
		}

	}

	function mod_main_exists($module)
	{
		if(file_exists(get_mod_main_path($module))) {
			return true;
		} else {
			return false;
		}
	}

	function get_mod_main_path($module)
	{
		return PLUGINS_DIR.$module."/".$module.".class.php";
	}
?>