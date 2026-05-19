<?php
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
  <div class="card  col-md-6 mx-auto mt-3">
    <div class="card-header">
      All Posts
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
        foreach($posts as $post)
        
        ?>
          <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>
              <div class="btn-group">
                <a href="" class="btn btn-sm btn-info">View</a>
                <a href="" class="btn btn-sm btn-primary">Edit</a>
                <a href="" class="btn btn-sm btn-danger">Delete</a>
              </div>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>

</body>

</html>