<?php
session_start();

if (isset($_POST['submit_btn'])) {

  $name = test_input($_POST['name']);
  $email = test_input($_POST['email']);
  $description = test_input($_POST['description']);

  // name validation
  if (empty($name)) {
    $_SESSION['name_error'] = 'Name is required';
    header('location:../index.php');
    exit();
  } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
    $_SESSION['name_error'] = 'Only letters and white space allowed';
    header('location:../index.php');
    exit();
  }

  // email validation
  elseif (empty($email)) {
    $_SESSION['email_error'] = 'Email is required';
    header('location:../index.php');
    exit();
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['email_error'] = 'Invalid email format';
    header('location:../index.php');
    exit();
  }

  // description validation
  elseif (empty($description)) {
    $_SESSION['description_error'] = 'Description is required';
    header('location:../index.php');
    exit();
  }

  // database insert
  include '../env.php';

  $query = "INSERT INTO users(name, email, description)
              VALUES ('$name', '$email', '$description')";

  $insert = mysqli_query($conn, $query);

  if ($insert) {
    $_SESSION['success'] = "User added successfully";
    header("location:../index.php");
    exit();
  }
}


// sanitize data
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
