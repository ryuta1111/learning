<?php
function existsWithinList($listL, $dataY){
    $hashMap = array();

    for($i=0; $i<count($listL); $i++){
        $hashMap[$listL[$i]] = $listL[$i];
    }
    return is_null($hashMap[$dataY]) ? false : true;
}

function printBool($bool){
    echo $bool === true ? "True" : "False" .PHP_EOL;
}

$sampleList = [3,10,23,3,4,50,2,3,4,18,6,1,-2];
echo printBool(existsWithinList($sampleList,23)) .PHP_EOL;
echo printBool(existsWithinList($sampleList,-2)) .PHP_EOL;
echo printBool(existsWithinList($sampleList,100)) .PHP_EOL;
?>

<?php
function printArray($intArr){
    echo "[";
    for($i=0; $i<count($intArr); $i++){
        echo $intArr[$i]. " ";
    }
    echo "]" .PHP_EOL;
}

function linearSearchExists($haystack,$needle){
    for($i=0; $i<count($haystack); $i++){
        if($haystack[$i] === $needle) return true;
    }
    return false;
}

function listIntersection($targetList, $searchList){
    $results = [];
    for($i=0; $i<count($searchList); $i++){
        if(linearSearchExists($targetList,$searchList[$i])) $results[] = ($searchList[$i]);
    }
    return $results;
}

printArray(listIntersection([1,2,3,4,5,6],[1,4,4,5,8,9,10,11]));
printArray(listIntersection([3,4,5,10,2,20,4,5],[4,20,22,2,2,2,10,1,4]));
printArray(listIntersection([2,3,4,54,10,5,8,11],[3,10,23,10,0,5,9,2]));
?>

<?php
function printArray2($intArr){
    echo "[";
    for($i=0; $i<count($intArr); $i++){
        echo $intArr[$i]. " ";
    }
    echo "]" .PHP_EOL;
}

function listIntersection2($targetList, $searchList){
    $hashMap = [];
    $result = [];

    for($i=0; $i<count($targetList); $i++){
        $hashMap[$targetList[$i]] = $targetList[$i];
    }

    for($j=0; $j<count($searchList); $j++){
        //!issetを使用
        if(!isset($hashMap[$searchList[$j]]) === false) $result[] = $searchList[$j];
    }
    return $result;
}

printArray2(listIntersection2([1,2,3,4,5,6],[1,4,4,5,8,9,10,11]));
printArray2(listIntersection2([3,4,5,10,2,20,4,5],[4,20,22,2,2,2,10,1,4]));
printArray2(listIntersection2([2,3,4,54,10,5,9,11],[3,10,23,10,0,5,9,2]));

?>

<?php
function printKeys($arrayKeys){
    echo "[";
    for($i=0; $i<count($arrayKeys); $i++){
        echo $arrayKeys[$i]. " ";
    }
    echo "]" .PHP_EOL;
}

function printDuplicates($inputList){
    $hashMap = [];
    for($i=0; $i<count($inputList); $i++){
        //!issetを使用
        if(!isset($hashMap[$inputList[$i]])) $hashMap[$inputList[$i]] = 1;
        else $hashMap[$inputList[$i]] = $hashMap[$inputList[$i]] + 1;
    }

    printKeys(array_keys($hashMap));
    foreach($hashMap as $key => $value){
        echo $key. "has" .$value. "duplicates" .PHP_EOL;
    }
}

printDuplicates([1,1,1,1,1,2,2,2,2,2,3,3,3,4,5,6,6,6,6,7,8,8,8,9,9,9]);
printDuplicates([7,7,6,6,3,5,3,9,2,5,5,4,6,4,1,4,1,7,2]);