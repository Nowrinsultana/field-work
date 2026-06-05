<!-- crud -- create read update delete -->

<?php
$dbhostname = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "crud_project";

//$conn = mysqli_connect($dbhostname, $dbusername, $dbpassword, $dbname);
$conn = new SQLite3($dbname);
