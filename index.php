<?php
	require_once("class.manipulationSQL.php");
	echo "<pre>"; print_r(PDO::getAvailableDrivers());
	$settingsDB=array('typeDB' => 'mysql', 'host' => 'localhost', 'username' => 'q9278228_ghost', 'password' => '12356789', 'dbname' => 'q9278228_ghost');
	$db=new manipulationSQL();
	$db->connectDB($settingsDB);
	$db->select($settingsDB['typeDB'], '*')->from('test')->where('1'); 
?>
