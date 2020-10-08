<?php 
$fruits = ['apple' => 'りんご','orange' => 'みかん','peach' => 'もも'];
foreach($fruits as $key => $value){
    echo $key.'といったら'.$value;
    echo '<br/>';
}

// トランザクション
// 複数の処理を1つにまとめたもの

// 排他ロック
// データベースシステムなどで記憶領域への同時アクセスを制限するロック機構の一つで、
// 他の実行主体によるアクセスを完全に禁止するもの

// チューニング
// コンピュータ、ソフトウェアなどの設定や構成を調整する作業を指すことが多い

?>