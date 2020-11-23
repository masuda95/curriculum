<?php 
require_once('db_connect.php');
require_once('back_login.php');

back_login();
$pdo = db_connect();
try{
    $sql = "SELECT * FROM books";
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute();
}catch(PDOException $e){
    echo 'Error: ' . $e->getMessage();
    die();
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>在庫一覧画面</title>
</head>
<style>
.container{
    text-align:center;
}
.but{
    float:left;
}
</style>
<body>
    <div class="container">
        <h2>在庫一覧画面</h2>
        <table class="table">
            <tr>
                <td>タイトル</td>
                <td>発売日</td>
                <td>在庫数</td>
                <td></td>
            </tr>
            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['stock']; ?></td>
                    <td><a href="delete_book.php?id=<?php echo $row['id']; ?>">削除</a></td>
                </tr>
            <?php } ?>
        </table>
        <div class="but">
            <a href="create_book.php"><input type="submit" value="在庫登録" class="btn btn-primary"></a>
            <a href="logout.php"><input type="submit" value="ログアウト" class="btn btn-dark"></a>
        </div>
    </div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>