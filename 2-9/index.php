<?php 
for($i = 1;$i <= 100;$i++){
    if ($i %3 == 0 && $i %5 == 0){
        echo 'FizzBuzz!!';
        echo '<br/>';
    }elseif($i %3 == 0){
        echo 'Fizz!';
        echo '<br/>';
    }elseif($i %5 == 0){
        echo 'Buzz!';
        echo '<br/>';
    }else{
        echo $i;
        echo '<br/>';
    }
}

// パフォーマンス
// コンピュータなどの機器やソフトウェア、システムなどの処理性能や実行速度、
// 通信回線・ネットワークなどの伝送速度・容量などのことを指すことが多い

// スロークエリ
// データベースにおいて、時間のかかっているSQL

// クエリログ
// クライアントから実行された全ての SQL クエリを出力してくれるログ


?>