<?php
	define('CLASSCATION', true); // ONLY USED FOR SINGLE-FILE TESTING!!

	/**
	 * loadmodules.php
	 * Loads module classes into Classcation.
	 */

	echo "It works!";
	
	if(!defined('CLASSCATION')) die("Failed.");

	echo "It still works!"

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