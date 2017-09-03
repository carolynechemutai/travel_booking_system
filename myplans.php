<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>   
   <title>Travel Booking | My Plans</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
  <div class="container">
    <div id ="banner"><marquee><h1>Welcome to UN Travel Booking System</h1></marquee></div>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">Travel Booking</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.html">Home</a></li>
      <li><a href="mostprefered.html">most prefered sites</a></li>
      <li><a href="booking.php">Create plan</a></li>
      <li><a href="myplans.php">my plans</a></li>
    </ul>
  </div>
</nav>

<div class="jumbotron">
<h3>Edit Your  Recently added Travel plans before sending them.</h3>
<form action=""method="post">
<p><input type="text" name="search"placeholder="search"class="form-control"><input type="submit"class="btn btn-primary"value="Search"></p>
<?php 
 $host="localhost";
$username ="root";
$pass= "";
$db = "travel";
$conn = mysqli_Connect($host,$username,$pass,$db);
 
 //Creating sql query
 $sql = "SELECT * FROM travelplans where Fullname like'$_POST[search]'||Institution like'$_POST[search]'";
 
 //getting result 
 $r = mysqli_query($conn,$sql);
 
 //creating a blank array 
 $result = array();
 echo"<table border='1'>
 <tr>
 <th>Fullname</th>
 <th>Institution</th>
 <th>venue</th>
 <th>Travel Date</th>
 <th>Days Away</th>
 <th>Leave Days</th>
 <th>Project</th>
 <th>Total Travel Budget</th>
 <th>Estmated Travel Cost</th>
 <th>Action</th>
 </tr>";
 //looping through all the records fetched
 while($row = mysqli_fetch_array($r)){
 echo "<tr><td>".$row['Fullname']."</td>";
 echo "<td>".$row['Institution']."</td>";
 echo "<td>".$row['venue']."</td>";
 echo "<td>".$row['Date_of_travel']."</td>";
 echo "<td>".$row['Days_away']."</td>";
 echo "<td>".$row['Leave_Days']."</td>";
 echo "<td>".$row['Project']."</td>";
 echo "<td>".$row['Total_Travel_Budget']."</td>";
 echo "<td>".$row['Estmated_Travel_Cost']."</td>";
 echo "<td>"."<button class='btn btn-danger'>"."Edit"."</button>"."<button class='btn btn-warning'>"."Email"."</button>"."</td>";
echo"</tr>";

 }
 echo"</table>";
 mysqli_close($conn);

?>
</form>
</div><br>

<div id ="banner">
<marquee><p>Designed by Carol Copyright @caroldesigns</p></marquee>
</div>
   </div>
  </body>
</html>