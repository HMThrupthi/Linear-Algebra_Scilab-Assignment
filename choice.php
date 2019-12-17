<?php 
    session_start();
?>

<html>
    <head>
        <title>Find-Offer-Collaborate</title>
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="style.css">

        <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="topnav">
            <img src="skillcollab.png" style="float:left;height:48px;width:1000px;"/>
        <a href="index.html">Home</a>
        <a href="contact.html">Contact</a>
        <a href="index.html">About</a>
        <a href="index.html">Logout</a>
    
    </div>
        <br/><br/><br/><br/>
        <div style="font-size:20px;"><span id="d1" style="font-family:Lucida Sans;color:black;">Hello </span><?php echo $_SESSION['username'] ?>!</div>
        <h2 style="font-family:Lucida Sans;color:rgb(3, 72, 104)">What are you looking to do today?</h2><br/>
            <div style="opacity:0.7; background-color: black;color:white;">
                <h1 style="color:rgb(70, 187, 122);font-family: Helvetica;">Look For A Skill</h1>
                <h2 style="color:yellowgreen;font-family:Franklin Gothic Medium;">Find individuals with skills best suited to your requirements</h2>
                <br/>
                <a href="find.html"><div id="find">Find</div></a>
            </div>
            <div style="opacity:0.7; background-color: black;color:white;">
                <h1 style="color:rgb(70, 187, 122);font-family: Helvetica;">Offer A Skill</h1>                    
                <h2 style="color:yellowgreen;font-family:Franklin Gothic Medium;">Offer your talents and skill in exchange for work experience</h2>
                <br/>
                <a href="offer1.php"><div id="offer">Offer</div></a>
            </div>
            <div style="opacity:0.7; background-color: black;color:white;">
                    <h1 style="color:rgb(70, 187, 122);font-family: Helvetica;">Collaborate</h1>
                    <h2 style="color:yellowgreen;font-family:Franklin Gothic Medium;">Work on projects you enjoy, with like minded people</h2>
                    <br/>
                    <a href="collab or join.php"><div id="collaborate">Collaborate</div</a>
            </div>
            <script>
             var dt=new Date($.now());
            var time=dt.getHours();
            console.log(time);
            if(time>0 && time<12)   $("#d1").html("Good Morning ");
            if(time>12 && time<17)   $("#d1").html("Good Afternoon ");
            if(time>17 && time<20)   $("#d1").html("Good Evening ");
            if(time>20)   $("#d1").html("Good Night ");            
            </script>
    </body>
</html>