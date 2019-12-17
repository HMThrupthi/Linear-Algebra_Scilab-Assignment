<?php
    require 'config.php';
    session_start();
    
?>
<?php
$url="redirect.html";
        if(isset($_POST['btn']))
        {
            $name= $_COOKIE['name'];
            //echo $name;
            $username=$_SESSION['username'];
            $query="UPDATE offer SET accepted = '$username' WHERE name = '$name'";
        
            $query_run=mysqli_query($con,$query);
            
            if($query_run)
            {
                echo ' <script type="text/javascript"> alert("Accepted...Visit profile for further details!!!") </script>';
                //header("location:$url");
        
            }
            else
            {
                echo ' <script type="text/javascript"> alert("Error!!!") </script>';
            }
            
        }
    ?>
<html>
    <head>
        <title>Requests</title>
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
    <div class="topnav">
            <img src="skillcollab.png" style="float:left;height:48px;width:1000px;"/>
        <a href="index.html">Home</a>
        <a href="contact.html">Contact</a>
        <a href="#">About</a>
        <a href="index.html">Logout</a>
        </div>
        <br/><br/><br/><br/><br/>
        <h1 style="font-family:Trebuchet MS;">Requests</h1>
        <form method="POST">
        <div class="req">
                <img src="p7.jpg" width="100px" height="100px" style="opacity:1;"/>
                <span style="position:absolute;left:120px;top:190px;">Name: <span class="lala1">Shah Rukh Khan</span></span>
                <span style="position:absolute;left:120px;top:220px;">Looking For: <span>Illustrator</span></span>
                <a href="#"><button name="btn" class="but" style="position:absolute;left:1120px;top:195px;">Accept</button></a>
        </div>
        <br/>
        <div class="req">
                <img src="p8.jpg" width="100px" height="100px" style="opacity:1;"/>
                <span style="position:absolute;left:120px;top:310px;">Name: <span class="lala1">Madhuri Dixit</span></span>
                <span style="position:absolute;left:120px;top:340px;">Looking For: <span>C Programming Enthusiast</span></span>
                <a href="#"><button name="btn" class="but" style="position:absolute;left:1120px;top:315px;">Accept</button></a>
        </div>
        <br/>
        <div class="req">
                <img src="p9.jpg" width="100px" height="100px" style="opacity:1;"/>
                <span style="position:absolute;left:120px;top:430px;">Name: <span class="lala1">Hrithik Roshan</span></span>
                <span style="position:absolute;left:120px;top:470px;">Looking For: <span>Full Stack Developer</span></span>
                <a href="#"><button name="btn" class="but" style="position:absolute;left:1120px;top:435px;">Accept</button></a>
        </div>
        <br/>
        <div class="req">
            <img src="p10.jpg" width="100px" height="100px" style="opacity:1;"/>
            <span style="position:absolute;left:120px;top:540px;">Name: <span class="lala1">Aishwarya Rai</span></span>
            <span style="position:absolute;left:120px;top:580px;">Looking For: <span>Beta Reader</span></span>
            <a href="#"><button name="btn" class="but" style="position:absolute;left:1120px;top:550px;">Accept</button></a>
        </div>
        <br/>
        <div class="req">
            <img src="p11.jpg" width="100px" height="100px" style="opacity:1;"/>
            <span style="position:absolute;left:120px;top:660px;">Name: <span class="lala1">Salman Khan</span></span>
            <span style="position:absolute;left:120px;top:700px;">Looking For: <span>Video Editor</span></span>
            <a href="#"><button name="btn" class="but" style="position:absolute;left:1120px;top:670px;">Accept</button></a>
        </div>
        <br/>
        <div class="req">
            <img src="p12.jpg" width="100px" height="100px" style="opacity:1;"/>
            <span style="position:absolute;left:120px;top:780px;">Name: <span class="lala1">Akshay Kumar</span></span>
            <span style="position:absolute;left:120px;top:820px;">Looking For: <span>Tally Accountant</span></span>
            <a href="#"><button name="btn" class="but" style="position:absolute;left:1120px;top:785px;">Accept</button></a>
        </div>
        </form>
    <script>

        var a=document.getElementsByClassName("but");
        for(i=0;i<a.length;i++)
        {
            a[i].addEventListener("click",fun);
        }
        function fun()
        {
            for(i=0;i<a.length;i++)
            {
                if(this==a[i]) break;
            }
            var b=document.getElementsByClassName("lala1");
            var c=b[i].innerHTML;
            //alert(c);
            /*
            a[i].style.width="120px";
            a[i].style.backgroundColor="Tomato";
            a[i].style.borderColor="Tomato";
            var name;
            document.cookie="name="+c;
            */
        }                  
    </script>
    
    
    
    </body>
</html>