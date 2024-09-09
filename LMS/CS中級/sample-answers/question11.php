<!-- 問題11 -->
<?php
function twosComplement(string $bits): string{
    $twoComplement = oneComplement($bits);
    $len = strlen($twoComplement);
    $carryOut = false;

    for ($i = $len - 1; $i >= 0; $i--) {
        if ($twoComplement[$i] == '0') {
            $twoComplement[$i] = '1';
            $carryOut = false;
            break;
        } else {
            $twoComplement[$i] = '0';
            $carryOut = true;
        }
    }
    return $carryOut ? '1' . $twoComplement : $twoComplement;
}

function oneComplement($bits){
    $output = '';
    for ($i = 0; $i < strlen($bits); $i++) {
        $bits[$i] == '0' ? $output .= '1' : $output .= '0';
    }
    return $output;
}

echo(twosComplement("00011100")). PHP_EOL; // 11100100
echo(twosComplement("10010")). PHP_EOL; // 01110
echo(twosComplement("001001")). PHP_EOL; // 110111
echo(twosComplement("0111010")). PHP_EOL; // 1000110
echo(twosComplement("1")). PHP_EOL; // 1
echo(twosComplement("0")). PHP_EOL; // 10
echo(twosComplement("000")). PHP_EOL; // 1000