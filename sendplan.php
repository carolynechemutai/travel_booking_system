<?php

$host="localhost";
$username ="root";
$pass= "";
$db = "travel";
$conn = mysqli_Connect($host,$username,$pass,$db);
//Getting values
$fullname="$_POST[fname]";
$institution="$_POST[inst]";
$Date_of_tavel="$_POST[dt]";
$Days_away="$_POST[days]";
$leave_days="$_POST[leave]";
$justification="$_POST[just]";
$project="$_POST[pro]";
$budget_line="$_POST[budget]";
$est_cost="$_POST[cost]";
$othercosts="$_POST[othercost]";
$department="$_POST[department]";
$quarter_applicable="$_POST[quarter]";
$totalallocation="$_POST[totalallocation]";
$regionaloffice="$_POST[regionaloffice]";
$communication="$_POST[communication]";
 //Creating an sql query
 $sql = "INSERT INTO travelplans VALUES ('$fullname','$institution','$Date_of_tavel','$Days_away','$leave_days','$justification','$project','$est_cost','$othercosts','$department','$quarter_applicable','$totalallocation','$regionaloffice','$communication')";
 
  //Executing query to database
 if(mysqli_query($conn,$sql)){
 echo 'Plan Send Successfully';
 }else{
 echo 'Could Not submit plan';
 }
 
 //Closing the database 
 mysqli_close($conn);
 }
?>