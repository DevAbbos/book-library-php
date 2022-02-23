<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DOWNLOAD</title>
</head>
<body>
	<?php 
	include "connect.php";

	$fil = $_GET['file'];

	$query = mysqli_query($con, "SELECT * FROM book WHERE id = '$fil'");
	while($info = mysqli_fetch_assoc($query)){
		?>
		<embed src="adminpage/categories/uploadspdf/<?php echo $info['pdf_file']; ?>" type="application/pdf" width="100%" height="600px">
		<?php
	}

?>
</body>
</html>