<?php
session_start();
// Array with names
require_once 'Database.php';
//$choice=$_GET["show"]; //value comes from videos.php
// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    $sqlquery="DELETE FROM `order_handler` WHERE book_id='".$q."' and user_id='".$_SESSION["id"]."'";
    $result= $conn->query($sqlquery);
    //$num=mysqli_num_rows($result);
    if(!$result ) {
               die('Could not delete data: ' . mysqli_error());
            }
        $hint="Deleted data successfully";
}
//mysqli_close($link)
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
echo $hint;
?>