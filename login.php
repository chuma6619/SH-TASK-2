
<?php
// TASK WEEK 2.
// login page validation:
session_start();
if(isset($_SESSION["email"]) && isset($_SESSION["password"])){
  $email = $_SESSION["email"];
  $password = $_SESSION["password"];

  if(isset($_POST["login"])){
    $email2 = $_POST["email"];
    $password2 = $_POST["password"];

    if($password2 !="" && $email2 !="" && $email == $email2 && $password == $password2){
      header("location: welcome.php");
    }else{
      echo "<script>
      alert('INVALID INPUT!!! , click on click to register or check your Email and Password.')
      </script>";
    }
  }
}

?>


<!DOCTYPE html>
<html>
  <head>
     <title> Login Page</title>
     <style type="text/css">
       
       h1,#container{
           text-align: center;
       }

       #content{
        padding: 30px;
        border-radius: 10px;
        background-color: gray;
        max-width:50%;
        margin: auto;
       }

       #login{
           padding: 10px;
           margin-left:330px;
       }

       span, input{
        margin-left:20px;
        margin-bottom: 10px;
       }
       
       input[type="email"]{
        margin-left:40px;
       }

     </style>
  </head>
  <body>
     <h1> LOGIN PAGE</h1> 
     <br>
     <div id="container">
     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     <div id="content">
     Email: <input type="email" name="email"> <br><br>
     Password: <input type="password" name="password"> <br><br>
     <input id="login" type="submit" name="login" value = "Login"> 
     <span>Don't have an account? <a href="register.php" >click to register</a></span>
     </div>
     </form>
     </div>


  </body>
</html>