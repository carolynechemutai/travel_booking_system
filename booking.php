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
   <title>Travel Booking | Create Plan</title>

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
      <a class="navbar-brand" href="index.php">Travel Booking</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="mostprefered.html">Home</a></li>
      <li><a href="mostprefered.html">most prefered sites</a></li>
      <li><a href="booking.php">Create plan</a></li>
      <li><a href="myplans.php">my plans</a></li>
    </ul>
  </div>
</nav>

<div class="jumbotron">
<form action="sendplan.php"method="post">
<p class="help-block">Fill in the following Form To Book Your Trip.</p>
  <div class="form-group">
    <label for="fname">Full Name</label>
    <input type="text" class="form-control" id="fname" placeholder="Full Name">
  </div>
  <div class="form-group">
    <label for="inst">Meeting/ Institution</label>
    <input type="text" class="form-control" id="inst" placeholder="Meeting/ Institution" required>
  </div>
  <div class="form-group">
    <label for="venue">Venue</label>
    <input type="text" class="form-control" id="venue" placeholder="Venue"required>
  </div>
  <div class="form-group">
    <label for="dt">Date of Travel</label>
    <input type="Date" class="form-control" id="dt" placeholder="Date of Travel"required>
  </div>
  <div class="form-group">
    <label for="days">Days away/Mission Days</label>
    <input type="number" class="form-control"min="1"max="100" id="days" placeholder="Days Away/Mission Days"required>
  </div>
  <div class="form-group">
    <label for="leave">Leave Days</label>
    <input type="number" id="leave"min="1"max="100" class="form-control"placeholder="Leave Days"required>
    </div>
	<div class="form-group">
    <label for="just">Justification</label>
    <input type="text" id="just" class="form-control"placeholder="Justification"required>
    </div>
	 <div class="form-group">
    <label for="pro">Project</label>
    <input type="text" id="pro" class="form-control"placeholder="Project"required>
    </div>
	 <div class="form-group">
    <label for="budget">Budget line</label>
    <input type="number" id="budget"min="1"max="10000" class="form-control"placeholder="Budget Line"required>
    </div>
	<div class="form-group">
    <label for="cost">Estimated Travel Cost USD</label>
    <input type="number" id="cost"min="1"max="10000" class="form-control"placeholder="Estimated Travel Cost USD"required>
    </div>
	<div class="form-group">
    <label for="othercost">Additional Costs</label>
    <input type="number" id="othercost"min="1"max="10000" class="form-control"placeholder="Additional Costs"required>
    </div>
	<div class="form-group">
    <label for="percentage">Percentage of Travel Cost</label>
    <input type="number" id="othercost"min="1"max="10000" class="form-control"placeholder="Percentage of Travel Cost"required>
    </div>
	<div class="form-group">
    <label for="department">Department</label>
    <select id="department"class="form-control"placeholder="Department"required>
	<option>Management</option>
	<option>Human Resource</option>
	<option>Expetriates</option>
	<option>Research</option>
	<option>Others</option>	
	</select>
    </div>	
	<div class="form-group">
    <label for="quarter">Applicable Quarter</label>
    <input type="text" id="quarter" class="form-control"placeholder="Applicable Quarter"required>
    </div>
	<div class="form-group">
    <label for="totalallocation">Total Allocated Travel Budget for the Year</label>
    <input type="number" id="totalallocation"min="1"max="10000" class="form-control"placeholder="Total Allocated Travel Budget for the Year"required>
    </div>
	<div class="form-group">
    <label for="totalallocation">Travel Budget Balance as at(Give date and Figure)</label>
    <input type="number" id="totalallocation"min="1"max="10000" class="form-control"placeholder="Travel Budget Balance as at(Give date and Figure)"required>
    </div>
	 <div class="form-group">
    <label for="regionaloffice">Regional Office</label>
    <input type="text" id="regionaloffice" class="form-control"placeholder="Regional Office of Mission  Destination"required>
    </div>
<div class="form-group">
    <label for="communication">Communication Support Required</label>
    <input type="text" id="communication" class="form-control"placeholder="Communication Support Required"required>
    </div> 
  <button type="submit"" class="btn btn-primary">Submit</button>
  
  <button type="reset" class="btn btn-danger">Cancel</button>
</form>
</div><br>

<div id ="banner">
<marquee><p>Designed by Carol Copyright @caroldesigns</p></marquee>
</div>
   </div>
 	</script>
  </body>
</html>