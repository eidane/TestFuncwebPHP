<?php
if(isset($_POST['submit_rating']))
{
  require_once('config.php');
  //print_r($_SESSION);

  
  $php_rating=$_POST['phprating'];
  $votes=$_POST['votes']+1;
  $points=$_POST['phprating']+$_POST['points'];
  $id=$_POST['id'];
  $uid=$_SESSION['user']['id'];
  $sql="UPDATE posts SET votes =$votes , points = $points WHERE id = $id";
  //for å hindre brukere å vote mer en en gang
  $sql2="INSERT INTO ratingRegistre (uid, id) VALUES($uid, $id)";
  $sql3="SELECT * from ratingRegistre where uid=$uid and id=$id";
  $querry=mysqli_query($conn,$sql3);
  $res = mysqli_fetch_assoc($querry);
  
  if (empty($res)){
  //om en skal identifisere brukere så kan en også bruke en en til mange lignene denne regla under
  //$sql2="INSERT INTO ratingRegistre (uid, pid,rating) VALUES('$uid', '$id', '$rate'";
  $update=mysqli_query($conn,$sql);
  $insert=mysqli_query($conn,$sql2);
  echo "Du har stemt";
  }
  else{
    echo "Du har alt stemt";
  }
}
?>

<button onclick="goBack()">tilbake til artikkel</button>

<script>
function goBack() {
  window.history.back();
}
</script> 