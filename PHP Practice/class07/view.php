<?php
include_once 'header.php';
include 'env.php';
$id = $_GET['id'];
$ruerry = "SELECT name, description FROM posts WHERE id = $id";
$postDes = mysqli_query($conn, $ruerry);
$fetch = mysqli_fetch_assoc($postDes);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Single Post</title>
</head>

<body>
  <div class="card col-md-6 mx-auto mt-5 ">
    <div class="card-header d-flex justify-content-between align-items-center">
      Post By: <span class="text-success fw-bold"><?= $fetch['name'] ?></span>
      <a href="./allpost.php" class="badge rounded-pill text-bg-info btn">Back</a>

    </div>
    <div class="card-body">
      <form>
        <textarea rows="15" class="form-control">
        <?= $fetch['description'] ?>
        </textarea>
      </form>

    </div>
  </div>

</body>

</html>