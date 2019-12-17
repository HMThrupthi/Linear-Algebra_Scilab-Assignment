<?php
    require 'config.php';
    session_start();
    if(isset($_POST['submit_btn']))
    {
        //echo ' <script type="text/javascript"> alert("signup button clicked") </script>';
        $fullname=$_POST['fullname'];
        $gender=$_POST['gender'];
        $age=$_POST['age'];
        $contactno=$_POST['contactno'];
        $mailid=$_POST['mailid'];
        $institution=$_POST['institution'];
        $skills=implode(',',$_POST['skills']);
        $interests=$_POST['interests'];

        $img_name=$_FILES['imglink']['name'];
        $img_size=$_FILES['imglink']['size'];
        $img_tmp=$_FILES['imglink']['tmp_name'];

        $directory='uploads/';
        $target_file=$directory.$img_name;

        if($img_size>2097152)
        {
            echo ' <script type="text/javascript"> alert("Image size greater than 2 mb...try another image!!!") </script>';
        
        }
        else
        {
            move_uploaded_file($img_tmp,$target_file);
            //$query="insert into user_details values('fullname','gender','age','contactno','mailid','institution','skills','interests','target_file')";
            $query="insert into user_details values('$fullname','$gender','$age','$contactno','$mailid','$institution','$skills','$interests','$target_file')";
            $query_run=mysqli_query($con,$query);
            if($query_run)
            {
                echo ' <script type="text/javascript"> alert("Details submitted!!!") </script>';
                $url='choice.php';
                header("location:$url");
            
            }
            else
            {
                echo ' <script type="text/javascript"> alert("Error!!!") </script>';
            
            }
        }
        $url='choice.php';
                header("location:$url");
    }
?>
<html>
<head>
<title>Details</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="topnav">
        <img src="skillcollab.png" style="float:left;height:48px;width:1000px;"/>
    <a href="index.html">Home</a>
    <a href="contact.html">Contact</a>
    <a href="#">About</a>
    <a href="index.html">Logout</a>
</div><br/><br/><br/>
<div id="details1">  
<h3>Welcome 
<?php echo $_SESSION['username'] ?>!!!
</h3>
<h2>Choose your skills...</h2>
</br>
<form action="details.php" method="post" enctype="multipart/form-data">
<label>Fullname:</label><br>
<input name="fullname" type="text" required></br>

<label>Gender:</label><br>
<input name="gender" type="radio" value="male" checked>Male  
<input name="gender" type="radio" value="female">Female</br>

<label>Age:</label><br>
<input name="age" type="number" required></br>

<label>Contact number:</label><br>
<input name="contactno" type="number" required></br>

<label>Mail-id:</label><br>
<input name="mailid" type="email" required></br>

<label>Institution/organization:</label><br>
<input name="institution" type="text" required></br>

<label>Skills:</label><br>
<input name="skills[]" type="checkbox" value="programmer">Programmer</br>
<input name="skills[]" type="checkbox" value="editor">Editor</br>
<input name="skills[]" type="checkbox" value="photographer">Photographer</br>

<label>Interested in:</label><br>
<select name="interests">
    <option value="Lookingforaskill">Looking for a skill</option>
    <option value="Offeringaskill">Offering a skill</option>
    <option value="Collaboration">Collaboration</option>
    <option value="All">All</option>
</select></br></br>

<input type="file" name="imglink" accept=".jpg,.jpeg,.png"><br/><br/>

<input id="details2" name="submit_btn" type="submit" id="signup_btn" value="Submit"></br></br>
</form>
</div>
</body>
</html>