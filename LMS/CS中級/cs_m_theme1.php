<?php
//問題1
//図のように三角形の数列があります。天才Pascalは小学生に時のこの並びを見て規則的な発見をしました。
//自然数xが与えられるので、x番目の三角形に含まれるドットの数を返す、numberOfDotsというかんすを再起を使って作成して下さい

function numberOfDots(int $x):int{
    //関数を完成させて下さい
    if($x<=0){
        return 0;
    }else{
        return numberOfDots ($x-1)+$x;
    }
}

echo numberOfDots(2) .PHP_EOL;
echo "<br>";
echo numberOfDots(4) .PHP_EOL;
echo "<br>";
echo numberOfDots(5) .PHP_EOL;
echo "<br>";
echo numberOfDots(10) .PHP_EOL;
echo "<br>";


?>

<br>

<?php
//問題２
//１辺１の正方形が１つあります。これを１列目として、２列目に１辺が２の正方形を２つ追加します。
//同様に　１辺の長さと正方形の個数を列ごとに増やしていくと、x列目には１辺xのm正方形がx個追加されることになります。
//自然数xが与えられるので、１辺が１の正方形から１辺xの正方形まで、すべての正方形の面積を足し合わせた合計値を返すtotalSquareAreaという関数を再起によって作成して下さい。
//総和や３乗を計算するために必要な他の関数は用いても構いません

function totalSquareArea(int $x):int{
    //関数を完成させて下さい
    if($x<=0){
        return 0;
    }else{
        return totalSquareArea ($x-1)+$x*$x*$x;
    }
}

echo totalSquareArea(1) .PHP_EOL;
echo "<br>";
echo totalSquareArea(2) .PHP_EOL;
echo "<br>";
echo totalSquareArea(5) .PHP_EOL;
echo "<br>";
echo totalSquareArea(12) .PHP_EOL;
echo "<br>";

?>

<br>


<?php
//問題3
//micaelaは今日昼寝をしてしまったため、なかなか寝つくことができません。そこで羊を１匹ずつ数え手眠りを待つことにしました。
//０以上の整数countが与えられるので、夢の中でcount匹羊を数える、sheepsという関数を作成して下さい
function sheeps(int $count):string{
    //関数を完成させてください
    if($count<=0){
        return "";
    }else{
        return  sheeps($count-1) .$count . "sheep~";
}
}
echo sheeps(2) .PHP_EOL;
echo "<br>";
echo sheeps(4) .PHP_EOL;
echo "<br>";
echo sheeps(5) .PHP_EOL;
echo "<br>";
echo sheeps(10) .PHP_EOL;
echo "<br>";


?>

<br>



<?php
//問題4
//catherineは与えられた単語や文章を逆側から読み上げる遊びを友達とやっています。
//文字列stringが与えられるので、stringを反転した文字列を返すreverseStringという関数を佐伯を使って定義して下さい
function reverseString(string $s):string{
    //関数を完成させてください
    if(strlen($s)<1){
        return $s;
    }else{
    return $s[-1] . reverseString(substr($s,0,-1));
    }
}

echo reverseString("abcd") .PHP_EOL;
echo "<br>";
echo reverseString("recursion") .PHP_EOL;
echo "<br>";
echo reverseString("I am a software engineer") .PHP_EOL;

?>

