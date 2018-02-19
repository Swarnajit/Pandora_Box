
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
$choice=$_REQUEST["number"]; //value comes from videos.php
$pass=$_REQUEST["password1"]; //value comes from videos.php
$conn=  mysqli_connect($host, $username, $password, $dbname) or die("Cann not connect to database");
$sqlquery="select fname,user_id from people where phone='".$choice."' and password='".$pass."'";
$result= $conn->query($sqlquery);
 //mysqli_query($conn,$sqlquery);
//$row = mysql_fetch_assoc($result); 
$num=mysqli_num_rows($result);
$flag=0;
if($num==0)
{
    //echo 'Invalid phone number password combination';
    $flag=1;
    
}
        else {
        while($row = mysqli_fetch_assoc($result)) 
        {
        $_SESSION["Name"]=$row['fname'];
        $_SESSION["id"]=$row['user_id'];
        //echo $_SESSION["id"];
        //echo $_SESSION["Name"];
        //header("Location: index.php");
        //exit();
        $flag=2;
        }
    } 
    echo $flag === 1 ? : $flag;
    ?>
