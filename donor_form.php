<?php
session_start();
 $otp=rand(11111,99999);
 $_SESSION['otp']=$otp;

?>
<!DOCTYPE HTML>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<title>Donor form</title>
        <script src="validation.js"></script>
        <script src="cities.js"></script>
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
        <form method="POST" action="verify.php"> 
            <div>
                <label>First Name:</label>
                <input type="text" name="fname" placeholder="*" required></input>
            </div>
            <br>

            <div>
                <label>Last Name:</label>
                <input type="text" name="lname" placeholder="*" required></input>
            </div>
            <br>

            <div>
                <label>Age:</label>
                <input type="tel" name="age" id="age"></input>
            </div>
            <br>
            <div>
                <label>Gender:</label>
                <input type="radio" value="Male" name="gender">Male</input>
                <input type="radio" value="Female" name="gender">Female</input>
                <input type="radio" value="other" name="gender">Other</input>
            </div>
            <br>
            <div>
                <label>Date of Birth:</label>
                <input type="date" name="dob" id="DOB" onchange="calculateAge()" required></input>
            </div>
            <br>
            <div>
                <label>Blood Group:</label>
                <select name="blood_group" >
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
            </div>
            <br>
            <div>
                <label>Have you donated blood before? </label>
                <input type="radio" value="Yes" name="predonated">Yes</input>
                <input type="radio" value="No" name="predonated">No</input>
            </div>
            <br>
            <div>
                <label>If yes, what did you donate last time?</label>
                <input type="radio" value="Plasma" name="donate_value">Plasma</input>
                <input type="radio" value="Platelets" name="donate_value">Platelets</input>
                <input type="radio" value="Red Cells" name="donate_value">Red Cells</input>
                <input type="radio" value="Whole Blood" name="donate_value">Whole Blood</input>
                <input type="radio" value="None" name="donate_value">None</input>
            </div>
            <br>
            <div>
                <label>Did you encounter any problem in your last donation? </label>
                <input type="radio" value="Yes" name="problem">Yes</input>
                <input type="radio" value="No" name="problem">No</input>
            </div>
            <br>
            <div>
                <label>If yes, what was the problem?</label>
                <input type="radio" value="Fainting" name="yes_problem">Fainting</input>
                <input type="radio" value="Bruise" name="yes_problem">Bruise</input>
                <input type="radio" value="Difficulty in finding vein" name="yes_problem">Difficulty in finding vein</input>
                <input type="radio" value="Other blood" name="yes_problem">Other Blood</input>
                <input type="radio" value="None" name="yes_problem">None</input>
            </div>
            <br>
            <div>
                <label>Address: </label>
                <textarea name="address" rows="2" cols="30" required></textarea>
            </div>
            <br>
            <label>State: </label>
        <select onchange="print_city('state', this.selectedIndex);" id="sts" name ="state" class="form-control" required></select>
        <br><br>
        <label for="">City: </label>
        <select id ="state" class="form-control" name = "city" required></select>
        <script language="javascript">print_state("sts");</script>
        <br><br>
            <div>
                <label>Contact Number: </label>
                <input name="contact" id="phonenumber" type="tel" required></input>
            </div>
            <br>
            <div>
                <label>Email ID: </label>
                <input name="email" id="email" type="email" required></input>
            </div>
            <br>
            <label>Password: </label>
        <input type="password" name="pass" id="pass"  placeholder="*" required>
        <br><br>
        <label>Confirm password: </label>
        <input type="password" name="conf_pass" id="conf_pass" placeholder="*" required><br><br>
        <!--<label>Enter OTP: </label>
        <input type="text" name="otp_text" placeholder="*enter otp"><br><br>
        <input type="submit" name="submit" id="sub">-->
        <input type="submit" id="sub" name="otp_send" value="Send OTP" onclick="JavaScript: return validator()">
        </form> <br><br>
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
        <!--<footer>
            
            <u style="color:lightpink">Contact number</u>: (+91) XXXXX56951<br>
            <u style="color:lightpink">Email id</u>: queries@teamcadmus.com<br>
            <u style="color:lightpink">Address</u>:   Mukesh Patel Technolgy Park, <br>
                        Village: Babulde, Bank of Tapi River, <br>
                        National Highway No: 3, Shirpur. <br>
                        Pin Code: 425405. <br>
                        Dist. Dhule, Maharashtra, India.

            
        </footer>-->
        
    </body>
</html>