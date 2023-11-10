<?php
$id = filter_input(INPUT_POST, 'id');
$poster = filter_input(INPUT_POST, 'poster');
$restaurant_name = filter_input(INPUT_POST, 'restaurant_name');
$review = filter_input(INPUT_POST, 'review');

$dbh = new PDO(
  'mysql:dbname=restaurant_review;host=mysql;charset=utf8',
  'root',
  'password'
);
$query = "UPDATE review SET poster='$poster', restaurant_name='$restaurant_name', review='$review' WHERE id = '$id'";
$dbh->query($query);

header('Location: ./index.php');
exit;
?>