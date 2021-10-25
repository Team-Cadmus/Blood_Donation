<?php
    include 'profileUpload.php';
?>
<html lang="en-US">
<head>
  <title>Profile</title>
  <link rel="stylesheet" href="profile.css">
</head>
<body>
<ul class="top">
            <li class="l1"><a href="#"><img src="phonewhite.jpeg" id="logo0">&nbsp;XXXXX56951</a></li>
            <li class="l1"><a href="#"><img src="emailwhite.png" id="logo1">&nbsp;queries@teamcadmus.com</a></li>
        </ul><br>
        <ul>
            <li class="l2"><a href="after_login.php">Home</a></li>
            <li class="l2"><a href="login.php">Login</a></li>
            <li class="l2"><a href="searchdonor.php">Search donor</a></li>
        </ul><br><br><br>
  <div class="profile-input-field">
    <h3>User Profile</h3>
    <form method="post" action="profile.php" enctype="multipart/form-data">
      <div class="form-group">
        <img src="uploads/<?php echo $row['profileImage']; ?>" alt = "placeholder.png" id="profileDisplay" width="100" height = "100" style = "border-radius: 50%;" onclick="triggerClick()"/>
        <br>
        <label for="profileImage">Profile Image</label>
        <input type="file" name="profileImage" id="profileImage" style="display: none;" onchange="displayImage(this)">
      </div>

      <div class="form-group">
        <label>First Name</label>
        <input type="text" class="form-control" name="fname" placeholder="First Name" value="<?php echo $row['fname']; ?>" required />
      </div>
      <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control" name="lname" placeholder="Last Name" value="<?php echo $row['lname']; ?>" required />
      </div>
      <div class="form-group">
        <label>Gender</label>
        <input type="text" class="form-control" name="gender" placeholder="Gender" required value="<?php echo $row['gender']; ?>" />
      </div>
      <div class="form-group">
        <label>Age</label>
        <input type="number" class="form-control" name="age" placeholder="Age" value="<?php echo $row['age']; ?>">
      </div>
      <div class="form-group">
        <label>Blood Group</label>
        <input type="text" class="form-control" name="bloodGroup" placeholder="Blood Group" value="<?php echo $row['bloodGroup']; ?>" required />
      </div>
      <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control" name="address" required placeholder="Address" value="<?php echo $row['address']; ?>"></textarea>
      </div>
      <div class="form-group">
        <label>City</label>
        <input type="text" class="form-control" name="city" placeholder="City" value="<?php echo $row['city']; ?>" required />
      </div>
      <div class="form-group">
        <label>State</label>
        <input type="text" class="form-control" name="state" placeholder="State" value="<?php echo $row['state']; ?>" required />
      </div>
      <div class="form-group">
        <label>Contact</label>
        <input type="text" class="form-control" name="contact" placeholder="Contact Number" value="<?php echo $row['contact']; ?>" required />
      </div>
      <div class="form-group">
        <input type="submit" name="submit" class="btn" value="Update"><br><br>
        <a href="logout.php">Log out</a>
      </div>
    </form>
  </div>
  <script src="profileScript.js"></script>
</body>
</html>
