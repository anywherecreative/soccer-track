<?php
require('connect.php');
if(isset($_GET['continent_code'])) {
  $stmt = $db->prepare("SELECT code, name FROM country WHERE continent_code = :continent_code");
  $stmt->bindParam(":continent_code", $_GET['continent_code'], PDO::PARAM_STR);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  header('content-type:application/JSON');
  echo json_encode($result);
}

if(isset($_GET['country_code'])) {
  $stmt = $db->prepare("SELECT code, region FROM region WHERE country_code = :country_code");
  $stmt->bindParam(":country_code", $_GET['country_code'], PDO::PARAM_STR);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  header('content-type:application/JSON');
  echo json_encode($result);
}
