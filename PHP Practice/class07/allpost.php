<?php
session_start();
include_once './navbar.php';
include 'env.php';
$querry = 'SELECT * FROM posts WHERE 1';
$select = mysqli_query($conn, $querry);

$posts = mysqli_fetch_all($select, 1);
// echo "<pre>";
// print_r($post);
// echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Posts</title>
</head>

<body>
  <div class="card  col-md-10 mx-auto mt-3">
    <?php
    if (isset($_SESSION['success'])) { ?>
      <div class="alert alert-success">
        <?= $_SESSION['success']; ?>
      </div>
    <?php
    }
    ?>
    <div class="card-header">
      All Posts
    </div>
    <div class="card-body">
      <div class="table">
        <table class="table table-bordered">
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
            foreach ($posts as $key => $post) { ?>
              <tr>
                <td>
                  <?= ++$key; ?>
                </td>
                <td>
                  <?= $post['name']; ?>
                </td>
                <td>
                  <?= $post['email']; ?>
                </td>
                <td>
                  <?= $post['description']; ?>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="./view.php?id=<?= $post['id'] ?>" class="btn btn-sm btn-info">View</a>
                    <a href="./editpost.php?id=<?= $post['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                    <a href="./controlers/deletepost.php?id=<?= $post['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
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
  </div>

</body>

</html>
<?php
session_unset();
?>