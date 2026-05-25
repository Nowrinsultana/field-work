<?php
session_start();
// var_dump($_POST);
if (isset($_POST['update_btn'])) {
  //collect user input
  $name = test_input($_POST['name']);
  $email = test_input($_POST['email']);
  $description = test_input($_POST['description']);
  $id = $_POST['id'];
}

//name validation
if (empty($name)) {
  $_SESSION['name_error'] = 'Name is required';
  header("location:../editpost.php?id=$id");
} elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
  $_SESSION['name_error'] = 'Only letters and white space allowed';
  header("location:../editpost.php?id=$id");
  exit();
}

//email validation
if (empty($email)) {
  $_SESSION["email_error"] = "email is required";
  header("location:../editpost.php?id=$id");
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $_SESSION["email_error"] = "Invalid email format";
  header("location:../editpost.php?id=$id");
  exit();
}

//description validation
if (empty($description)) {
  $_SESSION["description_error"] = "description is required";
  header("location:../editpost.php?id=$id");
  exit();
}

include '../env.php';
$querry = "UPDATE posts SET name='$name', email='$email', description='$description'  WHERE id=$id";
$update = mysqli_query($conn, $querry);
if ($update) {
  $_SESSION['success'] = 'Post updated successfully id=' . $id;
  header("location:../allpost.php");
} else {
  echo "Error: " . mysqli_error($conn);
}

//senitize user input
function test_input($data)
{
  $data = trim($data);
  $data = htmlspecialchars($data);
  $data = stripslashes($data); //for removing slash
  return $data;
}
