<?php
	require_once("connection.php");
	
	
	class Main
	{
		var $connection;
		
		function __construct()
		{
			$this->connection = new Database;
		}
		
		// add functions here to process form submission
		
	}
	
	//instantiate process
	$process = new Main();
?>

