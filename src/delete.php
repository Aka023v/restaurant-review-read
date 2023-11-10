<?php
$id = filter_input(INPUT_GET, 'id');

$dbh = new PDO(
    'mysql:dbname=restaurant_review;host=mysql;charset=utf8',
    'root',
    'password'
);
$query = "DELETE FROM review where id = '$id'";
$dbh->query($query);

header('Location: ./index.php');
exit;
?>