<!-- 問題7 -->
<?php
function sumOfAllPrimes(int $n): int{
    $sumOfPrimes = 0;       // 素数の合計

    // k番目の値が素数か調べます
    for ($i = 2; $i <= $n; $i++){
        if (isPrime($i)) $sumOfPrimes += $i;
    }

    return $sumOfPrimes;
}

// 素数か判定する関数
function isPrime(int $number): bool {
    // 2からnumber-1までの値で割り切れる数があればfalseを返します
    for ($i = 2; $i < $number; $i++){
        if ($number % $i == 0) return false;
    }
    // numberが1の場合はfalseを返します
    return $number > 1;
}

echo sumOfAllPrimes(1) .PHP_EOL;
echo sumOfAllPrimes(2) .PHP_EOL;
echo sumOfAllPrimes(3) .PHP_EOL;
echo sumOfAllPrimes(100) .PHP_EOL;
