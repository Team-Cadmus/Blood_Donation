<html lang="en-US">
  <head>
  <title>Log In</title>
  <link rel="stylesheet" href="login.css">
  
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
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>LOGIN</h3>
            <p>Please enter your credentials to login.</p>
          </div>
        </div>
      
        <form class="login-form" method = "post" action = "#">
          <input type="text" placeholder="username" name="user" required />
          <input type="password" placeholder="password" name="pass"required />
          <button type="submit" name="submit">login</button>
          <p class="message">
            Not registered? 
            <br>
            
            <a href="patient_form.php">Register as a patient</a>
          </p>
        </form>
      </div>
    </div>
</body>
</body>
</html>
        <?php
        session_start();
        include 'connection_project.php';
        $db=new connection_project();
        $conn=$db->connect();
        if(isset($_POST['submit'])){
        $email = $_POST['user'];
        $password = $_POST['pass'];
        $query=mysqli_query($conn,"SELECT * FROM patient WHERE email = '$email' AND password = '$password'");
        $num_rows=mysqli_num_rows($query);
        $row=mysqli_fetch_array($query);
        $_SESSION["id"]=$row['email'];
        if ($num_rows>0)
        {
        ?>
        <script>
        alert('Successfully Log In');
        document.location='after_login.php'
        </script>
        <?php
    }
}
      ?>