<?php
function needleInHaystack($haystack,$needle){
    for($i=0; $i<count($haystack); ++$i){
        if($haystack[$i] == $needle){
            return $i;
        }
    }
    return -1;
}

function printAtIndex($index,$words){
    if($index >= 0 && $index < count($words)){
        echo "Printing ->" .$words[$index]. "<- at index:" .$index.PHP_EOL;
    }else{
        echo "Index out of scope!".PHP_EOL;
    }
}

$words = ["Take","Restaurant","Running","Tea","Apples"];

printAtIndex(needleInHaystack($words,"Running"),$words);
printAtIndex(needleInHaystack($words,"Apples"),$words);
printAtIndex(needleInHaystack($words,"Train"),$words);
?>

<?php
function maxInArray($arr){
    $maxValue = $arr[0];
    for($i = 1; $i < count($arr); $i++){
        if($arr[$i] > $maxValue){
            $maxValue = $arr[$i];
        }
    }
    return $maxValue;
}

function hasLargerMax($arrOp1,$arrOp2){
    if(!$arrOp1){
        return false;
    }

    if(!$arrOp2){
        return true;
    }
    $arrOp1Max = maxInArray($arrOp1);
    $arrOp2Max = maxInArray($arrOp2);
    return $arrOp1Max > $arrOp2Max;
}

function boolString($boolVal){
    return $boolVal === false ? "false" : "true";
}

$arr1 = [23,54,2532,5464,3425,656,232];
$arr2 = [43,23,55,34];
$arr3 = [23,6464,43,54,6988];

echo boolString(hasLargerMax($arr1,$arr2)).PHP_EOL;
echo boolString(hasLargerMax($arr1,$arr3)).PHP_EOL;
?>

<?php
class Student{
    public $firstName;
    public $lastName;
    public $age;
    public $grade;
    public $id;  //追記

    function __construct($firstName, $lastName, $age, $grade){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->grade = $grade;
    }
}

function setStudentIds($students){
    for($i = 0; $i < count($students); $i++){
        $students[$i]->id = $i + 1;
        echo "Student" .$students[$i]->firstName. "has an id of" .$students[$i]->id .PHP_EOL;
    }
}

function searchForStudent($id, $listOfStudents){
    $correctId = $id - 1;
    if(!(0<=$correctId && $correctId<=count($listOfStudents)-1)){
        return "Not FOUND!";
    }

    $studentFound = $listOfStudents[$correctId];
    return $studentFound->firstName." ".$studentFound->lastName;
}

function searchForStudentLinear($studentId, $listOfStudents){
    for($i=0; $i<count($listOfStudents); $i++){
        if($listOfStudents[$i]->id == $studentId){
            $studentFound = $listOfStudents[$i];
            return $studentFound->firstName. " " .$studentFound->lastName;
        }
    }
    return "Not FOUND!";
}

$students = [];
$students[] = new Student("Paula", "Cooper",15,10);
$students[] = new Student("Daniel", "Roger",14,10);
$students[] = new Student("Trevor", "Nishi",14,9);
$students[] = new Student("Kei", "Hideyoshi",16,11);

setStudentIds($students);

echo "Search for id of 3 constant time-" .searchForStudent(3,$students).PHP_EOL;
echo "Search for id of 3 liner time-" .searchForStudentLinear(3,$students).PHP_EOL;

echo "Search for id of 10 constant time-" .searchForStudent(10,$students).PHP_EOL;
echo "Search for id of 10 liner time-" .searchForStudent(10,$students).PHP_EOL;
?>

<?php
$myPet = [
    "name"=>"Pomeranian",
    "furColor"=>"Brown",
    "born"=>"2018/05/06",
    "favoriteFood"=>"Carrot sticks"
];

echo $myPet["name"].PHP_EOL;
echo $myPet["favoriteFood"].PHP_EOL;
$myPet["napTimes"]="11:00am,3:30px,9:00pm";
echo $myPet["napTimes"].PHP_EOL;
?>

