<?php 
//表⽰はHTMLの<table>タグを使⽤すること
//**
//*表⽰イメージ
//* _________________________
//* |_____|_c1|_c2|_c3|横合計|
//* |___r1|_10|__5|_20|___35|
//* |___r2|__7|__8|_12|___27|
//* |___r3|_25|__9|130|__164|
//* |縦合計|_42|_22|162|__226|
//* _________________________
$arr =[
    'r1' => ['c1' => 10, 'c2' => 5, 'c3' => 20],
    'r2' => ['c1' => 7, 'c2' => 8, 'c3' => 12],
    'r3' => ['c1' => 25, 'c2' => 9, 'c3' => 130]
];

//* ヘッダ用配列作成及びキーチェック
//*（キー不一致はあり得ないだろうけど念のため）
foreach ($arr as $var){
    if(!isset($keys)) $keys = array_keys($var);
    if($keys === array_keys($var)) continue;
    die('キー不一致');
}
    $table = [];
    $sum_t = [];
    foreach ($arr as $key=>$val){
        if(!$table){
            $table[] = '<table>';
            $table[] = '<tr><th></th>';
            foreach ($keys as $k){
                $table[] = sprintf('<th>%s</th>',$k);
                $sum_t[$k] = 0;
            }
            $table[] = '<th>横合計</th></tr>';
        }
    
    //*ここから明細

    $sum_y = 0;
    $table[] = sprintf('<tr><th>%s</th>',$key);
    foreach ($val as $k=>$v){
        $table[] = sprintf('<td>%s</td>',$v);
        $sum_y += $v;
        $sum_t[$k] += $v;
    }
    $table[] = sprintf('<td>%d</td></tr>',$sum_y);
}
if($table){
    $sum_y = 0;
    $table[] = '<tr><th>縦合計</th>';
    foreach ($sum_t as $v){
        $table[] = sprintf('<td>%s</td>',$v);
        $sum_y += $v;
    }
    $table[] = sprintf('<td>%d</td></tr>',$sum_y);
    $table[] = '</table>';
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>テーブル表⽰</title>
<style>
table {
border:1px solid #000;
border-collapse: collapse;
}
th, td {
border:1px solid #000;
}

</style>
</head>
<body>
<!-- ここにテーブル表⽰ -->
<?= implode(PHP_EOL, $table) ?>


</body>
</html>


