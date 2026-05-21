<?php
include_once './header.php';
include 'env.php';
$querry = 'SELECT * FROM users WHERE 1';
$select = mysqli_query($conn, $querry);

$users = mysqli_fetch_all($select, 1);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
</head>

<body>
  <div class="card  col-md-6 mx-auto mt-3">
    <div class="card-header">
      All Users
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Email</th>
            <th>Description</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>


          <?php
          foreach ($users as $user) { ?>
            <tr>
              <td>
                <?= $user['id'] ?>
              </td>
              <td>
                <?= $user['name'] ?>
              </td>
              <td>
                <?= $user['email'] ?>
              </td>
              <td>
                <?= $user['description'] ?>
              </td>
              <td>
                <div class="btn-group">
                  <a href="" class="btn btn-sm btn-info">View</a>
                  <a href="" class="btn btn-sm btn-primary">Edit</a>
                  <a href="" class="btn btn-sm btn-danger">Delete</a>
                </div>
              </td>
            </tr>
          <?php
          }
          ?>



        </tbody>
      </table>
    </div>
  </div>

</body>

</html>