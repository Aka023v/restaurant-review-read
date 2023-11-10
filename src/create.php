<body> 
    <h1>新規作成</h1>
    <form method="post" action="./store.php">
        <table>
            <tr>
                <td>投稿者名</td>
                <td><input name="poster" placeholder="投稿者名" required></td>
            </tr>
            <tr>
                <td>レストラン名</td>
                <td><input name="restaurant_name" placeholder="レストラン名" required></td>
            </tr>
            <tr>
                <td>レビュー</td>
                <td><textarea name="review" placeholder="レビュー記入欄" required></textarea></td>
            </tr>
            <tr>
                <td ></td>
                <td><button>送信</button></td>
            </tr>
        </table>
    </form>
</body>
