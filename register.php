<?php
  require('connect.php');
  $stmt = $db->prepare("
    INSERT INTO users (firstname, lastname, email, password, region, country, state, city, birthday)
    VALUES(:firstname, :lastname, :email, :password, :region, :country, :state, :city, :birthday)
  ");
  $stmt->bindParam("firstname",$_POST['firstname'],PDO::PARAM_STR);
  $stmt->bindParam("lastname",$_POST['lastname'],PDO::PARAM_STR);
  $stmt->bindParam("email",$_POST['email'],PDO::PARAM_STR);
  $stmt->bindParam("password",$_POST['password'],PDO::PARAM_STR);
  $stmt->bindParam("region",$_POST['region'],PDO::PARAM_STR);
  $stmt->bindParam("country",$_POST['country'],PDO::PARAM_STR);
  $stmt->bindParam("state",$_POST['state'],PDO::PARAM_STR);
  $stmt->bindParam("city",$_POST['city'],PDO::PARAM_STR);
  $stmt->bindParam("birthday",$_POST['birthday'],PDO::PARAM_STR);

  // if(!isset($_POST['acceptance'])) {
  //   echo "You must accept the terms of use";
  //   die;
  // }
  $stmt->execute();
  var_dump($db->errorInfo());
?>
<h1>Thanks for signing up</h1>
