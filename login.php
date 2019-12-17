<?php
    require 'config.php';
    session_start();
?>

<?php
$url='choice.php';
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query=" select * from logindb WHERE username='$username' AND password='$password'";

    $query_run=mysqli_query($con,$query);
    if(mysqli_num_rows($query_run)>0)
    {
        //valid
        //session variable
        $_SESSION['username']=$username;
        header("location:$url");
    }
    else
    {
        //invalid
        echo ' <script type="text/javascript"> alert("Invalid credentials, please try again") </script>';
    }
    
}
?>

<html>
    <head>
        <title>Log In</title>
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="style.css">
    </head>
  <body class="b2">
  <div class="topnav">
        <img src="skillcollab.png" style="float:left;height:48px;width:1000px;"/>
    <a href="index.html">Home</a>
    <a href="contact.html">Contact</a>
    <a href="index.html">About</a>
    <a class="active">Login</a>

</div>  
    <div id="login1">
    <form action="login.php" method="post">
        <br/>
    <center><label style="font-family:Tahoma;font-size:20px;color:paleturquoise;">Username:</label><br><br/></center>
    <center><input name="username" type="text" required></br></br><br/></center>
    <center><label style="font-family:Tahoma;font-size:20px;color:paleturquoise;">Password:</label><br><br/></center>
    <center><input name="password" type="password" required></br><br/><br></center>
    <center><input id="login2" name="login" type="submit" id="login_btn" value="Login"></br></br></center>
    </form>
        </div>    
    </body>
</html>
