<form action="result.php" method="post">
    
        <!-- この中にinputタグを記述していきます。 --> 
        名前：<input type="text" name="user_name" /><br>
        A賞：<input type="radio" name="product" value="A賞" /><br>
        B賞：<input type="radio" name="product" value="B賞" /><br>
        C賞：<input type="radio" name="product" value="C賞" /><br>
        個数：<select name="quanity">
            <?php 
            for($i = 1;$i <=10;$i++){ ?>
             <option value="<?php echo $i; ?>" >
             <?php echo $i; ?>
             </option>
             <?php } ?>
            </select><br>
        <input type="submit" value="申込" />
    </form>

    <?php 
    // モジュール
    // 機器やシステムの一部を構成するひとまとまりの機能を持った部品

    // バージョン管理システム
    // ファイルのバージョン管理を簡単かつ効率的に行うことができるソフトウェア

    // サブクエリ
    // データベースなどの問い合わせ（クエリ）文の内部に含まれる、別の問い合わせ文のこと
    
    
    ?>
