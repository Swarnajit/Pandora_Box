
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$host="localhost";
$username="root";
$password="tiger";
$dbname="bookshare";
$choice=$_POST["number"]; //value comes from videos.php
$conn=  mysqli_connect($host, $username, $password, $dbname) or die("Cann not connect to database");
$sqlquery="select user_name,user_id from people where phone='".$choice."'";
$result= $conn->query($sqlquery);
 //mysqli_query($conn,$sqlquery);
//$row = mysql_fetch_assoc($result); 
$num=mysqli_num_rows($result);
if($num==0)
    echo '<html>'
    . '<body>'
        . '<input id="inputPhone" name="inputPhone" class="form-control" placeholder="Phone Number" autocomplete="off" required>'
        .'</body>'
        .'</html>';
    else {
        while($row = mysqli_fetch_assoc($result)) 
        {
        $_SESSION["Name"]=$row['user_name'];
        $_SESSION["id"]=$row['user_id'];
        //echo $_SESSION["id"];
        //echo $_SESSION["Name"];
        header("Location: index.php");
        //exit();

        }
    } 
    ?>
