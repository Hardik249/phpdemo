<?php 

require 'conn.php';

$errors = array();

$fName = isset($_POST['fName']) ? $_POST['fName'] : '';
$lName = isset($_POST['lName']) ? $_POST['lName'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$confirmPassword = isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : '';
$image = isset($_POST['image']) ? $_POST['image'] : '';
$dob = isset($_POST['dob']) ? $_POST['dob'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
$country = isset($_POST['country']) ? $_POST['country'] : '';
$state = isset($_POST['state']) ? $_POST['state'] : '';
$city = isset($_POST['city']) ? $_POST['city'] : '';

if ($fName == '') {
	$errors['fName'] = 'Please enter your First Name.';
}

if ($lName == '') {
	$errors['lName'] = 'Please enter your Last Name.';
}

if ($email == '') {
	$errors['email'] = 'Please enter your Email.';
}

if ($password == '') {
	$errors['password'] = 'Please enter your Password.';
}

if ($image == '') {
	$errors['image'] = 'Please enter your Image.';
}

if ($dob == '') {
	$errors['dob'] = 'Please enter your Date of birth.';
}

if ($gender == '') {
	$errors['gender'] = 'Please Select your Gender.';
}

if ($mobile == '') {
	$errors['mobile'] = 'Please enter your Mobile number.';
}

if ($country == '') {
	$errors['country'] = 'Please Select your Country.';
}

if ($state == '') {
	$errors['state'] = 'Please Select your State.';
}

if ($city == '') {
	$errors['city'] = 'Please Select your City.';
}

if (isset($errors) && !empty($errors)) {
	// code...
	$sql = "INSERT INTO users (fName, lName, email, password, image, dob, gender, mobile, country_id, state_id, city_id)
	  VALUES ('".$fName."', '".$lName."', '".$email."', '".$password."', '".$image."', '".$dob."', '".$gender."', '".$mobile."', '".$country."', '".$state."', '".$city."')";
} else {
	echo json_encode($errors); // Output errors in JSON format
	header('index.php');
}

?>