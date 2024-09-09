<!-- 問題5 -->
<?php
//問題5
function perfectNumberList(int $n): string{
    $numbers = "";
    for ($i = 2; $i <= $n; $i++){
        // パーフェクトナンバーのときだけ追加する
        if (isPerfect($i)) $numbers .= $i . "-";
    }
    // 文字列が空のとき、つまりパーフェクトナンバーが存在しないときは、noneを返す
    // それ以外の時は、-を除いて返す
    return $numbers == "" ? "none" : substr($numbers,0,-1) ;
}

// 数値を受け取って、パーフェクトナンバーかどうかチェックする関数
function isPerfect($x) {
    // 以下の処理で1とxを除くので、あらかじめ1を足しておく
    $divisors = 1;
    
    // 約数を足し上げる（1とxを除く）
    for ($i = 2; $i * $i <= $x; $i++){
        if (($x % $i) == 0) {
            // 割り切れるとき、その数とそのペアを足す
            // 例えば、20/2をしたとき、2と10を足すイメージ
            $divisors += $i;
            $divisors += $x / $i;
        }
    }
    // xと合計値が同じかどうかチェックする
    return $x == $divisors;
}

echo(perfectNumberList(3)). PHP_EOL; // none
echo(perfectNumberList(6)). PHP_EOL; // 6
echo(perfectNumberList(28)). PHP_EOL; // 6-28
echo(perfectNumberList(100)). PHP_EOL; // 6-28
echo(perfectNumberList(496)). PHP_EOL; // 6-28-496
echo(perfectNumberList(1000)). PHP_EOL; // 6-28-496
echo(perfectNumberList(10000)). PHP_EOL; // 6-28-496-8128
