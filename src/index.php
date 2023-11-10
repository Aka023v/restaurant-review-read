<?php
$dbh = new PDO(
  'mysql:dbname=restaurant_review;host=mysql;charset=utf8',
  'root',
  'password'
);

$query = "SELECT * FROM review";
$stmt = $dbh->query($query);
$reviews = $stmt->fetchAll();
?>

<body>
  <div>
    <h1>レストランのレビューアプリ</h1>
    <a href="./create.php">reviewする</a><br>
    <table border="1">
      <tr>
        <th>投稿者名</th>
        <th>レストラン名</th>
        <th>レビュー</th>
        <th>編集</th>
        <th>削除</th>
      </tr>
      <?php foreach ($reviews as $review) : ?>
        <tr>
          <td><?php echo $review['poster']; ?></td>
          <td><?php echo $review['restaurant_name']; ?></td>
          <td><?php echo $review['review']; ?></td>
          <td><a href="./edit.php?id=<?php echo $review['id'] ?>">編集</a></td>
          <td><a href="./delete.php?id=<?php echo $review['id'] ?>">削除</a></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</body>