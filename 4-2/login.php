<?php 
require_once('db_connect.php');
session_start();

if (!empty($_POST['signUp'])) {
    if (empty($_POST["name"])) {
        echo "名前が未入力です。";
    }
    if (empty($_POST["pass"])) {
        echo "パスワードが未入力です。";
    }

    if (!empty($_POST["name"]) && !empty($_POST["pass"])) {
        $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
        $pass = htmlspecialchars($_POST['pass'], ENT_QUOTES);
        $pdo = db_connect();
        try {
            $sql = "SELECT * FROM users WHERE name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if (password_verify($pass, $row['password'])) {
                $_SESSION["user_id"] = $row['id'];
                $_SESSION["user_name"] = $row['name'];
                header("Location: main.php");
                exit;
            } else {
                echo "パスワードに誤りがあります。";
            }
        } else {
            echo "ユーザー名かパスワードに誤りがあります。";
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
    <title>ログイン画面</title>
</head>
<style>
body{
    margin:0;
    padding:0;
}

.login-container{
    margin:200px auto;
    width:340px;
    height:320px;
}

.container{
    text-align:center;
}

.login-container input{
    width:80%;
    margin-bottom:20px;
}

.login{
    border:none;
    border-bottom:1px solid #000;
    outline:none;
    height:40px;
    color:#000;
    font-size:16px;
}
</style>
<body>
    <div class="login-container">
        <div class="container">
            <h2>ログイン画面</h2>   
            <div class="form-box">
            <form method="post" action="">
                <input class="login" placeholder="名前" type="text" name="name">
                <input class="login" placeholder="パスワード" type="password" name="pass">
                <input type="submit" value="ログイン" class="btn btn-primary" name="signUp" id="signUp">
            </form>
            <a href="create_user.php"><input type="submit" value="新規登録はこちら" class="btn btn-dark"></a>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>