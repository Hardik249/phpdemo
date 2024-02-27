<!DOCTYPE html>
<html lang="en">
<head>
	<!-- <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

	<title>Signup</title> -->
</head>
<body>
	<div class="card" style="width: 18rem;margin-left: 35%;margin-top: 5%;">
	  <div class="card-body">
	    <!-- <h5 class="card-title">Card title</h5> -->
	    <form method="POST" action="insert.php">
		  <div class="mb-3">
		    <label for="exampleInputfName" class="form-label">First Name</label>
		    <input type="text" class="form-control" id="exampleInputfName" aria-describedby="fNameHelp" placeholder="Enter first name" name="fName">
		  </div>
		  <div class="mb-3">
		    <label for="exampleInputlName" class="form-label">Last Name</label>
		    <input type="text" class="form-control" id="exampleInputlName" aria-describedby="lNameHelp" placeholder="Enter last name" name="lName">
		  </div>
		  <div class="mb-3">
		    <label for="exampleInputEmail1" class="form-label">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="your email address" name="email">
		    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
		  </div>
		  <div class="mb-3">
		    <label for="exampleInputPassword1" class="form-label">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password" name="password">
		  </div>
		  <div class="mb-3">
		    <label for="exampleInputPassword2" class="form-label">Confim Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Enter confirm password" name="confirmPassword">
		  </div>
		  <div class="mb-3">
		    <label for="exampleInputImage" class="form-label">Upload image</label>
		    <input type="file" class="form-control" id="exampleInputImage" aria-describedby="imageHelp" name="image">
		  </div>
		  <div class="mb-3">
		    <label for="exampleInputDob" class="form-label">Date of Birth</label>
		    <input type="date" class="form-control" id="exampleInputDob" aria-describedby="dobHelp" name="dob">
		  </div>
		  Gender
		  <div class="mb-3">
		  	<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
			  <label class="form-check-label" for="male">Male</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
			  <label class="form-check-label" for="female">Female</label>
			</div>
		  </div>
		  <div class="mb-3">
		    <label for="exampleInputMobile" class="form-label">Mobile number</label>
		    <input type="text" class="form-control" id="exampleInputMobile" aria-describedby="mobileHelp" placeholder="Enter mobile number" name="mobile">
		  </div>
		  Country
		  <div class="mb-3">
			  	<select class="form-select" aria-label="Default select example" name="country">
				  <option value="">Select country</option>
				  <option value="1">One</option>
				  <option value="2">Two</option>
				  <option value="3">Three</option>
				</select>
		  </div>
		  State
		  <div class="mb-3">
			  	<select class="form-select" aria-label="Default select example" name="state">
				  <option value="">Select state</option>
				  <option value="1">One</option>
				  <option value="2">Two</option>
				  <option value="3">Three</option>
				</select>
		  </div>
		  City
		  <div class="mb-3">
			  	<select class="form-select" aria-label="Default select example" name="city">
				  <option value="">Select city</option>
				  <option value="1">One</option>
				  <option value="2">Two</option>
				  <option value="3">Three</option>
				</select>
		  </div>
		  <div class="mb-3 form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Check me out</label>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	  </div>
	</div>
</body>
</html>