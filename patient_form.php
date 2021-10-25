<?php
session_start();
 $otp=rand(11111,99999);
 $_SESSION['otp']=$otp;

?>
<html>
	<head>
		<title>Patient Form</title>
        <script src="validation.js"></script>
        <script src = "cities.js"></script> 
        <link rel="stylesheet" href="donor_form.css">
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
        </ul><br><br><br>
        <form method = "POST" action="verify2.php">
        <label>First Name:</label>
        <input type="text" placeholder="*" name = "firstName"></input>
        <br><br>
        <label>Last Name:</label>
        <input type="text" placeholder="*" name = "lastName"></input>
        <br><br>
        <label>Gender:</label>
        <input type="radio" name="gender" value = "male" id = "male">Male</input>
        <input type="radio" name="gender" value = "female" id = "female">Female</input>
        <input type="radio" name="gender" value = "other" id = "other">Other</input>
        <br><br>
        <label>Date of Birth:</label>
        <input type="date" id="DOB" onchange="calculateAge()" name = "dob"></input>
        <br><br>
        <label>Age:</label>
        <input type="text" id="age" name="age"></input><br><br>
        <label>Blood Group:</label>
        <select  name = "bloodGroup">
        <option value="A +ve">A +ve</option>
                    <option value="A -ve">A -ve</option>
                    <option value="B +ve">B +ve</option>
                    <option value="B -ve">B -ve</option>
                    <option value="AB +ve">AB +ve</option>
                    <option value="AB -ve">AB -ve</option>
                    <option value="A1 +ve">A1 +ve</option>
                    <option value="A1 -ve">A1 -ve</option>
                    <option value="A2 +ve">A2 +ve</option>
                    <option value="A2 -ve">A2 -ve</option>
                    <option value="A1B +ve">A1B +ve</option>
                    <option value="A1B -ve">A1B -ve</option>
                    <option value="A2B +ve">A2B +ve</option>
                    <option value="A2B -ve">A2B -ve</option>
                    <option value="O +ve">O +ve</option>
                    <option value="O -ve">O -ve</option>
        </select>
        <br><br>
        <label>Address: </label>
        <textarea rows="1" cols="30" name = "address"></textarea>
        <br><br>
        <label>State: </label>
        <select onchange="print_city('state', this.selectedIndex);" id="sts" name ="state" class="form-control" required></select>
        <br><br>
        <label for="">City: </label>
        <select id ="state" class="form-control" name = "city" required></select>
        <script language="javascript">print_state("sts");</script>
        <br><br>
        <label >Contact Number: </label>
        <input id="phonenumber" type="tel" name = "phone"></input>
        <br><br>
        <label>Email ID: </label>
        <input type="email" id="email" name="email"></input>
        <br><br>
        <label>Password: </label>
        <input type="password" id="pass" placeholder="*" name = "pass">
        <br><br>
        <label>Confirm password: </label>
        <input type="password" name="conf_pass" id="conf_pass" placeholder="*" name = "cpass"><br><br>

        <input type="submit" id="sub" name="otp_send" value="Send OTP" onclick="JavaScript: return validator()">
        </form>     
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



