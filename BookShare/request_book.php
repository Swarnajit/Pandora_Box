
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
if(isset($_GET["hideed"]))
{    
    $choice1=$_GET["hideed"]; //coming from order.php
    if(isset($_SESSION["Name"]))
    {    
        $lovely=$_GET["pagla"];
//echo $choice1;
//echo $lovely;
$status="passed";
//echo date_default_timezone_get();
$mydate=getdate(date("U"));
echo "$mydate[month]-$mydate[mday]-$mydate[year]";
//$date= "03-02-2018";
//echo $date;
//$choice=$_GET["show"]; //value comes from videos.php
$conn=mysqli_connect($host, $username, $password, $dbname) or die("Cann not connect to database");
$sqlquery="insert into order_handler (book_id,user_id,status,order_date) values ('$choice1','$lovely','$status','Feb-$mydate[mday]-$mydate[year]')";
$result= $conn->query($sqlquery);
if($result==TRUE)
    echo 'your order is confirmed';
 //mysqli_query($conn,$sqlquery);
//$row = mysql_fetch_assoc($result); 
//$num=mysqli_num_rows($result); 
//if(strlen($newchoice)==6)
//{
  //  $preparequery="insert into order_handler(book_id,user_id,status,order_date) values ('$choice1','$newchoice')";
    //$newresult=$conn->query($preparequery);
   // echo "naaaaice";
//}    
}
else
    echo 'page not found';
}
else
    include 'SignUp.php';//............................Page Not found Error 404
?>
