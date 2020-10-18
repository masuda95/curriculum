<?php 


for($i=1;$i <= 40;$i++){
    $number = rand(1,6);
    if($total < 40){
        $total += $number;
        echo $i.'回目='.$number;
        echo '<br>';
}

}
echo '<br>';

date_default_timezone_set('Asia/Tokyo');
$time = intval(date('H'));
if (5 <= $time && $time <= 11) { 
echo 'おはようございます。';
} elseif (11 <= $time && $time <= 17) { 
echo 'こんにちわ。';
} else { 
echo 'こんばんわ。';
} 
?>