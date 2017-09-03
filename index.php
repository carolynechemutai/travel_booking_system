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
   <title>Travel Booking</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">	
    <link href="css/style.css" rel="stylesheet">
	 <?php
    //Start session
    session_start();	
    //Unset the variables stored in session
    unset($_SESSION['SESS_MEMBER_ID']);
    unset($_SESSION['SESS_FIRST_NAME']);
    unset($_SESSION['SESS_LAST_NAME']);
    ?>
  </head>
  <body>
  <div class="container">
    <div id ="banner"><marquee><h1>Welcome to UN Travel Booking System</h1></marquee></div>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Travel Booking</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="index.php">Registred User</a></li>
      <li><a href="headofunit.php">Head of Unit</a></li>
      <li><a href="logout.php">Log Out</a></li>
    </ul>
  </div>
</nav>

<div class="jumbotron">

    <form name="loginform" action="mylogin.php" method="post">
    <table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
    <tr>
    <td colspan="2">
    <!--the code bellow is used to display the message of the input validation-->
    <?php
    if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
    echo '<ul class="err">';
    foreach($_SESSION['ERRMSG_ARR'] as $msg) {
    echo '<li>',$msg,'</li>';
    }
    echo '</ul>';
    unset($_SESSION['ERRMSG_ARR']);
    }
    ?> 
	</td>
    </tr>
    <tr>
    <td width="116"><div class="form-group" align="right">Username</div></td>
    <td width="177"><input name="username" type="text"class="form-control"placeholder ="User Name"/></td>
    </tr>
    <tr>
    <td><div class="form-group" align="right">Password</div></td>
    <td><input class="form-control"name="password" type="password"placeholder ="User Name" /></td>
    </tr>
    <tr>
    <td><div align="right">
      <label for="Submit"></label>
      <input name="Input" type="submit" value="login" class="btn btn-primary"/>
    </td>
    <td><input type="reset" name="Reset" value="Reset" id="Submit" class="btn btn-danger"/></td>
	<td><input type="submit" name="register" value="Register" id="register" class="btn btn-success"/></td>
    </div></tr>
    </table>
    </form>
	</div>
</body>
</html>