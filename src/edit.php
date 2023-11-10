<?php
$id = filter_input(INPUT_GET, 'id');

$dbh = new PDO(
  'mysql:dbname=restaurant_review;host=mysql;charset=utf8',
  'root',
  'password'
);
$query = "SELECT * FROM review where id = '$id'";
$stmt = $dbh->query($query);
$review = $stmt->fetch();
?>

<body>
  <div>
    <h1>編集</h1>
    <form method="post" action="./update.php">
      <input type="hidden" name="id" value=<?php echo $review['id'] ?>>
      <div>
        <label for="poster">投稿者名
          <input type="text" name="poster" value=<?php echo $review['poster'] ?>>
        </label>
      </div>
      <div>
        <label for="restaurant_name">レストラン名
          <input type="text" name="restaurant_name" value=<?php echo $review['restaurant_name'] ?>>
        </label>
      </div>
      <div>
        <label for="review">レビュー
          <input type="textarea" name="review" value=<?php echo $review['review'] ?>>
        </label>
      </div>
      <button>更新</button>
    </form>
  </div>
</body>