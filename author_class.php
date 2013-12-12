<?php
	require_once("connection.php");

	class Author 
	{
		var $connection;
		
		function __construct()
		{
			$this->connection = new Database;
		}
		
		function get_authors()
		{
			$query = "SELECT * FROM authors";
			return $this->connection->fetch_all($query);
		}
		
		function add_author()
		{
			//put something here to be able to add an author
		}
		
		function edit_author()
		{
			//put something here to be able to edit author information
		}
		
		function delete_author()
		{
			//put something here to be able to delete an author
		}
	}


?>