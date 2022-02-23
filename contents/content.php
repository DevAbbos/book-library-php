<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	      <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> 
</head>
<body>
	 <div class="wrapper">
                <div class="content">
                    <div class="navigation">
                        <div class="sidebar">
                            <ul class="categories">
                                <li class="list_item active"><a href="index.php" class="link_href">Barcha kitoblar</a></li>
                                <li class="list_item"><a href="adabiyot.php?post=" class="link_href">Adabiyot</a></li>
                                <li class="list_item"><a href="prog.php?post=" class="link_href">Dasturlash</a></li>
                                <li class="list_item"><a href="komed.php?post=" class="link_href">Komediya</a></li>
                                <li class="list_item"><a href="other.php?post=" class="link_href">Boshqa</a></li>
                            </ul>
                        </div>

                        <?php 
                             $sql = mysqli_query($con, "SELECT * FROM book ORDER BY id DESC");
                ?>
                     
                            <?php foreach($sql as $sq): ?>
                            <div class="book_list">
                               <div class="img_con">
                                  <img src="adminpage/categories/uploads/<?php echo $sq['img']; ?>" alt="" class="img_book">
                               </div>
                               <div class="title_book">
                                    <?php echo $sq['title']; ?>
                               </div>
                               <div class="sub_title">
                                    <?php echo $sq['sub_title']; ?>
                               </div>
                               <div class="categories" style="padding: 0px 0px 10px;">
                                   <span><strong>Kategoriya: </strong><?php echo $sq['categories']; ?></span>
                               </div>
                               <button class="btn btn-primary">
                                    <a href="download.php?post=<?php echo $sq['id']; ?>" style="color:#fff;">To'liq</a>
                               </button>
                            </div>
                       
                        <?php endforeach; ?>
                        </div>
                </div>
            </div>
</body>
</html>