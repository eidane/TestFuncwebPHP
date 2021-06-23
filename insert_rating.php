<?php
if(isset($_POST['submit_rating']))
{
  require_once('config.php');
  print_r($_POST);

  
  $php_rating=$_POST['phprating'];
  $votes=$_POST['votes']+1;
  $points=$_POST['phprating']+$_POST['points'];
  $id=$_POST['id'];
  $sql="UPDATE posts SET votes =$votes , points = $points WHERE id = $id";
  
  $insert=mysqli_query($conn,$sql);
}
?>