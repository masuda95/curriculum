<?php 
require_once('db_connect.php');
require_once('back_login.php');

back_login();

if(isset($_POST['create_book'])){
    if(empty($_POST['title'])){
        echo 'タイトルを入力してください';
        echo '<br>';
    }
    if(empty($_POST['date'])){
        echo '日付を入力してください';
        echo '<br>';
    }
    if(empty($_POST['stock'])){
        echo '在庫数を入力してください';
    }

    if(!empty($_POST['title']) && !empty($_POST['date']) && !empty($_POST['stock'])){
        $title = $_POST['title'];
        $date = $_POST['date'];
        $stock = $_POST['stock'];
        $sql_book = "INSERT INTO books (title,date,stock) VALUES (:title,:date,:stock)";
        $pdo = db_connect();
        try{
            $stmt = $pdo->prepare($sql_book);
            $stmt->bindParam(':title',$title);
            $stmt->bindParam(':date',$date);
            $stmt->bindParam(':stock',$stock);
            $stmt->execute();
            header("Location: main.php");
                exit;
        }catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
            die();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>在庫登録</title>
</head>
<style>
body{
    margin:0;
    padding:0;
}

.create-container{
    margin:200px auto;
    width:340px;
    height:320px;
}

.create{
    text-align:center;
}

.create-container input{
    width:80%;
    margin-bottom:20px;
}

.book{
    border:none;
    border-bottom:1px solid #000;
    outline:none;
    height:40px;
    color:#000;
    font-size:16px;
}
</style>
<body>
<div class="create-container">
        <div class="create">
            <h2>在庫登録画面</h2>   
            <div class="form-box">
                <form method="post" action="">
                    <input class="book" type="text" name="title" placeholder="タイトル"><br>
                    <input class="book" type="text" name="date" placeholder="発売日"><br>
                    <input class="book" type="number" name="stock" placeholder="在庫数"><br>
                    <input type="submit" value="登録" class="btn btn-primary" id="create_book" name="create_book">
                </form>
                    <a href="main.php"><input type="submit" value="戻る" class="btn btn-dark"></a>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>