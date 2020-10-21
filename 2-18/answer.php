<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST['name'];
$port_answer = $_POST['port'];
$word_answer = $_POST['word'];
$mysql_answer = $_POST['mysql'];
$answers = $_POST['answer'];

    ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="text.css">
</head>
<body>
    <div class="wrapper">
    <link rel="stylesheet" href="text.css">
    <p><!--POST通信で送られてきた名前を表示--><?php echo $name; ?>さんの結果は・・・？</p>
    <p>①の答え</p>
    <p><?php if ($port_answer == $answers[0]){
    echo  '正解です';
}else{
    echo '不正解です';
} ?></p>
    <!--作成した関数を呼び出して結果を表示-->
    <p>②の答え</p>
    <p><?php if ($word_answer == $answers[1]){
    echo  '正解です';
}else{
    echo '不正解です';
} ?></p>
    <!--作成した関数を呼び出して結果を表示-->
    <p>③の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <p><?php if ($mysql_answer == $answers[2]){
    echo  '正解です';
}else{
    echo '不正解です';
} ?></p>
   </div>
</body>
</html>