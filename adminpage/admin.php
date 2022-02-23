<?php 
	
	include "../connect.php";
		

	if(!$_SESSION['logged_user'])
	{
		header("Location: ../index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Panel</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> 
        <style>
        	.content{
        		display: flex;
        		justify-content: center;
        		align-items: center;
        		flex-direction: column;
        		margin-top: 15%;
        	}
        </style>
</head>
<body>
	<div class="container bg-dark">
	
		<h1 class="text-white" style="text-align: center;">WELCOME TO ADMIN PANEL</h1>

	</div>

		<div class="container">
			<div class="content">
				<button class="btn btn-success" style="width:100%;"><a href="categories/addbook.php?filename=" style="text-decoration:none; color:#fff;">Kitob qo'shish</a></button><br><br>
		
			</div>
		</div>
	
</body>
</html>