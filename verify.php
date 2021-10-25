<?php
session_start();
    
?>
<html>
    <head>
<link rel="stylesheet" href="donor_form.css">
</head>
    <body>
        
    <ul class="top">
            <li class="l1"><a href="#"><img src="phonewhite.jpeg" id="logo0">&nbsp;XXXXX56951</a></li>
            <li class="l1"><a href="#"><img src="emailwhite.png" id="logo1">&nbsp;queries@teamcadmus.com</a></li>
        </ul><br>
        <ul>
            <li class="l2"><a href="home.php">Home</a></li>
            <li class="l2"><a href="login.php">Login</a></li>
            <li class="l2"><a href="searchdonor.php">Search donor</a></li>
            
        </ul><br><br><br>
        <div id="myDropdown" class="dropdown-content">
                <a href="#">Edit Profile</a>
                <a href="#">Logout</a>
            </div> 
        <form method="POST" action="">
        <h2>Enter the otp sent to your email id</h2>
            <input type="text" style="font-size:18;padding:5px 5px;" name="otp" placeholder="enter otp here">
            <input type="submit" id="sub" name="verification" value="Submit OTP">
</form>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

function smtp_mailer($to,$subject,$msg){

    $mail=new PHPMailer(true);
$mail->SMTPDebug = 0; //SMTP::DEBUG_SERVER;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'XXXXXXX@gmail.com';                     //SMTP username (DETAILS HIDDEN DUE TO PRIVACY ISSUES)
$mail->Password   = 'XXXXXXXXXXXXX';                               //SMTP password (DETAILS HIDDEN DUE TO PRIVACY ISSUES)
$mail->SMTPSecure =  'TLS';//PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
$mail->Port       = 587;                //465;  

$mail->setFrom('XXXXXXXXXXXX@gmail.com');
$mail->addAddress($to);     //Add a recipient
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = $subject;
$mail->Body    = $msg;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();
if(!$mail->Send()){
    return 0;
}
else{
    return 1;
}
}
if(isset($_POST['otp_send'])){
    $_SESSION['fname']=$_POST["fname"];
 
 $_SESSION['lname']=$_POST['lname'];
 $_SESSION['age']=$_POST["age"];
 $_SESSION['gender']=$_POST["gender"];
 $_SESSION['address']=$_POST["address"];
 $_SESSION['dob']=$_POST["dob"];
 $_SESSION['city']=$_POST["city"];
 $_SESSION['bloodgroup']=$_POST["blood_group"];
 $_SESSION['predonated']=$_POST["predonated"];
 $_SESSION['donate_value']=$_POST["donate_value"];
 $_SESSION['problem']=$_POST["problem"];
 $_SESSION['desc']=$_POST["yes_problem"];
 $_SESSION['state']=$_POST["state"];
 $_SESSION['contact']=$_POST["contact"];
 
 $_SESSION['pass1']=md5($_POST["pass"]); 
 $_SESSION['pass2']=md5($_POST["conf_pass"]);
    $_SESSION['email']=$_POST["email"];

    

 
    $email=$_SESSION['email'];
    $html="Your otp verification code is ".$_SESSION['otp'];
    smtp_mailer($_SESSION['email'],'OTP Verification',$html);
    }
    
if(isset($_POST['verification'])){
    $name=$_SESSION['fname'];
 $lname=$_SESSION['lname'];
 $age=$_SESSION['age'];
 $gender=$_SESSION['gender'];
 $address=$_SESSION['address'];
 $dob=$_SESSION['dob'];
 $city=$_SESSION['city'];
 $bloodgroup=$_SESSION['bloodgroup'];
 $donates=$_SESSION['predonated'];
 $donatedvalue=$_SESSION['donate_value'];
 $problem=$_SESSION['problem'];
 $problemdesc=$_SESSION['desc'];
 $state=$_SESSION['state'];
 $contact=$_SESSION['contact'];
 $email=$_SESSION['email'];
 $pass=$_SESSION['pass1']; 


    if($_SESSION['otp']==$_POST['otp']){
        //echo $name.$lname.$age.$gender;
        include("connection_project.php");
        $db=new connection_project();
        $conn=$db->connect();
        $res=mysqli_query($conn,"insert into donor(contact,fname,lname,age,gender,bloodGroup,donatedBefore,problem,donatedWhat,descProblem,address,city,state,email,password,dob) values('$contact','$name','$lname','$age','$gender','$bloodgroup','$donates','$problem','$donatedvalue','$problemdesc','$address','$city','$state','$email','$pass','$dob')");
        if($res){
            
            echo '<script>alert("Details inserted successfully!!")</script>';
            session_destroy();
        }
        else{
            echo '<script>alert("Some error")</script>';
            echo mysqli_connect_error();
        }
       
    }
    else{
        echo "otp does not match";
    }
}
?>
</body>
</html>