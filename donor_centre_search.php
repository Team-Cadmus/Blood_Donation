<html>
    <head>
        <title>
            Welcome user
        </title>
        <link rel="stylesheet" href="style1.css">
        <style>
            .btn{
                text-decoration: none;
                padding: 5px;
                border: 2px solid transparent;
                border-radius: 5px;
                font-weight: bold;
                letter-spacing: 1px;
                transition: transform .4s;
            }
            .btn:hover{
                transform: scale(1.15);
            }
            .table{
                transition: transform .4s;
            }
            .table:hover {
                transform: scale(1.1);
                background-color: brown;
                color: white;
            }
            tr:hover{
                background-color: white;
                color: brown;
            }
            .noeffecttaleheader{
                background-color:brown;
                color:white;
                opacity:0.9;
            }
            .noeffecttaleheader:hover{
                background-color: brown;
                color: white;
                opacity:1;
            }
        </style>
        <script src = "cities.js"></script> 
    </head>
    <body>
        <!--<header>
            <img id="img1" src="blood_donation.jpg">
        </header>-->
        <ul class="top">
            <li class="l1"><a href="#"><img src="phonewhite.jpeg" id="logo0">&nbsp;XXXXX56951</a></li>
            <li class="l1"><a href="#"><img src="emailwhite.png" id="logo1">&nbsp;queries@teamcadmus.com</a></li>
        </ul>
        <ul>
            <li class="l2"><a href="home.html">Home</a></li>
            <li class="l2"><a href="login.php">Login</a></li>
            <li class="l2"><a href="searchdonor.php">Search donor</a></li>
        </ul>
        <main>
            <!--<aside class="left">
                Welcome user<br>
                <a href="#">Search Donor</a><br>
                <a href="#">Donor registration</a>
            </aside>-->
            
                <h2>Search a Donor in your area</h2><br>
                <form  method="POST">
                    <label>State: </label>
                    <select onchange="print_city('state', this.selectedIndex);" id="sts" name ="state" class="form-control" required></select>
                    <label for="">City: </label>
                    <select id ="state" class="form-control" name = "city" required></select>
                    <script language="javascript">print_state("sts");</script>    
                    <button id="search" class="btn" value="submit" name="submit">Search</button>
                </form>
                <?php
                    if(isset($_POST['submit'])){
                        //if(isset($_POST['state']) && isset($_POST['city'])){
                            include("connection_project.php");
                            $db=new connection_project();
                            $conn=$db->connect();
                            $conn=mysqli_connect($hostname,$username,$password,$database);
                            //$conn = mysqli_connect("localhost","root","root","Web_Programming");
                            if($conn){
                                $type=trim($_POST['state']);
                                $city=trim($_POST['city']);
                                echo $city.",".$type;   
                                $resultset=mysqli_query($conn,"select bloodbank,address,pincode,email,website from donor_centres where state='$type' and city='$city'");
                                //print_r($resultset);
                                $rowcount=mysqli_num_rows($resultset);
                                //echo $rowcount;
                                if($rowcount >0){
                                    echo "<table class='table' border='1'  border-radius:30px; align='center' style='margin-top: 30px; width:80%; border'>
                                    <tr>
                                            <th colspan = '5' class='noeffecttaleheader' style='padding-top: 15px;font-size: 1.2em;font-weight: bold;text-shadow: 2px 2px 2px #222;line-height:0.75;'><h2> Donation Centres</h2></th>
                                        </tr>
                                        <tr>
                                            <th style='padding:15px;'>Blood Bank Name</th>
                                            <th style='padding:15px;'>Address</th>
                                            <th style='padding:15px;'>Pincode</th> 
                                            <th style='padding:15px;'>Email</th> 
                                            <th style='padding:15px;'>Website</th> 
                                        </tr>";
                                        /*
                                        $c=mysqli_fetch_all($resultset, MYSQLI_ASSOC);
                                        print_r($c);*/
                                        while($row = mysqli_fetch_row($resultset)){
                                            echo "<tr>";
                                            echo "<td style='padding:15px;'>".$row[0]."</td>";
                                            echo "<td style='padding:15px;'>".$row[1]."</td>";
                                            echo "<td style='padding:15px;'>".$row[2]."</td>";
                                            echo "<td style='padding:15px;'>".$row[3]."</td>";
                                            echo "<td style='padding:15px;'>".$row[4]."</td>";
                                            echo "</tr>";   
                                            
                                        }
                                        echo "</table>";
                                    }
                                    else if($rowcount==0){
                                        $message="No centre found in $city";
                                        echo "<script>alert('$message');</script>";
                                    }
                                    //mysqli_free_result($resultset);
                                }
                                mysqli_free_result($resultset);
                            //}
                    }
                ?>
               
            
        </main>
    </body>
</html>