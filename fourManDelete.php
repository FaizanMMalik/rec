
<?php
session_start();
if(!isset($_SESSION['username'])||$_SESSION['username']=="")
{
  echo "<script>window.location.replace('login.php');</script>";
  exit;
}
include 'database.php';
$sql = "delete from fourman where id='$_GET[id]'";

  mysqli_query($conn, $sql);
  mysqli_close($conn);
  echo "<script>window.location.replace('fourMan.php');</script>";
  exit;
?>