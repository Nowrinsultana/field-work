<?php
include("./header.php");
session_start();
?>

<div class="card col-md-6 w-50 mx-auto mt-5 ">
  <?php
  if (isset($_SESSION['success'])) { ?>
    <div class="alert alert-success">
      <?= $_SESSION['success']; ?>
    </div>
  <?php
  }
  ?>
  <div class="card-header">Add New User</div>
  <div class="card-body">
    <form action="./controler/data_validation.php" class="form" method="post">
      <label for="name">Name</label>
      <input type="text" class="form-control mt-2" placeholder="Enter Your Name" name="name">
      <p class="text-danger <br>">
        <?php
        if (isset($_SESSION["name_error"])) {
          echo $_SESSION["name_error"];
        }
        ?>
      </p>
      <label for="email">Email</label>
      <input type="text" class="form-control mt-2" placeholder="Enter Your Email" name="email">
      <p class="text-danger <br>">
        <?php
        if (isset($_SESSION["email_error"])) {
          echo $_SESSION["email_error"];
        }
        ?>
      </p>


      <label for="description">Description</label>
      <input type="text" class="form-control mt-2" placeholder="Enter Your Description" name="description">
      <p class="text-danger <br>">
        <?php
        if (isset($_SESSION["description_error"])) {
          echo $_SESSION["description_error"];
        }
        ?>
      </p>

      <input type="submit" class="btn btn-primary mt-3" value="Submit" name="submit_btn">
    </form>

  </div>

</div>
<?php
include("./footer.php");
session_unset();
?>