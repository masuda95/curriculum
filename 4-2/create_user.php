<?php
ini_set('display_errors', "On");

require_once('db_connect.php');


if(isset($_POST['signUp'])){
    if (!empty($_POST)) {
        if (empty($_POST["name"])) {
            echo "名前が未入力です。";
        }
        if (empty($_POST["pass"])) {
            echo "パスワードが未入力です。";
        }
    }

    if(!empty($_POST['name']) && !empty($_POST['pass'])){
        $name = $_POST['name'];
        $password = $_POST['pass'];
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = 'INSERT INTO users (name,password) values (:name,:password)';
        $pdo = db_connect();
        try{
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name',$name);
            $stmt->bindParam(':password',$password_hash);
            $stmt->execute();
            header("Location: login.php");
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
    <title>新規登録画面</title>
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

.sink{
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
            <h2>新規登録画面</h2>   
            <div class="form-box">
                <form method="post" action="create_user.php">
                    <input class="sink" type="text" name="name" placeholder="名前"><br>
                    <input class="sink" type="password" name="pass" placeholder="パスワード"><br>
                    <input type="submit" value="新規登録" class="btn btn-primary" id="signUp" name="signUp">
                </form>
                <a href="login.php"><input type="submit" value="ログインはこちら" class="btn btn-dark"></a>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>

