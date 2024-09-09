<?php
// 以下はランダムな数字を格納した配列を表⽰するプログラムです。
// 配列内の隣合う数字を⽐較して左側から⼩さい順に表⽰されるよう配列の中⾝を並び替えてください。
// 並び替えはfor⽂を使⽤すること

// 例）
// 4, 3, 1, 2
// ↓
// 3, 4, 1, 2
// ↓
// 3, 1, 4, 2
// ↓
// 3, 1, 2, 4
// ↓
// 1, 3, 2, 4
// ↓
// 1, 2, 3, 4 ←これが画⾯に表⽰される
$arr = [99, 3, 12, 45, 60, 100, 31, 7, 28];
// ここで並び替え処理
$count = count($arr);

for( $i=0 ; $i<$count ; $i++ ) {
    for( $b=1 ; $b<$count ; $b++) {
        $a = $b - 1;
        if($arr[$a] > $arr[$b]) {
            $temp = $arr[$b];//右隣の方が大きかったらその右の数字を$tempに逃がす
            $arr[$b] = $arr[$a]; //左側を右側に代入
            $arr[$a] = $temp;//逃がしていた右側を左側に代入
        }
    }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>数字並び替えプログラム</title>
</head>
<body>
<!-- ここに並び替え後を表⽰ -->


<?php
$arr_str = "「";
foreach ( $arr as $key => $value ){
    $arr_str .= strval($value);

    if (count($arr)-1 > $key){
        $arr_str .= ",";
    }
}
$arr_str .= "」";

echo $arr_str;
?>



</body>
</html>