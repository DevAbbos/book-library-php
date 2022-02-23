<?php 
	
	include "../../connect.php";
		

	if(!$_SESSION['logged_user'])
	{
		header("Location: ../../index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Adding book</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> 
</head>
<body>
	<div class="container_fluid">
		<form action="addbook.php" method="post" enctype="multipart/form-data">
			<div class="input-group mb-3">
		  <button class="btn btn-primary" name="upload" for="inputGroupFile01">Upload</button>
		  <input type="file" name="image" class="form-control" id="inputGroupFile01">
		</div>
		<div class="input-group">
			<input type="file" name="pdf" accept="application/pdf,application/vnd.ms-excel" />
		</div><br>
			<label>Adabiyot ,  Dasturlash , Komediya , Boshqa</label>
		<div class="input-group">
			<input type="text" name="select" class="form-control" placeholder="Birini tanlang">
		</div>
		<div class="input-group mb-4 mt-4">
		  <input type="text" class="form-control" name="name" placeholder="Title" aria-label="Title" aria-describedby="addon-wrapping">
		</div>
		<div class="input-group mb-3">
		  <input type="text" class="form-control" name="subname" placeholder="Sub title" aria-label="Title" aria-describedby="addon-wrapping">
		</div>
		<div class="form-floating">
		  <textarea class="form-control" name="readmore" placeholder="Morea about book" id="floatingTextarea"></textarea>
		 
		</div>
		</form>
	</div>

	<?php
	if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	$image_size = $_FILES['image']['size'];
  	$image_type = $_FILES['image']['type'];
  	$image_temp_loc = $_FILES['image']['tmp_name'];
  	$image_storage = 'uploads/'.$image;
  	move_uploaded_file($image_temp_loc,$image_storage);

  	$title = $_POST['name'];
  	$subtitle = $_POST['subname'];
  	$readmore = $_POST['readmore'];
  	$select = $_POST['select'];

		$pdf=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $pdf_store="uploadspdf/".$pdf;

          move_uploaded_file($pdf_tem_loc,$pdf_store);

  	// image file directory

  	$sql = "INSERT INTO book (img, pdf_file, title, sub_title, full_text, categories) VALUES ('$image', '$pdf', '$title', '$subtitle', '$readmore', '$select')";
  	 if(mysqli_query($con, $sql)) { // Если выполнился query
   
      // Здесь редирект
     header("Location: " . $_SERVER['REQUEST_URI']);
     exit();
 }
  	// execute query
  	mysqli_query($con, $sql);

  
  	if (move_uploaded_file($_FILES['image']['tmp_name'], $image)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
	
	
?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(function(){
  $('.upload').on('click', function(){
   $("select[name='podarok[]'] > option").each(function(){
        var content = $(this).text(),
         val = $(this).val();
        $(this).val(val + '|' + content);
   });
  });
});
</script>
</body>
</html>


