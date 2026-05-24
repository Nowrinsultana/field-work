<?php
session_start();
include_once 'navbar.php';
include 'env.php';
$id = $_GET['id'];
$querry = "SELECT * FROM posts WHERE id=$id";
$post = mysqli_query($conn, $querry);
$fetch = mysqli_fetch_assoc($post);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Post</title>
</head>

<body>
  <div class="card col-md-6 mx-auto mt-2">
    <div class="card-header">
      Edit Post
    </div>
    <div class="card-body ">
      <form action="./controlers/editpost_validation.php" method="POST">
        <input type="hidden" name="id" value="<?= 'id' ?>">  
      <label for="">Name</label>
        <input type="text" class="form-control mt-2" name="name" value="<?= $fetch['name'] ?>">
        <p class="text-danger">
          <?php
          if (isset($_SESSION['name_error'])) {
            echo $_SESSION['name_error'];
          }
          ?>
        </p>
        <label for="">Email</label>
        <input type="text" class="form-control mt-2" name="email" value="<?= $fetch['email'] ?>">
        <p class="text-danger">
          <?php
          if (isset($_SESSION['email_error'])) {
            echo $_SESSION['email_error'];
          }
          ?>
        </p>
        <label for="">Post Description</label>
        <textarea name="description" id="" class="form-control mt-2"><?= $fetch['description'] ?></textarea>
        <p class="text-danger">
          <?php
          if (isset($_SESSION['description_error'])) {
            echo $_SESSION['description_error'];
          }
          ?>
        </p>
        <input type="submit" class="btn btn-primary w-100 mt-3" value="Update" name="update_btn">
      </form>
    </div>
  </div>

</body>

</html>
<?php
session_unset();
?>