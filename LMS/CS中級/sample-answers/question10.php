<!-- 問題10 -->
<?php
function oneComplement(string $bits): string{
    $output = '';
    for ($i = 0; $i < strlen($bits); $i++) {
        $output .= $bits[$i] == '0' ? '1' : '0';
    }
    return $output;
}

echo(oneComplement("00011100")). PHP_EOL; // 11100011
echo(oneComplement("10010")). PHP_EOL; // 01101
echo(oneComplement("001001")). PHP_EOL; // 110110
echo(oneComplement("0111010")). PHP_EOL; // 1000101
echo(oneComplement("1")). PHP_EOL; // 0
