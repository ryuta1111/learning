<?php
function missingItems(array $listA, array $listB): array{
    if(array_diff($listA,$listB) === null){
        return $listA;
    }else{
        return array_diff($listA,$listB);
    }
    // $hashMap = [];
    // $result = [];
    // for($i=0; $i<count($listA); $i++){
    //     $hashMap[$listA[$i]] = $listA[$i];
    // }

    // for($j=0; $j<count($listB); $j++){
    //     if(!isset($hashMap[$listB[$j]]) === false) $result[] = $listB[$j];
    // }
    // return $result;
}
// function printArray($intArr){
//     echo "[";
//     for($i=0; $i<count($intArr); $i++){
//         echo $intArr[$i]. " ";
//     }
//     echo "]" .PHP_EOL;
// }

echo "問題1".PHP_EOL;
print_r(missingItems([1,2,3,4,5,6,7,8],[1,3,5]));
print_r(missingItems([1,2,3,4,5],[1,2])) .PHP_EOL;
print_r(missingItems([1,1],[2,2])) .PHP_EOL;
print_r(missingItems([9,8,7,6,5],[1,2])) .PHP_EOL;
print_r(missingItems([1,2],[9,8,7,6,5])) .PHP_EOL;
print_r(missingItems([3,4,5,1,2],[1,2])) .PHP_EOL;
print_r(missingItems([8,3,45,67,23,9,3],[5,7])) .PHP_EOL;
print_r(missingItems([8,3,45,67,23,9,3],[5,45])) .PHP_EOL;
print_r(missingItems([8,3,45,67,23,9,3],[3])).PHP_EOL;
print_r(missingItems([8,3,45,67,23,9,3],[])) .PHP_EOL;

?>

<?php
function intersectionOfArrayRepeats(array $intList1,array $intList2):array{
    //関数を完成させてください
    $hashMap = [];
    $result = [];

    foreach($intList1 as $num){
        if(isset($hashMap[$num])){
            $hashMap[$num]++;
        }else{
            $hashMap[$num] = 1;
        }
    }

    foreach($intList2 as $num){
        if(isset($hashMap[$num]) && $hashMap[$num] > 0){
            $result[] = $num;
            $hashMap[$num]--;
        }
    }

    sort($result);
    return $result;
}
echo "問題2".PHP_EOL;
print_r(intersectionOfArrayRepeats([3,2,1],[3,2,1])).PHP_EOL;
print_r(intersectionOfArrayRepeats([1,1,1,],[1,2,3,2,1])).PHP_EOL;
print_r(intersectionOfArrayRepeats([3,2,2,2,1,10,10],[3,2,10,10,10])).PHP_EOL;
print_r(intersectionOfArrayRepeats([2,19,11,2,6,8],[10,23,5,8,19])).PHP_EOL;
print_r(intersectionOfArrayRepeats([4,22,100,88,6,8],[1,2,3])).PHP_EOL;
print_r(intersectionOfArrayRepeats([-1,-2,-1,-1],[-1,-1,-2,-2])).PHP_EOL;
print_r(intersectionOfArrayRepeats([1,2,2,1],[2,2,2,1])).PHP_EOL;
print_r(intersectionOfArrayRepeats([4,9,5],[9,4,9,8,4])).PHP_EOL;

?>

<?php
function findXTimes(string $teams): bool{
    $teamsArray = str_split($teams);
    $counts  = array_count_values($teamsArray);
    $uniqueCounts = array_unique($counts);
    $isSameCount = count($uniqueCounts) === 1;

    if($isSameCount){
        return true;
    }else{
        return false;
    }
}

echo "問題3". PHP_EOL;
echo(findXTimes("bacddc")? "true" : "false").PHP_EOL;
echo(findXTimes("babcddc")? "true" : "false").PHP_EOL;
echo(findXTimes("babacddc")? "true" : "false").PHP_EOL;
echo(findXTimes("aaabbbcccddd")? "true" : "false").PHP_EOL;
echo(findXTimes("aaabbccdd")? "true" : "false").PHP_EOL;
echo(findXTimes("zadbchvwxbwhdxvcza")? "true" : "false").PHP_EOL;
echo(findXTimes("zadbchvwxbwhdxvczb")? "true" : "false").PHP_EOL;
echo(findXTimes("zab")? "true" : "false").PHP_EOL;
echo(findXTimes("z")? "true" : "false").PHP_EOL;

