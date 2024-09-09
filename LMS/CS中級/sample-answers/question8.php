<!-- 問題8 -->
<?php
function decimalToBinary(int $decNumber): string{
    $binary = '';
    $currentBinary = 0;
    while ($decNumber >= 0) {
        $currentBinary = $decNumber % 2;
        $binary = $currentBinary . $binary;
        $decNumber = floor($decNumber/2);
        if($decNumber == 0) break;
    }

    return $binary;
}

echo(decimalToBinary(60)). PHP_EOL; // 111100
echo(decimalToBinary(26)). PHP_EOL; // 11010
echo(decimalToBinary(35)). PHP_EOL; // 100011
echo(decimalToBinary(100)). PHP_EOL; // 1100100
echo(decimalToBinary(505)). PHP_EOL; // 111111001
