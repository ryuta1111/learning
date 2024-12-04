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

?>