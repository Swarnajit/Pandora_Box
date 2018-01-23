
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$host="localhost";
$username="root";
$password="tiger";
$dbname="bookshare";
$choice1=$_GET["hideed"]; //coming from order.php
//$choice=$_GET["show"]; //value comes from videos.php
$conn=  mysqli_connect($host, $username, $password, $dbname) or die("Cann not connect to database");
$sqlquery="select * from bookinfo where book_ID='".$choice1."'";
$result= $conn->query($sqlquery);
 //mysqli_query($conn,$sqlquery);
//$row = mysql_fetch_assoc($result); 
$num=mysqli_num_rows($result);
    ?>
