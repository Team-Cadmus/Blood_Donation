<?php
include 'connection_project.php';
$db=new connection_project();
$conn=$db->connect();
session_start();
if(isset($_SESSION['id'])){
$id=$_SESSION['id'];
$query=mysqli_query($conn,"SELECT * FROM patient where email='$id'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
}
?>
<html>
    <head>
        
        
        <link rel="stylesheet" href="image_block.css">
        <link rel="stylesheet" href="donor_form.css">
        <title>
            Home
        </title>
        
    </head>
    <body>
    <ul class="top">
            <li class="l1"><a href="#"><img src="phonewhite.jpeg" id="logo0">&nbsp;XXXXX56951</a></li>
            <li class="l1"><a href="#"><img src="emailwhite.png" id="logo1">&nbsp;queries@teamcadmus.com</a></li>
        </ul>
        <ul>
            <li class="l2"><a href="home.php">Home</a></li>
            <li class="l2"><a href="login.php">Login</a></li>
            <li class="l2"><a href="searchdonor.php">Search donor</a></li>
            <li class="l2"><a href="profile.php">Edit profile</a></li>
            <li>
            <form id="image_display" method="post" action="after_login.php" enctype="multipart/form-data">
            <div class="dropdown">
            <img src="uploads/<?php echo $row['profileImage']; ?>" alt="placeholder.png" id="profileDisplay" width=30 height=30 style="border-radius:50%;float:right" onclick="myFunction()">
            
            </div> 
            <br>
        </form>

            </li>
        </ul><br><br><br>
        <div id="myDropdown" class="dropdown-content">
                <a href="profile.php">Edit Profile</a>
                <a href="#">Logout</a>
            </div> 
            <script>
                function myFunction(){
                document.getElementById("myDropdown").classList.toggle("show");
            }
            
            </script>
        <script src="profileScript.js"></script>
        
        <main>
            We are here to help the community. 
        </main>
        <aside class="left_subimg">
            <br>
            <div class="inimg_whiteblock">
                <h1 class="heading1">Can I Donate Blood?</h1>
                <p class="p1_18_75" >Are you 18-75 years old, healthy and weigh over 50 kg? Find out if you can donate blood, and start changing lives.</p>
                <form class="eligibility_form" method="POST" action="test1.html">
                    <input  class="btn_eligibilty" type="submit" id="test"  name="test" value="Take the eligibility quiz">
                </form>
            </div>
        </aside>
        <div class="donor_centre_highlight" style="height:500px;text-align:center;border-radius:15px;background-color:rgba(250, 94, 94,0.75);width:400px;margin:auto;margin-top:50px;">
            <a href="donor_centre_search.php" style="text-decoration: none;">
                <img src="donor_centre.jpg" width="400" height="250" style="opacity:0.9;"></img>
            </a>
            <h3>List of Blood Donation Centre</h3>
            <p class="centres_block" style="color:white;font-family:cursive;">Find the closest blood donation centre near you!</br></br>
            Donate Blood and save a life!</p>
        </div>
        <br><br>
        <div class="footer">
            <div class="footer-content">
                <div class="footer-section about">
                    <h1 class="logo-text">
                        <span>Blood</span>Donation
                    </h1>
                    <p>
                        BloodDonation is a website aiming to connect people who are in need of a help
                        by making the best use of technology!!
                    </p>
                    <img src="phonewhite.jpeg" id="logo0">&nbsp;XXXXX56951
                    <img src="emailwhite.png" id="logo1">&nbsp;queries@teamcadmus.com
                </div>
                <div class="footer-section address">
                    <h1>Address</h1>
                            Mukesh Patel Technolgy Park, <br>
                            Village: Babulde, Bank of Tapi River, <br>
                            National Highway No: 3, Shirpur. <br>
                            Pin Code: 425405. <br>
                            Dist. Dhule, Maharashtra, India.

                </div>
                <div class="footer-section">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3717.6621167249236!2d74.8422806143924!3d21.284838284363822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdf2dfec2f03403%3A0xf2ba0e2634eda3a1!2sMukesh%20Patel%20School%20of%20Technology%20Management%20%26%20Engineering%2C%20Shirpur!5e0!3m2!1sen!2sin!4v1634288163194!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            
            </div>
            <div class="footer-bottom">
                &copy; teamcadmus.com | Designed by Team Cadmus
            </div>
        </div>
    </body>
</html>