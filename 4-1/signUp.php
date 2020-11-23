<?php 
ini_set('display_errors', "On");
require_once('db_connect.php');
if (isset($_POST["signUp"])) {
    if (!empty($_POST["name"]) && !empty($_POST["password"])){
        $password = $_POST["password"];
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (name,password ) VALUES (:name, :password)";
        // 関数db_connect()からPDOを取得する
        $pdo = db_connect();
        try {
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $_POST["name"]);
            $stmt->bindParam(':password', $password_hash);
            $stmt->execute();
            echo '登録';
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <h1>新規登録</h1>
    <form method="POST" action="signUp.php">
        user:<br>
        <input type="text" name="name" id="name">
        <br>
        password:<br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="submit" id="signUp" name="signUp">
    </form>
</body>
</html>