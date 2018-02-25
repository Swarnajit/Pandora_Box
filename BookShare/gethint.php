<?php
// Array with names
$host="localhost";
$username="root";
$password="tiger";
$dbname="bookshare";
//$choice=$_GET["show"]; //value comes from videos.php
$conn=  mysqli_connect($host, $username, $password, $dbname) or die("Cann not connect to database");
// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    $sqlquery="select Book_Name,Book_ID from bookinfo where Book_Name like '%".$q."%'";
    $result= $conn->query($sqlquery);
    $num=mysqli_num_rows($result);
    if($num==0)
        {
            $hint = "<a style='color: #b3d7ff'>No Suggestion</a>";;
            //exit;
        }
        else
        {
            while($row= mysqli_fetch_assoc($result))
            {
              $hint .= "<a href='order.php?hideed=".$row['Book_ID']."' style='color: #b3d7ff'>".$row['Book_Name']."</a><br/>";
            }
        }
}
 /*   foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = "<a style='color: #b3d7ff'>".$name."</a>";
            } else {
                $hint .= "<br/><a style='color: #b3d7ff'>".$name."</a>";
            }
        }
    }
}*/

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "<a style='color: #b3d7ff'>no suggestion</a>" : $hint;
?>