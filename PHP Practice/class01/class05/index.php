<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contact form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
      <?php
      if (isset($_SESSION["success_insert"])) {?>
          <div class="alert alert-success">
            <?=$_SESSION["success_insert"];?>
          </div>

        <?php
        }
        ?>
          
  <div class="card col-md-6 mx-auto">
    <div class="card-header">contact form</div>
    <div class="card-body">
      <form action="./formdata.php" method="POST">
        <label for="">name</label>
        <input type="text" class="form-control my-2" name="name">

        <span class="text-danger">
          <?php
          if (isset($_SESSION["name_error"])) {
            echo $_SESSION["name_error"];
          }

          ?>
        </span>

        <br>
        <label for="">email</label>
        <input type="text" class="form-control my-2" name="email">
        <span class="text-danger">
          <?php
          if (isset($_SESSION["email_error"])) {
            echo $_SESSION["email_error"];
          }
          ?>
        </span>
        <br>
        <input type="submit" value="submit" name="submit_btn">
      </form>
    </div>
  </div>

</body>

</html>

<?php
session_unset();
// if (isset($name)) {
//   echo $name;
// }
// $_SESSION['error_message'] = 'this is error message';
// $_SESSION['error_message1'] = 'this is error message';
// $_SESSION['error_message2'] = 'this is error message';
// var_dump($_SESSION);

?>



<!-- // echo "<pre>";
// print_r($_SERVER);// super global
// echo "</pre>"; -->