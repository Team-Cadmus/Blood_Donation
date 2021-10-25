<?php
    include("connection_project.php");
    $db=new connection_project();
    $con=$db->connect();
    $con=mysqli_connect($hostname,$username,$password,$database);
    set_time_limit(10000);
    if(isset($_POST['submit'])){
        if($_FILES['file']['name']){
            $filename = explode('.',$_FILES['file']['name']);
            if($filename[1] == "csv"){
                $handle = fopen($_FILES['file']['name'],'r');
                while($data = fgetcsv($handle)){
                    $item1 = mysqli_real_escape_string($con,$data[0]);
                    $item2 = mysqli_real_escape_string($con,$data[1]);
                    $item3 = mysqli_real_escape_string($con,$data[2]);
                    $item4 = mysqli_real_escape_string($con,$data[3]);
                    $item5 = mysqli_real_escape_string($con,$data[4]);
                    $item6 = mysqli_real_escape_string($con,$data[5]);
                    $item7 = mysqli_real_escape_string($con,$data[6]);
                    $item8 = mysqli_real_escape_string($con,$data[7]);
                    $item9 = mysqli_real_escape_string($con,$data[8]);
                    $item10 = mysqli_real_escape_string($con,$data[9]);
                    $item11 = mysqli_real_escape_string($con,$data[10]);
                    $item12 = mysqli_real_escape_string($con,$data[11]);
                    $item13 = mysqli_real_escape_string($con,$data[12]);
                    $item14 = mysqli_real_escape_string($con,$data[13]);
                    $item15 = mysqli_real_escape_string($con,$data[14]);
                    $item16 = mysqli_real_escape_string($con,$data[15]);
                    $item17 = mysqli_real_escape_string($con,$data[16]);
                    $item18 = mysqli_real_escape_string($con,$data[17]);
                    $item19 = mysqli_real_escape_string($con,$data[18]);
                    $item20 = mysqli_real_escape_string($con,$data[19]);
                    $item21 = mysqli_real_escape_string($con,$data[20]);
                    $item22 = mysqli_real_escape_string($con,$data[21]);
                    $item23 = mysqli_real_escape_string($con,$data[22]);
                    $item24 = mysqli_real_escape_string($con,$data[23]);
                    $item25 = mysqli_real_escape_string($con,$data[24]);
                    $item26 = mysqli_real_escape_string($con,$data[25]);
                    $item27 = mysqli_real_escape_string($con,$data[26]); 
                    $sql_qry = "INSERT INTO donor_centres VALUES ('$item1', '$item2','$item3','$item4','$item5','$item6','$item7','$item8','$item9','$item10','$item11','$item12','$item13','$item14','$item15','$item16','$item17','$item18','$item19','$item20','$item21','$item22','$item23','$item24','$item25','$item26','$item27');";   
                    mysqli_query($con,$sql_qry);
                }
                fclose($handle);
                print("Import done");
            }
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <p>upload csv
                <input type="file" name="file"></input>
            </p>
            <p>
                <input type="submit" name="submit" value="Import"></input>
            </p>
        </form>
    </body>

</html>