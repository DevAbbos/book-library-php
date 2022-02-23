<?php 

	$host = "localhost";
	$name = "root";
	$passwd = "";
	$dbname = "book_library";

	$con = mysqli_connect($host,$name,$passwd,$dbname);
	mysqli_query( $con, 'SET NAMES utf8');

	session_start();
	
?>

