<?php
$colors = ["red", "blue", "yellow", "green"];
echo count($colors); 
echo '<br/>';

$colors = ["red", "blue", "yellow", "green"];
sort($colors);
var_dump($colors);
echo '<br/>';


$colors = ["red", "blue", "yellow", "green"];
var_dump(in_array("brown", $colors));
echo '<br/>';

$colors = ["red", "blue", "yellow", "green"];
if (in_array("brown", $colors)) {
    echo "茶色はあるよ！";
    echo '<br/>';
} else {
    echo "茶色はいないよ！";
    echo '<br/>';
}

$colors = ["red", "blue", "yellow", "green"];
$atstr = implode(",", $colors);
var_dump($atstr);
echo '<br/>';

$re_colors = explode(",", $atstr);
var_dump($re_colors);
echo '<br/>';

// 要件定義(要求仕様書)
// エンドユーザーが開発担当側に対して開発を依頼するシステム要件を文章化したものです

// 単体テスト
// プログラムを手続きや関数といった個々の機能ごとに分割し、そのそれぞれについて動作検証を行う手法のこと

// 結合テスト
// 機能を結合させて、うまく連携・動作しているかを確認するテストのこと

// テスト仕様書
// システムやソフトウェアが、クライアントのヒアリングをもとに作り上げた要件定義書の通りに機能するかどうか、
// テストするポイントをまとめたドキュメント




?>