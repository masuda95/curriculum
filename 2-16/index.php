<?php
    $testFile = "test.txt";
    $contents = "こんにちは！";
    
    if (is_writable($testFile)) {
        // 書き込み可能なときの処理
        // 対象のファイルを開く
        $fp = fopen($testFile, "a");
        // 対象のファイルに書き込む
        fwrite($fp, $contents);
        // ファイルを閉じる
        fclose($fp);
        // 書き込みした旨の表示
        echo "finish writing!!";
    } else {
        // 書き込み不可のときの処理
        echo "not writable!";
        exit;
    }

    $test_file = "test2.txt";
    
    if (is_readable($test_file)) {
        // 読み込み可能なときの処理
        // 対象のファイルを開く
        $fp = fopen($test_file, "r");
        // 開いたファイルから1行ずつ読み込む
        while ($line = fgets($fp)) {
            // 改行コード込みで1行ずつ出力
            echo $line.'<br>';
        }
        // ファイルを閉じる
        fclose($fp);
    } else {
        // 読み込み不可のときの処理
        echo "not readable!";
        exit;
    }
    
    // CakePHPの2系・3系の違い
    // Modelクラスがテーブル単位の操作を担うTable、レコード単位の操作を担うEntityといったクラスに分割された
    // ORMのクエリー結果が配列ではなくオブジェクトで返ってくるようになった
    // 2系ではAppクラスを利用、3系からはPSR-4に基づいた名前空間を利用

    // LAMP
    // オープンソースソフトウェアの組み合わせを指す言葉
    // OSのLinux、WebサーバーのApache、データベースのMySQL、プログラミングのPerl、PHP、Pythonを指します

    // AWS
    // ネットワーク、サーバ、ストレージのようなコンピューター機能をクラウド上で提供し、手軽にインフラを構築できる

    ?>