<?php

session_start();
//var_dump($_POST["email"]);
// $name_error = "";
// $name = "";

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//   $name = $_POST["name"];
//   $email = $_POST["email"];
//   if (empty($name)) {
//     $name_error = "name is required";
//   }
// }
// print_r($_SESSION);
if (isset($_POST['submit_btn'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  if (empty($name)) {
    $_SESSION['name_error'] = 'name is required';
    header("location: ./index.php");
  } elseif (empty($email)) {
    $_SESSION["email_error"] = "email is required";
    header("location: ./index.php");
  } else {
    include "./env.php";
    $query = "INSERT INTO users(name, email) VALUES ('$name','$email')";
    mysqli_query($conn, $query);
    $_SESSION["success_insert"] = "your data has been inserted successfully";
    header("location: ./index.php");
  }
}
