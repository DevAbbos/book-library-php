<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
  
<body>
    <form action="login.php" method="post">
        <div class="login-box">
            <h1>Login</h1>
  
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Adminname"
                         name="adminname" value="">
            </div>
  
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="">
            </div>
  
            <input class="button" type="submit"
                     name="login" value="Sign In">
        </div>
    </form>
<?php 

  
include_once('../connect.php');
   
function test_input($data) {
      
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
   
if ($_SERVER["REQUEST_METHOD"]== "POST") {
      
    $adminname = test_input($_POST["adminname"]);
    $password = test_input($_POST["password"]);
    $stmt = mysqli_query($con, "SELECT * FROM adminlogin");
    
      
    foreach($stmt as $user) {
          
        if(($user['adminname'] == $adminname) && 
            ($user['password'] == $password)) {
                header("Location: admin.php");
            $_SESSION['logged_user'] = $user;
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('Iltimos qilamanki, bu saytni bushatib quysangiz')";
            echo "</script>";
            die();
        }
    }
}
  
?>

</body>
  
</html>