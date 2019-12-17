<?php
    require 'config.php';
	session_start();
?>
<html>
    <head>
            <link rel="shortcut icon" href="favicon.ico">
            <link rel="stylesheet" href="style.css">
    </head>
    <body >
        <div class="topnav">
            <img src="skillcollab.png" style="float:left;height:48px;width:1000px;"/>
        <a href="index.html">Home</a>
        <a href="contact.html">Contact</a>
        <a href="index.html">About</a>
        <a href="index.html">Logout</a>
        </div>
        <br/><br/><br/><br/><br/>
        <div class="tab">
            <button id="1" class="tablink" onclick="opentab(this)" >START </button>
            <button id="2" class="tablink" onclick="opentab(this)" >JOIN</button>
        </div><br/><br/>
        <div id="START" class="tabcontent">
            <p>Hi <?php echo $_SESSION['username'] ?>!</p>
            <p>Please give details about your collaborations...</p>
            <form id="myForm">	
                NAME:<input type="text" name="name"><br><br>
                AGE:<input type="number" name="age" min="10"><br><br>
                EMAIL-ID:<input type="email" name="email"><br><br>
                CONTACT NUMBER:<input type="tel" name="contact" pattern="[0-9]{10}"><br><br>
                TEAM SIZE:<input type="number" name="size"><br><br>
                LOCATION:<input type="text" name="location"><br><br>
                <textarea style="height: 100;width: 300;">ADDITIONAL INFORMATION...</textarea><br><br>
                <input id ="collab1" type="button" value="Start"/>
            </form>
            <p id="collab2"></p>
        </div>
        <div id="JOIN" class="tabcontent">
                <div class="req">
                        <img src="images.png" width="90px" height="100px" style="opacity:1;"/>
                        <span style="position:absolute;left:120px;top:200px;">Name: <span>Pattern Recognition Project</span></span>
                        <span style="position:absolute;left:120px;top:230px;">Participants: <span>Tom Cruise, Angelina Jolie, Ezra Miller</span></span>
                        <a href="#"><div class="but" style="position:absolute;left:1120px;top:205px;">JOIN</div></a>
                </div>
                <br/>
                <div class="req">
                        <img src="images.png" width="90px" height="100px" style="opacity:1;"/>
                        <span style="position:absolute;left:120px;top:320px;">Name: <span>Bangalore Newsletter Editorial</span></span>
                        <span style="position:absolute;left:120px;top:350px;">Participants: <span>Ryan Reynolds, Tom Cruise, Benedict Cumberbatch</span></span>
                        <a href="#"><div class="but" style="position:absolute;left:1120px;top:325px;">JOIN</div></a>
                </div>
                <br/>
                <div class="req">
                        <img src="images.png" width="90px" height="100px" style="opacity:1;"/>
                        <span style="position:absolute;left:120px;top:440px;">Name: <span>Diwali Play</span></span>
                        <span style="position:absolute;left:120px;top:470px;">Participants: <span>Ezra Miller, Bradley Cooper, Angelina Jolie</span></span>
                        <a href="#"><div class="but" style="position:absolute;left:1120px;top:445px;">JOIN</div></a>
                </div>
                <br/>
                <div class="req">
                    <img src="images.png" width="90px" height="100px" style="opacity:1;"/>
                    <span style="position:absolute;left:120px;top:560px;">Name: <span>PES Photo Series</span></span>
                    <span style="position:absolute;left:120px;top:590px;">Participants: <span>Bradley Cooper, Benedict Cumberbatch</span></span>
                    <a href="#"><div class="but" style="position:absolute;left:1120px;top:565px;">JOIN</div></a>
                </div>
                <br/>
        </div>
        <script type="text/javascript">
            currentTab = "1";
            let divMap = {"1":"START", "2":"JOIN"};
            function opentab(clickedButton) {
                currentTab = clickedButton.id;
                const tabElements = document.getElementsByClassName("tabcontent");
                const tabLinks = document.getElementsByClassName("tablink");
                for(let tabElement of tabElements){
                    if(tabElement.id == divMap[currentTab]){
                        tabElement.style.display="block"; 
                    }
                    else 
                        tabElement.style.display="none";
                }
                for(let tabLink of tabLinks){
                    tabLink.classList.remove("active");
                    if(tabLink.id == currentTab){
                        tabLink.classList.add("active");
                    }
                }
            }
            var a=document.getElementsByClassName("but");
            for(i=0;i<a.length;i++)
            {
                a[i].addEventListener("click",fun);
            }
            function fun() {
                for(i=0;i<a.length;i++)
                {
                    if(this==a[i]) break;
                }
                a[i].innerHTML="Joined";
                a[i].style.width="120px";
                a[i].style.backgroundColor="crimson";
                a[i].style.borderColor="crimson";
            }
            var b=document.getElementById("collab1");
            b.addEventListener("click",fun1);
            function fun1(){
            var c=document.getElementById("collab2");
            document.getElementById("myForm").reset();
            c.innerHTML="Thank you for submitting the details, good luck on the collaboration!";
            }
        </script>
    </body>
</html>