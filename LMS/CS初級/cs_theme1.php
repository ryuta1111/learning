<?php
//問題1
//今日の最高気温はx度でした。最低気温はx度からy度下がる予報です。
//最低気温が何度になるかを返す関数 getLowestTemperatureを定義してください。

function getLowestTemperature(int $x,int $y):int{
    //関数を完成させてください
    return $x-$y;

}
echo getLowestTemperature(25,5) .PHP_EOL;
?>


<?php
//問題2
//x個入りのキャンディの小袋をy袋持っています。キャンディが全部でいくつあるかを返す
//totalCandiesという関数を定義してください。
function totalCandies(int $x,int $y):int{
    //関数を完成させてください
    return $x*$y;
}
echo totalCandies(10,5) .PHP_EOL;
?>

<?php
//問題3
//太郎は箱の体積が気になっています。箱はすべての辺の長さが同じ立方体です。
//一辺の長さがx㎝の立方体の堆積を求める関数cubeVolumeを定義してください。
//立方体の体積を求める公式は、立方体の堆積＝１辺×１辺×１辺です。

function cubeVolume(int $x):int{
    //関数を完成させてください
    return $x*$x*$x;
}
echo cubeVolume(5) .PHP_EOL;
?>

<?php
//問題4
//箱の体積がわかって満足した太郎は、今度はその表面積がどのくらいか気になっています。
//箱は１辺の長さがx㎝の立方体形状をしています。１辺の長さx㎝が与えられるので、
//お豆腐の表面積を返す　cubeSurfaceAreaという関数を定義してください

function cubeSurfaceArea(int $x):int{
    //関数を完成させてください
    return ($x*$x)*6;
}
echo cubeSurfaceArea(5) .PHP_EOL;
?>

<?php
//問題5
//steveは旅行で日本を訪れています。日本では長さの単位はメートル法で定められていますが、
//steveはヤードポンド法に慣れているので、米を瞬時にマイルに変換しようと考えました。
//メートルmetersが与えられるので、それをマイルに変換する、metersToMilesという関数を定義してください。
//なお、1メートル＝0.000621371マイルとして計算してください。

function metersToMiles(int $meters):float{
    //関数を完成させてください
    return $meters*0.000621371;
}
echo metersToMiles(100) .PHP_EOL;
?>


