<?php
$poster = filter_input(INPUT_POST, 'poster');
$restaurant_name = filter_input(INPUT_POST, 'restaurant_name');
$review = filter_input(INPUT_POST, 'review');

$dbh = new PDO(
    'mysql:dbname=restaurant_review;host=mysql;charset=utf8',
    'root',
    'password'
);

$query = "INSERT INTO `review` (`poster`, `restaurant_name`, `review`) VALUES ('$poster', '$restaurant_name', '$review')";
$dbh->query($query);
header("Location: ./index.php");
?>