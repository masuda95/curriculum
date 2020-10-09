<?php
 $x = 7.7;
 echo ceil($x);
 echo '<br>';

 $x = 7.7;
 echo floor($x);
 echo '<br>';

 $x = 7.7;
 echo round($x);
 echo '<br>';

 echo pi();
    
 function circleArea($r) {
     $circle_area = $r * $r * pi();
     echo $circle_area; 
 }

 circleArea(7);
 echo '<br>';

 echo mt_rand(1, 70);
 echo '<br>';


 $str = "masuda";
 echo strlen($str);
 echo '<br>';

 $str = "masuda";
    echo strpos($str, "a");
    echo '<br>';

 $str = "masuda";
    echo substr($str, -2, 2);
    echo '<br>';

 $str = "masuda";
    echo str_replace("masu", "MASU", $str);
    echo '<br>';

 $str = "I am Masuda";
    echo str_replace(" ", "", $str);
    echo '<br>';

 $name = '増田';
 $time = 7.5;
    printf("%sは残り時間%.2f秒", $name, $time);
    echo '<br>';

 $name = '増田';
 $limit_minute = 4;

 $limit_time = sprintf("%sは残り%d時間%d分です", $name,$limit_minute,$limit_minute);
    echo $limit_time;
    
// PostgreSQL
// オープンソースのデータベース管理システムLinuxなど主要なUNIX系OSとWindowsに対応し、機能の豊富さや拡張性の高さに定評がある

// Oracle SQL
// オラクルが開発した SQLを“手続き型”言語として拡張したプログラミング言語

// TortoiseGi
// GitのGUIクライアント

// TortoiseSVN
// バージョン管理用のwindowsアプリ(GUI)

// 外部設計
// 実際にシステムの仕様を決定する段階

// 内部設計
// 外部設計の結果を実際にプログラミングできるように、システム内部に特化した詳細な設計を行う

  
?>