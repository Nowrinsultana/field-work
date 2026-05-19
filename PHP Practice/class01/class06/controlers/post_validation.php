<?php
session_start();
// var_dump($_POST);
if (isset($_POST['submit_btn'])) {
  //collect user input
  $name = test_input($_POST['name']);
  $email = test_input($_POST['email']);
  $description = test_input($_POST['description']);
}

//name validation
if (empty($name)) {
  $_SESSION['name_error'] = 'Name is required';
  header("location:../index.php");
} elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
  $_SESSION['name_error'] = 'Only letters and white space allowed';
  header("location:../index.php");
  exit();
}

//email validation
if (empty($email)) {
  $_SESSION["email_error"] = "email is required";
  header("location:../index.php");
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $_SESSION["email_error"] = "Invalid email format";
  header("location:../index.php");
  exit();
}

//description validation
if (empty($description)) {
  $_SESSION["description_error"] = "description is required";
  header("location:../index.php");
  exit();
}


//data inserted into database
include '../env.php';
$query = "INSERT INTO posts(name, email, description) VALUES ('$name', '$email', '$description')";
$insert = mysqli_query($conn, $query);
if ($insert) {
  $_SESSION['success'] = "Post added successfully";
  header("location:../index.php");
}


//senitize user input
function test_input($data)
{
  $data = trim($data);
  $data = htmlspecialchars($data);
  $data = stripslashes($data); //for removing slash
  return $data;
}
