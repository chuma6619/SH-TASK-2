
<?php
// TASK WEEK 2.
// starting the session:
session_start();
if(isset($_POST["register"])){

  // getting the data:
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
// Registration page validation:
  if($username !="" && $email !="" && $password !=""){
    setcookie("email", $email, time()+60*60*31);
    setcookie("password", $password, time()+60*60*31);
    header("location: login.php");
     if(strlen($password)<4 || strlen($username)<4){
       header("location: register.php");
     }
  }else{
    // error message:
    echo "<script>
    alert('Fill in the Required Fields, Thank You.')
    </script>";
  }
  // creating a session:
  $_SESSION["email"] = $email;
  $_SESSION["password"] = $password;
}

?>



<!DOCTYPE html>
<html>
  <head>
     <title>Registration Page</title>

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

       #register{
           padding: 10px;
           text-align: center;
       }

     input{
        margin-left:20px;
        margin-bottom: 10px;
       }
       
       input[type="email"]{
        margin-left:40px;
       }

     </style>

  </head>
  <body>
     <h1> REGISTRATION PAGE</h1> 
     <br>
     <div id="container">
     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
     <div id="content">
     Username: <input type="text" name="username" placeholder="enter upto 4 characters"> <br><br>
     Email: <input type="email" name="email"> <br><br>
     Password: <input type="password" name="password" placeholder="enter upto 4 characters"> <br><br>
     <input id="register" type="submit" name="register" value = "Register"> 
     </div>
     </form>
     </div>


  </body>
</html>