<?php
$desktopComputer = [
    "motherboard"=>"AGUX 203-4344 Extreme",
    "CPU"=>"Fantel l9 extreme 16 core 4.5Ghz",
    "RAM"=>[
        [
        "title"=>"Zolik DDR6 MegaHyper 32gb",
        "sizeMb"=>32000,
        "clockSpeedMHz"=>3000
        ],
        [
        "title"=>"Zolik DDR6 MegaHyper 32gb",
        "sizeMb"=>32000,
        "clockSpeedMHz"=>3000
        ],
    ],
    "storage"=>[
        [
            "title"=>"Skygate ST3433 4TB HDD",
            "sizeGb"=>4000,
        ],
        [
            "title"=>"Skygate ST3433 1TB SSD",
            "sizeGb"=>2000,
        ],
    ],
    "GPU"=>"Livia itx3400i",
    "powerSupply"=>"Fusair Platinum 1200W PSU DirectY 12GB VRAM"
];

echo $desktopComputer["powerSupply"].PHP_EOL;
echo $desktopComputer["storage"].PHP_EOL;
echo $desktopComputer["GPU"].PHP_EOL;
echo $desktopComputer["RAM"][0]["title"].PHP_EOL;
?>

<?php
function simpleHash($inputString){
    $numberRepresentation = 0;
    for($i=0; $i<strlen($inputString); $i++){
        $numberRepresentation += ord($inputString[$i]);
    }
    return $numberRepresentation;
}
echo simpleHash("myawesomestring").PHP_EOL;
?>

<?php
function printArray($intArr){
    $string = "[";
    for($i=0; $i<count($intArr); $i++){
        $string .= $intArr[$i]. "";
    }
    echo $string. "]" .PHP_EOL;
}

//エラトステネスのふるいのアルゴリズム
function allNPrimesSieve($n){
    $cache = array_fill(0, $n, true);

    for($currentPrime=2; $currentPrime<=ceil(sqrt($n)); $currentPrime++){
        if(!$cache[$currentPrime]) continue;
        $i = 2;
        $ip = $i * $currentPrime;
        while($ip < $n){
            $cache[$ip] = false;
            $i += 1;
            $ip = $i * $currentPrime;
        }
    }

    $primeNumbers = [];
    for($i=2; $i<count($cache); $i++){
        $predicate = $cache[$i];
        if($predicate){
            $primeNumbers[] = $i;
        }
    }
    return $primeNumbers;
}

$answer = allNPrimesSieve(100);
printArray($answer);
echo count($answer);
?>

<?php
function fibonacciNumberTailHelper($fn1, $fn2, $n){
    if($n < 1){
        return $fn1;
    }
    return fibonacciNumberTailHelper($fn2, $fn1+$fn2, $n-1);
}

function fibonacciNumberTail($n){
    return fibonacciNumberTailHelper(0,1,$n);
}
echo fibonacciNumberTail(20).PHP_EOL;
?>

<?php
function tabulationFib($n){
    $cache = array_fill(0, $n+1, -1);

    $cache[0] = 0;
    $cache[1] = 1;

    for($i=2; $i<$n+1; $i++){
        $cache[$i] = $cache[$i-1] + $cache[$i-2];
    }
    return $cache[$n];
}
echo tabulationFib(50).PHP_EOL;
?>

<?php
function memoizationFib($totalFibNumbers){
    $cache = array_fill(0, $totalFibNumbers+1, null);

    $innerMemoizationFib = function($n) use (&$cache, &$innerMemoizationFib){
        if($cache[$n] == null){
            if($n == 0){
                $cache[$n] = 0;
            }else if ($n == 1){
                $cache[$n] = 1;
            }else {
                $cache[$n] = $innerMemoizationFib($n-1) + $innerMemoizationFib($n-2);
            }
        }
        return $cache[$n];
    };
    return $innerMemoizationFib($totalFibNumbers);
}

echo memoizationFib(50).PHP_EOL;