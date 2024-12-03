<?php
function isPangram(string $string): bool{
    //関数を完成させてください
    $string = strtolower($string);
    $alphabet = range('a', 'z');

    foreach ($alphabet as $letter){
        if(strpos($string,$letter) === false){
        return false;
        }
    }
    return true;
}

echo "問題1" .PHP_EOL;
//true
echo (isPangram("we promptly judged antique ivory buckles for the next prize")? "true": "false").PHP_EOL;
//true
echo (isPangram("We promptly judged Antique ivory buckles for the next prize")? "true": "false").PHP_EOL;
//true
echo (isPangram("a quick brown fox jumps over the lazy dog")? "true": "false").PHP_EOL;
//true
echo (isPangram("sphinx of black quartz judge my vow")? "true": "false").PHP_EOL;
//false
echo (isPangram("sheep for antique zebra when quick red vixens jump over the yacht")? "true": "false").PHP_EOL;
//false
echo (isPangram("the Japanese yen for commerce is still well-known")? "true": "false").PHP_EOL;
//false
echo (isPangram("dan took the deep dive down the rabbit hole")? "true": "false").PHP_EOL;

?>

<?php
function fireEmployees(array $employees,array $unemployed): array{
    //関数を完成させてください
    return array_diff($employees, $unemployed);
}

echo "問題2" .PHP_EOL;
print_r(fireEmployees(["Steve","David","Mike","Lake","Julian"],["Donald","Lake"])) .PHP_EOL;
print_r(fireEmployees(["Donald","Lake"],["Donald","Lake"])) .PHP_EOL;
print_r(fireEmployees(["Steve","David","Mike","Lake","Julian"],[])) .PHP_EOL;
print_r(fireEmployees(["Mike","Steve","David","Mike","Donald","Lake","Julian"],["Mike"])) .PHP_EOL;
print_r(fireEmployees(["Kailey","Kailey"],["Kailey"])) .PHP_EOL;

?>

<?php
function primesUpToNCount(int $n): int{
    //関数を完成させてください
    if($n <= 1) return 0;

    $isPrime = array_fill(0, $n + 1, true);

    $isPrime[0] = $isPrime[1] = false;

    for($i = 2; $i * $i <= $n; $i++){
        if($isPrime[$i]){
            for($j = $i * $i; $j <= $n; $j += $i){
                $isPrime[$j] = false;
            }
        }
    }
    return count(array_filter($isPrime));
}

echo "問題3" .PHP_EOL;
echo primesUpToNCount(2) .PHP_EOL;
echo primesUpToNCount(3) .PHP_EOL;
echo primesUpToNCount(5) .PHP_EOL;
echo primesUpToNCount(13) .PHP_EOL;
echo primesUpToNCount(18) .PHP_EOL;
echo primesUpToNCount(89) .PHP_EOL;
echo primesUpToNCount(97) .PHP_EOL;
echo primesUpToNCount(100) .PHP_EOL;
echo primesUpToNCount(367) .PHP_EOL;
echo primesUpToNCount(673) .PHP_EOL;
echo primesUpToNCount(1000) .PHP_EOL;
echo primesUpToNCount(3406) .PHP_EOL;
echo primesUpToNCount(20034) .PHP_EOL;

?>

<?php
function shuffledPositions(array $arr, array $shuffledArr):array{
    //関数を完成させてください
    $positions = [];
    foreach($arr as $num){
        $positions[] = array_search($num, $shuffledArr);
    }
    return $positions;
}

echo "課題4" .PHP_EOL;
print_r(shuffledPositions([2,32,45],[45,32,2])).PHP_EOL;
print_r(shuffledPositions([10,11,12,13],[12,10,13,11])).PHP_EOL;
print_r(shuffledPositions([10,11,12,13],[10,11,12,13])).PHP_EOL;
print_r(shuffledPositions([1350,181,1714,375,1331,943,735],[1714,1331,735,375,1350,181,943])).PHP_EOL;
?>

<?php
function shuffleSuccessRate(array $arr, array $shuffledArr):int{
    $totalItems = count($arr);
    $count = 0;
    for($i = 0; $i < $totalItems; $i++){
        if($arr[$i] === $shuffledArr[$i]){
            $count ++;
        }
    }
    $movedCount = floor((($totalItems-$count)/$totalItems) * 100);
    return $movedCount;
}

echo "問題5" .PHP_EOL;
echo shuffleSuccessRate([2,32,45],[45,32,2]).PHP_EOL;
echo shuffleSuccessRate([2,32,45],[45,2,32]).PHP_EOL;
echo shuffleSuccessRate([2,32,45],[2,32,45]).PHP_EOL;
echo shuffleSuccessRate([2,32,45,67],[2,32,67,45]).PHP_EOL;
echo shuffleSuccessRate([2,32,45,67,89],[2,89,67,45,32]).PHP_EOL;
echo shuffleSuccessRate([119,726,398,187,943,486,728,305,968,754,650,
536,969,305,111,225,708,806,40,969],[708,969,111,398,754,726,536,
943,486,305,969,40,650,806,187,225,968,119,728,305]).PHP_EOL;
?>



