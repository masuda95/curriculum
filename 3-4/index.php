<?php 
ini_set('display_errors', "On");
require_once('getData.php');
$getdata = new getData();
$user = $getdata->getUserData();
$post = $getdata->getPostData();


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./text.css">
    <title>Document</title>
</head>
<body>
<header>
    <div class="header">
        <div class="image">
        <img src="./1599315827_logo.png">
        </div>
        <div class="header-top" >
            <p>ようこそ <?php echo $user['last_name']; ?><?php echo $user['first_name']; ?> さん</p>
        </div>
        <div class="header-bottom" >
            <p>最終ログイン日 : <?php echo $user['last_login']; ?></p>
        </div>
    </div>
</header>
<table>
    <tr>
        <th>記事ID</th>
        <th>タイトル</th>
        <th>カテゴリ</th>
        <th>本文</th>
        <th>投稿日</th>
    </tr>
    <?php foreach($post as $value): ?>
    <tr>
        <td><?php echo $value['id'] ?></td>
        <td><?php echo $value['title'] ?></td>
        <td><?php echo $getdata->getCategory($value['category_no']) ?></td>
        <td><?php echo $value['comment'] ?></td>
        <td><?php echo $value['created'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<footer>
    <a>Y&I group.inc</a>
</fotter>
    
</body>
</html>