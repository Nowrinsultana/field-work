<?php
session_start();
$id = $_GET['id'];
include '../env.php';
$querry= "DELETE FROM posts WHERE id = $id";
$delete = mysqli_query($conn, $querry);
if($delete){
  header('location: ../allpost.php');
  $_SESSION['success'] = "Post deleted successfully.";
}
?>