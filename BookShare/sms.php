<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
	
$choice=$_GET["number"];
echo $choice;
// Authorisation details.
        $username = "swarnajit.adhikary@yahoo.in";
	$hash = "785d12695cad87630211005397695fa8f0bd6d8238492a97de267dc8e6dde7f0";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "91".$choice; // A single number or a comma-seperated list of numbers
	$password= "A".rand(10, 20)."Z". rand(30, 40);
        $message = "Call me if you love me sweetheart ".$password;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".
	$hash."&message=".$message."&sender=".
	$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
        
        echo 'Sent sms to '.$choice."with message ".$message;
?>