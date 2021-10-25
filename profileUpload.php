<?php
  include 'connection_project.php';
  $db=new connection_project();
  $conn=$db->connect();
  session_start();
  $id=$_SESSION['id'];
  $query=mysqli_query($conn,"SELECT * FROM patient where email='$id'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
?>
<?php
/*$imageName = time() . basename($_FILES["profileImage"]["name"]);
$target_file = "uploads/" . $imageName;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  

if(isset($_POST['submit'])){

  $check = getimagesize($_FILES["profileImage"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }*/
?>

<?php
  //}   
 // Check if file already exists
/*if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}*/

// Check file size
if(isset($_POST['submit'])){
  $imageName = time() . basename($_FILES["profileImage"]["name"]);
$target_file = "uploads/" . $imageName;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
$check = getimagesize($_FILES["profileImage"]["tmp_name"]);
if($check !== false) {
  echo "File is an image - " . $check["mime"] . ".";
  $uploadOk = 1;
} else {
  echo "File is not an image.";
  $uploadOk = 0;
}

if ($_FILES["profileImage"]["size"] > 100000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["profileImage"]["name"])). " has been uploaded.";
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $bloodGroup = $_POST['bloodGroup'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $contact = $_POST['contact'];
    $query = "UPDATE patient SET fname = '$firstName', lname = '$lastName', gender = '$gender', age = $age, bloodGroup = '$bloodGroup',address = '$address', state = '$state', city = '$city', contact = '$contact', profileImage = '$imageName' WHERE email = '$id'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    header("refresh: 1");

  } else {
    echo "Sorry, there was an error uploading your file.";
    
  }
}
}
?>