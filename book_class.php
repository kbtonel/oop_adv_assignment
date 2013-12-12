<?php
	require_once("connection.php");
	
	class Book 
	{
		var $connection;
		
		function __construct()
		{
			$this->connection = new Database;
		}
		
		function get_books()
		{
			$query = "SELECT books.id, books.title, authors.first_name AS author_first_name, authors.last_name AS author_last_name, genres.name as genre, books.created_at
						FROM books
						LEFT JOIN authors ON books.author_id = authors.id
						LEFT JOIN genres ON books.genre_id = genres.id";

			return $this->connection->fetch_all($query);
		}
		
		function add_book()
		{		
			//add a book entry
		}
		
		function edit_book()
		{
			//edit a book information
		}
		
		function delete_book()
		{
			//be able to delete a book
		}
	}
?>