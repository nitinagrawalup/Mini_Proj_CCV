
<!DOCTYPE html>
<html>
<head>
	<title>My New Responsive Website</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA_Compatible" content="IE=edge">
	<meta http-equiv="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
	<link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="CreateAcc.css">

	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>
<body>

	<header>
		<nav  id="header-nav" class="navbar navbar-default">
			<div class="container">
    			<div class="navbar-header">
    				<a href="#" class="pull-left visible-lg visible-md">
    					<div class="logo-img" >
    						<img src='https://akm-img-a-in.tosshub.com/sites/btmt/images/stories/bank_2_660x450_031219055726.jpg' alt="loading">
    					</div>
    				</a>
    				<div class="navbar-brand">
    					<a href="#"><h1 id="sm">My Bank</h1></a>
    				</div>

    					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapsable-nav">
					      <span class="icon-bar"></span>
					      <span class="icon-bar"></span>
					      <span class="icon-bar"></span>
					    </button>
    			</div>
    				<div id="collapsable-nav" class="collapse navbar-collapse">
					    <ul id="nav-list" class="nav navbar-nav navbar-right">
					      <li><a href="about.html">About</a></li>
					    </ul> 
  					</div> 
		</nav>
	</header> 
	
	<footer class="container">
		<h1>Create New Account</h1>
		<form onSubmit="return validation();" class="md-form" id="my_captcha_form" action="account1.php" method="POST" enctype="multipart/form-data" >
			<div class="form-group">
				<label id="label">First Name</label>
				<input  class="form-control" type="name" name="fname"  id="fname"  placeholder="Enter Name">
				<small>Use only letters.</small>
			</div>
			<div class="form-group">
				<label id="label">Last Name</label>
				<input class="form-control" type="name" name="lname"  id="lname"  placeholder="Enter Name">
				<small>Use only letters.</small>
			</div>
			<div class="form-group">
                <label id="label">Address</label>
                <input class="form-control" type="textarea" name="add" required id="add"  placeholder="Enter Address">
			</div>
			<div class="form-group">
				<label id="label">City</label>
				<input  class="form-control"  type="text" name="city" required id="city"  placeholder="Enter City Name">
				<small>Use only letters.</small>
			</div>
			<div class="input-group">
			<label id="label">Upload Photo</label>
			
				<input type="file" class="form-control" id="file" required id="inputGroupFile01" name="file"
				aria-describedby="inputGroupFileAddon01">
			</div>
			<br>

			<div class="form-group">
				<label id="label">Zip Code</label>
				<input  class="form-control" type="number" name="zip" required id="zip" maxlength="6"  placeholder="Enter Zip Code">
			</div>
			<div class="form-group">
				<label id="label">Username</label>
				<input  class="form-control" type="name" name="uname" required id="username"  placeholder="Create your own Username">
				<small>Use only letters.</small>
			</div>
			<div class="form-group  container col-sm-6">
				<label id="label">Password</label>
				<input  class="form-control" type="password" name="pass" required  id="pass" minlength="8" maxlength="16"  placeholder="Enter Password">
			</div>
			<div class="form-group container col-sm-6">
				<label id="label">Password</label>
				<input  class="form-control" type="password"  required id="pass1"  placeholder="Re-enter Password">
			</div>
			<div class="form-group">
				<label id="label">Phone Number</label>
				<input  class="form-control" type="number" name="num" required id="phone" maxlength="10"   placeholder="Enter Phone no">
			</div>
			<div class="form-group">
				<label id="label">Email Address</label>
				<input  class="form-control" type="email" name="email" required id="email"  placeholder="Enter Email Address">
			</div>
			<div class="form-group">
				<label id="label">Choose Account Type</label>
				<select class="form-control" name="acc" required  id="acctype" >
				  <option>Saving Account</option>
				  <option>Current Account</option>
				  <option>Personal Account</option>
				</select>
			  </div>

			<div class="form-group">
				<label id="label">Initial Amount</label>
				<input  class="form-control" type="number"  name="acc_bal"  id="acc_bal" minlength="3"  maxlength="5" placeholder="Enter Initial Amount" >
				<small>Amount should be Rs100 or more</small>
			</div>
			<div class="form-group ">
					<div class="g-recaptcha" 
				data-sitekey="6LeaL9sZAAAAANFtb6Wt162N_2d9_2gBn-fWX50j" 
				></div>
		</div>

		
            <div class="buton ">
                <button type="submit" class="btn btn-primary" name='submit' id="btn" value="submit">Submit</button>
            </div>

		</form>
		


	</footer>
    
	<script type="text/javascript">
		document.getElementById("my_captcha_form").addEventListener("submit",function(evt)
  {
  
  var response = grecaptcha.getResponse();
  if(response.length == 0) 
  { 
    //reCaptcha not verified
    alert("please verify you are humann!"); 
    evt.preventDefault();
    return false;
  }
  //captcha verified
  //do the rest of your validations here
  
});
	</script>
        
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<script src="create_acc_val.js"></script>


	
</body>

</html>