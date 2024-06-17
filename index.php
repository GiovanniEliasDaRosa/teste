<?php
  include('dumpper.php');
  $con = null;

  try{
    $con = mysqli_connect('127.0.0.1', 'root', '', 'ClothesDB');
    dump($con);
  } catch (Exception $e) {
    dump($e);
    exit();
  }

  $query = $con->query('SELECT * FROM Clothes');
  dump($query); 
?>