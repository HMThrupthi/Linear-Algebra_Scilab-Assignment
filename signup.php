<?php
    require 'config.php';
	session_start();
?>

<?php
$url='details.php';
    if(isset($_POST['submit_btn']))
    {
        //echo ' <script type="text/javascript"> alert("signup button clicked") </script>';
        $username=$_POST['username'];
        $mailid=$_POST['mailid'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        if($password==$cpassword)
        {
            $query=" select * from logindb WHERE username='$username'";
            $query_run=mysqli_query($con,$query);
            if(mysqli_num_rows($query_run)>0)
            {
                //there is already user wih same username
                echo ' <script type="text/javascript"> alert("User already exists, try another username") </script>';
            }
            else
            {
                $query="insert into logindb values('$username','$password','$mailid')";
                $query_run=mysqli_query($con,$query);
                if($query_run)
                {
                    $_SESSION['username']=$username;
                    header("location:$url");
                }
                else
                {
                    echo ' <script type="text/javascript"> alert("Error, please try again later") </script>';
                }
            }
        }
        else
        {
            echo ' <script type="text/javascript"> alert("Password and confirm password does not match, try again") </script>';

        }
    }
?>

<html>
    <head>
        <title>Sign Up</title>
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="style.css">
    </head>
  <body>
  <div class="topnav">
        <img src="skillcollab.png" style="float:left;height:48px;width:1000px;"/>
    <a href="index.html">Home</a>
    <a href="contact.html">Contact</a>
    <a href="index.html">About</a>
    <a href="login.php">Login</a>

</div>  
    <div id="signup1">
    <form action="signup.php" method="post">
<center><label style="font-family:Tahoma;font-size:20px;color:paleturquoise;">Username:</label><br><br></center>
<center><input name="username" type="text" required></br><br></center>
<center><label style="font-family:Tahoma;font-size:20px;color:paleturquoise;">Mail-id:</label><br><br></center>
<center><input name="mailid" type="email" required></br><br></center>
<center><label style="font-family:Tahoma;font-size:20px;color:paleturquoise;">Password:</label><br><br></center>
<center><input name="password" type="password" required></br><br></center>
<center><label style="font-family:Tahoma;font-size:20px;color:paleturquoise;">Confirm Password:</label><br><br></center>
<center><input name="cpassword" type="password" required></br><br></center></br>
<center><input id="signup2" name="submit_btn" type="submit" id="signup_btn" value="Sign Up"></br></br></center></br>
</form>
    </body>
</html>
