<?php
function diceStreakGamble(array $player1,array $player2,array $player3,array $player4){
    $players = [$player1,$player2,$player3,$player4];
    $scoreArray = [];
    $valueTrackingArray = [];

    foreach($players as $player){
        $count = 0;
        $currentValues = [];

        for($x=0; $x<count($player); $x++){
            if($x === 0){
                $count += 4;
                $currentValues[] = $player[$x];
            }else if($x > 0 && $player[$x] > $player[$x-1]){
                $count += 4;
                $currentValues[] = $player[$x];
            }else if($x > 0 && $player[$x] === $player[$x-1]){
                $count += 4;
                $currentValues[] = $player[$x];
            }else{
                $count = 4;
                $currentValues = [];
                $currentValues[] = $player[$x];
            }
        }
        $scoreArray[] = $count;
        $valueTrackingArray[] = $currentValues;
    }
    $maxValue = max($scoreArray);
    $maxIndex = array_search($maxValue, $scoreArray);

    return "Winner: Player " . ($maxIndex + 1) . " won: $" . $scoreArray[$maxIndex] . " by rolling " . implode(", ", $valueTrackingArray[$maxIndex]);
}

echo "問第１" .PHP_EOL;

echo diceStreakGamble([1,2,3],[3,4,2],[4,2,4],[6,16,4]) .PHP_EOL;

echo diceStreakGamble([1,2,3,-1,4,5],[3,4,2],[4,2,4],[6,16,4]).PHP_EOL;

echo diceStreakGamble([4,3,2,1],[4,3,2,1],[4,3,2,1],[4,3,2,1]).PHP_EOL;

echo diceStreakGamble([1,2,3],[3,4,2],[4,2,4],[6,16,26]).PHP_EOL;

echo diceStreakGamble([1,2,1],[3,4,2],[4,2,4],[6,16,26]).PHP_EOL;

echo diceStreakGamble([5,19,19,20],[23,23,32,5],[20,23,30,23],[12,20,24,29]).PHP_EOL;

echo diceStreakGamble([10,9,9,9,1,4],[10,9,9,9,1,4],[0,1,3,6,2,8],[1,2,2,1,0,1]).PHP_EOL;

echo diceStreakGamble([2,45,56,6,4,10,34,20,3,4],[20,45,56,6,4,3,5,3,2,20],[3,4,20,20,21,30,33,35,35,36],[3,4,20,45,56,6,4,3,5,9]).PHP_EOL;

?>


<?php
function isParenthesesValid(string $parentheses): bool{
    $stack = [];
    $pairs = [
        '}' => '{',
        ']' => '[',
        ')' => '('
    ];

    $length = strlen($parentheses);
    for($i=0; $i<$length; $i++){
        $char = $parentheses[$i];

        if(in_array($char, ['{', '[', '('])){
            array_push($stack, $char);
        }
        else if(in_array($char, ['}', ']', ')'])){
            if(empty($stack) || array_pop($stack) !== $pairs[$char]){
                return false;
            }
        }
    }

    return empty($stack);


    // $length = strlen($parentheses)-1;
    // if($parentheses[0] === "}" || $parentheses[0] === "]" || $parentheses[0] === ")"){
    //     return false;
    // }
    // if($parentheses[$length] === "{" || $parentheses[$length] === "[" || $parentheses[$length] === "("){
    //     return false;
    // }
    // $i = 0;
    // $countPreParentheses1 = 0;
    // $countPreParentheses2 = 0;
    // $countPreParentheses3 = 0;
    // while($i < $length+1){
    //     if($parentheses[$i] === "{"){
    //         $countPreParentheses1 += 1;
    //     }elseif($parentheses[$i] === "["){
    //         $countPreParentheses2 += 1;
    //     }elseif($parentheses[$i] === "("){
    //         $countPreParentheses3 += 1;
    //     }
    //     $i++;
    // }
    // return $countPreParentheses1;
    // return $countPreParentheses2;
    // return $countPreParentheses3;

    // $countTailParentheses1 = 0;
    // $countTailParentheses2 = 0;
    // $countTailParentheses3 = 0;

    // while($i < $length+1){
    //     if($parentheses[$i] === "{"){
    //         $countTailParentheses1 += 1;
    //     }elseif($parentheses[$i] === "["){
    //         $countTailParentheses2 += 1;
    //     }elseif($parentheses[$i] === "("){
    //         $countTailParentheses3 += 1;
    //     }
    //     $i++;
    // }
    // return $countTailParentheses1;
    // return $countTailParentheses2;
    // return $countTailParentheses3;

    // if($countPreParentheses1 === $countTailParentheses1 || $countPreParentheses2 === $countTailParentheses2 || $countPreParentheses3 === $countTailParentheses3){
    //     return true;
    // }else {
    //     return false;
    // }
}

echo "問題2" .PHP_EOL;
echo(isParenthesesValid("{}") ? "true" : "false") .PHP_EOL;

echo(isParenthesesValid("[{}]") ? "true" : "false") .PHP_EOL;

echo(isParenthesesValid("[{(]") ? "true" : "false") .PHP_EOL;

echo(isParenthesesValid("(){}[]") ? "true" : "false") .PHP_EOL;

echo(isParenthesesValid("((()(())))") ? "true" : "false") .PHP_EOL;

echo(isParenthesesValid("[{(}])") ? "true" : "false") .PHP_EOL;

echo(isParenthesesValid("]][}{({()){}(") ? "true" : "false") .PHP_EOL;

echo(isParenthesesValid("{(([])[])[]}[]") ? "true" : "false") .PHP_EOL;

echo(isParenthesesValid("{(([])[])[]]}")? "true" : "false") .PHP_EOL;

echo(isParenthesesValid("{{[[(())]]}}") ? "true" : "false") .PHP_EOL;
?>

<?php
function stockSpan(array $stocks):array{
    $span = [];
    $stack = [];

    foreach($stocks as $i => $price){
        while(!empty($stack) && $stocks[$stack[count($stack) - 1]] <= $price){
            array_pop($stack);
        }

        if(empty($stack)){
            $span[$i] = $i + 1;
        }else {
            $span[$i] = $i - $stack[count($stack) - 1];
        }

        $stack[] = $i;
    }
    return $span;



    // $i=0;
    // $stock = [];
    // $maxIndex = 0;
    // $length = count($stocks);
    // while($i<$length){
    //     if($i == 0){
    //         array_push($stock,"1");
    //     }else if($i>0 && $stocks[$i] < $stocks[$i-1]){
    //         array_push($stock,1);
    //     }else if($i>0 && $stocks[$i] > $stocks[$i-1]){
    //         array_push($stock,$i+1);
    //         $maxIndex = $i+1;
    //     }else if($i>0 && $stocks[$i] === $stocks[$maxIndex]){
    //         array_push($stock, $maxIndex);
    //     }
    //     $i++;
    // }
    // return $stock;
}

echo "問題3";
var_export(stockSpan([30,50,60,20,30,64,80]));

?>