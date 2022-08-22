<?php
session_start();
// initializing variables
$first_name = "";
$last_name="";
$email    = "";
$phone="";
$errors = array(); 
// include "APP/database/contract/connection.php";
$db = mysqli_connect('localhost', 'root', '', 'ecommerce');

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    //mysqli_real_escape_string() function escapes special characters in a string for use in an SQL query,
    // taking into account the current character set of the connection.
    $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
    $email = mysqli_real_escape_string($db, $_POST['user-email']);
    $phone = mysqli_real_escape_string($db, $_POST['user-phone']);
    $password = mysqli_real_escape_string($db, $_POST['user-password']);
    $confirmpassword = mysqli_real_escape_string($db, $_POST['confirm_user-password']);
   
}  
// form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($first_name)) { array_push($errors, "First_Name is required"); }
  if (empty($last_name)) { array_push($errors, "Last_Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($phone)) { array_push($errors, "phone is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (empty( $confirmpassword)) { array_push($errors, " Confirm Password is required"); }
  if ($password != $confirmpassword) {
	array_push($errors, "The two passwords do not match");

  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE (first_name='$first_name' AND last_name='$last_name')OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['first_name'] === $first_name&&$user['last_name'] === $last_name) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password);//encrypt the password before saving in the database

    $query = "INSERT INTO users (first_name,last_name, email,phone,password) 
              VALUES('$first_name','$last_name', '$email', '$password'.'$phone')";
    mysqli_query($db, $query);
    $_SESSION['first_name'] = $first_name;
    $_SESSION['last_name'] = $last_name;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
}
?>