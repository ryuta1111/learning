<?php
function maxAscilString(array $stringList):int{
    //関数を完成させてください
    $maxTotal = 0;
    $maxIndex = -1;

    for($i = 0; $i < count($stringList); $i++){
        $total = 0;
        for($x = 0; $x < strlen($stringList[$i]); $x++){
            $total += ord(strtolower($stringList[$i][$x]));
        }
        if($total > $maxTotal){
            $maxTotal = $total;
            $maxIndex = $i;
        }
    }
    return $maxIndex;
}

echo "問題1" .PHP_EOL;
echo maxAscilString(["Fantastic","Bridge","Superior","Fantastic","Operator"]).PHP_EOL;
echo maxAscilString(["HeLlo","HelLo","bridge"]).PHP_EOL;
echo maxAscilString(["eatDjrPNbj","IehUUSEMVe","hpcbBvlTOc","egvnPZgyCh"]).PHP_EOL;
echo maxAscilString(["egvnPZgyCh","bridge","Fantastic"]).PHP_EOL;

?>

<?php
function rotateByTimes($ids, $n) {
    $length = count($ids);

    for ($i = 0; $i < $length; $i++) {

        $newIndex = ($i + $n) % $length;
        $result[$newIndex] = $ids[$i];
    }
    ksort($result);
    return $result;
}
echo "問題2".PHP_EOL;
print_r(rotateByTimes([1,2,3,4,5],2)).PHP_EOL;
print_r(rotateByTimes([4,23,104,435,5002,3],26)).PHP_EOL;
print_r(rotateByTimes([4,23,104,435,5002,3],2)).PHP_EOL;

?>

<?php
function websitePagination(array $urls, int $pageSize, int $page): array{
    //関数を完成させてください
    $length = count($urls);
    $start_index = ($page -1) * $pageSize;
    $end_index = $start_index + $pageSize;

    // return array_slice($urls, $start_index, $pageSize);

    $result = [];
    for($i= $start_index; $i < $end_index &&  $i < $length; $i++ ){
        $result[] = $urls[$i];
    }
    return $result;
}
echo "問題3" .PHP_EOL;
print_r(websitePagination(["url1","url2","url3","url4","url5","url6"],4,1)).PHP_EOL;
print_r(websitePagination(["url1","url2","url3","url4","url5","url6","url7","url8","url9"],3,2)).PHP_EOL;
print_r(websitePagination(["url1","url2","url3","url4","url5","url6","url7","url8","url9"],4,3)).PHP_EOL;
?>

<?php

function hasPenalty(array $records): bool{
    //関数を完成させてください
    for($i=1; $i<count($records); $i++){
        if($records[$i] < $records[$i-1]){
            return true;
        }
    }
    return false;
}
echo "問題4" .PHP_EOL;
echo(hasPenalty([1,2,3,4])? "true": "false") .PHP_EOL;
echo(hasPenalty([4,3,2,1])? "true": "false") .PHP_EOL;
echo(hasPenalty([4,3,3,2,1])? "true": "false") .PHP_EOL;
echo(hasPenalty([150,130,130,82,51])? "true": "false") .PHP_EOL;
echo(hasPenalty([100,200,200,200,300,400])? "true": "false") .PHP_EOL;
echo(hasPenalty([80,80,80,80])? "true": "false") .PHP_EOL;
echo(hasPenalty([80,90,60,70,80])? "true": "false") .PHP_EOL;
echo(hasPenalty([150,140,58,67,1100])? "true": "false") .PHP_EOL;
echo(hasPenalty([1,28,48,85,3])? "true": "false") .PHP_EOL;
?>

<?php
function isMountain(array $height):bool{
    //関数を完成させてください
    $length = count($height);

    if($length < 3) return false;

    if($height[1] <= $height[0]){
        return false;
    }

    $peakFound = false;

    for($i=1; $i<$length; $i++){
        if($peakFound && $height[$i] > $height[$i-1]){
            return false;
        }

        if($height[$i] > $height[$i-1]){
            if($peakFound){
                return false;
            }
        }elseif($height[$i] < $height[$i - 1]){
            $peakFound = true;
        }else{
            return false;
        }
    }
    return $peakFound;
}


echo "課題5" .PHP_EOL;
echo (isMountain([1,2,3,2])? "true": "false") .PHP_EOL;
echo (isMountain([1,2])? "true": "false") .PHP_EOL;
echo (isMountain([2,1])? "true": "false") .PHP_EOL;
echo (isMountain([1,2,2,2])? "true": "false") .PHP_EOL;
echo (isMountain([1,2,3])? "true": "false") .PHP_EOL;
echo (isMountain([4,3,2,1])? "true": "false") .PHP_EOL;
echo (isMountain([1,2,2,2,3,2])? "true": "false") .PHP_EOL;
echo (isMountain([3,2,2,2,1,1])? "true": "false") .PHP_EOL;
echo (isMountain([10,20,30,400,500,100])? "true": "false") .PHP_EOL;
echo (isMountain([100,200,100,400,500,100])? "true": "false") .PHP_EOL;
echo (isMountain([100,200,300,200,100,300])? "true": "false") .PHP_EOL;
echo (isMountain([100,50,100,200,300,400])? "true": "false") .PHP_EOL;
echo (isMountain([53,158,477,994,994,867,797,755,744,621,616])? "true": "false") .PHP_EOL;

?>