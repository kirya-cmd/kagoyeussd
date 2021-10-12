<?php 
header("content-type:text/plane");

$phone_number = $_POST['phoneNumber'];

$textFromUser =  $_POST['text'];

$sessionID = $_POST['sessionid'];

$serviceCode = $_POST['serviceCode'];

echo "CON welcome to KAGOYE SACCO" \n;
echo "What would you want to check \n";  

if ($textFromUser == ""){
//This is the first request> Note how we start the response with CON

echo "1. My account No \n";
echo "2. My Phone Number";

} 
else if($textFromUser == "1"){
//Business logic for the first level response
echo "Choose account information you want to view \n";
echo "1. Account Number \n";
echo "2. Account Balance";

} else if($textFromUser == "2"){
//Business logic for the first level response
//This is a terminal request> Note how we start the response with END
echo "END Your phone number is ".$phoneNumber;

}else if ($textFromUser == "1*1"){
//this is a second level response where the user selected 1 in the first instance
$accountNumber = "ACC1001";

//This is a terminal request. note how we start with END
$response = "END Your account Number is".$accountNumber;

}else if ($textFromUser = "1*2"){
//This is a second level response where the user selected 1 in the first instance
$balance = "ugs 10,000";
//this is a terminal request. Note how we start with END
echo "END Your balance is".$balance;
}
