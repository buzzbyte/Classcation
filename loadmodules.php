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
		echo $plugin;
	}
?>