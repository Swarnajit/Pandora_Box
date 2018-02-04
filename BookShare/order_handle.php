
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//session_start();
$host="localhost";
$username="root";
$password="tiger";
$dbname="bookshare";
$choice1=$_GET["hideed"]; //coming from order.php
//$lovely=$_GET["naaaice"];
//echo $choice1;
//echo $newchoice;
//$choice=$_GET["show"]; //value comes from videos.php
$conn=  mysqli_connect($host, $username, $password, $dbname) or die("Cann not connect to database");
$sqlquery="select * from bookinfo where book_ID='".$choice1."'";
$result= $conn->query($sqlquery);
 //mysqli_query($conn,$sqlquery);
//$row = mysql_fetch_assoc($result); 
$num=mysqli_num_rows($result); 
//if(strlen($newchoice)==6)
//{
  //  $preparequery="insert into order_handler(book_id,user_id,status,order_date) values ('$choice1','$newchoice')";
    //$newresult=$conn->query($preparequery);
   // echo "naaaaice";
//}    
?>
