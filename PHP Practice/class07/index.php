<?php
include_once './navbar.php';
session_start();
?>

<div class="card col-md-6 mx-auto mt-2">
  <?php
  if (isset($_SESSION['success'])) { ?>
    <div class="alert alert-success">
      <?= $_SESSION['success']; ?>
    </div>
  <?php
  }
  ?>
  <div class="card-header">
    Add New Post
  </div>
  <div class="card-body ">
    <form action="./controlers/post_validation.php" method="POST">
      <label for="">Name</label>
      <input type="text" class="form-control mt-2" placeholder="only letters and white space" name="name">
      <p class="text-danger">
        <?php
        if (isset($_SESSION['name_error'])) {
          echo $_SESSION['name_error'];
        }
        ?>
      </p>
      <label for="">Email</label>
      <input type="text" class="form-control mt-2" placeholder="example@gmail.com" name="email">
      <p class="text-danger">
        <?php
        if (isset($_SESSION['email_error'])) {
          echo $_SESSION['email_error'];
        }
        ?>
      </p>
      <label for="">Post Description</label>
      <textarea name="description" id="" class="form-control mt-2"></textarea>
      <p class="text-danger">
        <?php
        if (isset($_SESSION['description_error'])) {
          echo $_SESSION['description_error'];
        }
        ?>
      </p>
      <input type="submit" class="btn btn-primary w-100 mt-3" value="Submit" name="submit_btn">
    </form>
  </div>
</div>

<?php
session_unset();
?>