?>

<?php
function hasSameType(string $user1,string $user2):bool{
    $length1 = strlen($user1);
    $length2 = strlen($user2);
    $user1Array = "";
    $user2Array = "";
    for($i=0; $i<$length1-1; $i++){
        if($user1[$i] < $user1[$i+1]){
            $user1Array .= 2;
        }else if($user1[$i] > $user1[$i+1]){
            $user1Array .= 0;
        }else{
            $user1Array .=1;
        }
    }
    // echo $user1Array.PHP_EOL;

    for($j=0; $j<$length2-1; $j++){
        if($user2[$j] < $user2[$j+1]){
            $user2Array .= 2;
        }else if($user2[$j] > $user2[$j+1]){
            $user2Array .= 0;
        }else{
            $user2Array .= 1;
        }
    }
    // echo $user2Array.PHP_EOL;

    if($user1Array === $user2Array){
        return true;
    }else{
        return false;
    }

}
echo "問題4".PHP_EOL;
echo(hasSameType("aabb","yyza")? "true" : "false").PHP_EOL;
echo(hasSameType("aappl","bbtte")? "true" : "false").PHP_EOL;
echo(hasSameType("aappl","bbttb")? "true" : "false").PHP_EOL;
echo(hasSameType("aabb","abab")? "true" : "false").PHP_EOL;
echo(hasSameType("aappl","bktte")? "true" : "false").PHP_EOL;
echo(hasSameType("aaapppl","bbbttke")? "true" : "false").PHP_EOL;
echo(hasSameType("abcd","tso")? "true" : "false").PHP_EOL;
echo(hasSameType("abcd","jklm")? "true" : "false").PHP_EOL;
echo(hasSameType("aaabbccdddaa","jjjddkkpppjj")? "true" : "false").PHP_EOL;
echo(hasSameType("aaabbccdddaa","jjjddkkpppjd")? "true" : "false").PHP_EOL;

?>

<?php
function findPairs(array $numbers): array{
    $counts = array_count_values($numbers);
    $values = array_values($counts);
    $keys = array_keys($counts);
    $result = [];
    for($i=0; $i<count($counts); $i++){
        if($values[$i] === 2){
            $result[] = $keys[$i];
        }
    }
    sort($result);
    return $result;
}

echo "問題5" .PHP_EOL;
print_r(findPairs([10,12,13,14,15,16,16,7,7,8])) .PHP_EOL;
print_r(findPairs([1,1])) .PHP_EOL;
print_r(findPairs([1,2])) .PHP_EOL;
print_r(findPairs([1,2,3,4,5,6,6,7,7,8])) .PHP_EOL;
print_r(findPairs([1,3,6,3,1,4,6,4])) .PHP_EOL;
print_r(findPairs([3,3,-1,-1,1,6,6,4,4])) .PHP_EOL;
print_r(findPairs([30,30,30,30,1,600,600,40,40,40])) .PHP_EOL;
?>

<?php
function firstNonRepeating(string $s): int{
    $sArray = str_split($s);
    $counts = array_count_values($sArray);
    $keys = array_keys($counts);
    $values = array_values($counts);
    $result = "";
    $found = false;
    $index = -1;
    for($i=0; $i<count($counts); $i++){
        if($values[$i] === 1){
            $found = true;
            $result = $keys[$i];
            break;
        }
    }
    if(!$found){
        $index = -1;
        return $index;
    }else{
        $index = strpos($s,$result);
        return $index;
    }
}

echo "問題6" .PHP_EOL;
echo firstNonRepeating("aabbcdddeffg") .PHP_EOL;
echo firstNonRepeating("abcdabcdf") .PHP_EOL;
echo firstNonRepeating("abcddaebcdf") .PHP_EOL;
echo firstNonRepeating("aabbbccdd") .PHP_EOL;
echo firstNonRepeating("ddecdfgf") .PHP_EOL;
echo firstNonRepeating("abcdeeff") .PHP_EOL;
echo firstNonRepeating("zzcbdefghafhgbbcd") .PHP_EOL;
?>