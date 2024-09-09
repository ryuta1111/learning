<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CS中級_lesson</title>
</head>
<body>

<script>
 
    function ShowAlart() {
    alert("Hello world!!");
    }
    console.log(3);
    console.log(5+2);
    console.log(3-2);
    console.log(5+2);
    console.log("5+2");
    function doubleSubstring(string){
        return string+string;
    }

    let message="hello";
    console.log(message);

    //doubleSubstring(str)は文字列'hellohello'を返します。
    console.log(doubleSubstring(message));

    //この文字列に対して、subStringメソッドを使うことができ、'ellohllo'を返します
    //１文字目からdoubleSubstring(message).lengthまで部分文字列を返します。
    console.log(doubleSubstring(message).substring(1,doubleSubstring(message).length));

    //さらにその返された文字列に対してfingメソッドを使って、"ll"のインデックスを返すことができます
    //メソッドチェーン
    console.log(doubleSubstring(message).substring(1,doubleSubstring(message).length).indexOf("ll"));

    //練習1
    mail="recursion@info.com";

    //1.メソッドチェーンを使って、comという大文字を出力してください
    //ヒント：upperCase,subStringの組み合わせ

    console.log(subString(16,upperCase(message).length).indexOf("com"));

</script>

<br>
<?php
//例１
//整数を入力として受け取り、整数が完全な平方（１、４、９、１６、２５）になっているかチェックする関数isPerfectSquareを作成します。
//完全な平方とは、4(=2^2),9(=3^2),16(=4^2)のような整数の二乗である整数として定義されます。

//まずは平方根を計算する必要があるため、言語にデフォルトで組み込まれているsprt関数を使用します。
//数値xを受け取り、少数が含まれているかチェックする関数をhasDecimalとします
//平方コンの戻り値をチェックしたいので、hasDecimal(sqrt(x))の形になります。

//②
//hasDecimalは、少数が存在するか調べ、trueかfalseを返す関数
function hasDecimal($x){
    //%(mod)は余を計算する演算子です。
    //たとえば、「5/2=2余り1」なので「５％２」は１を返します
    //たとえば、2,61521/1=2余り0.61521なので、「2.61521%1」は0.61521を返します
    //fmodとはfloat modのことです
    return fmod($x,1)!=0;
}
//①
//完全な平方とは、整数の２乗である整数として定義されます。（例.4(=2^2）,9(=3^2)
//平方根に少数がない場合、完全な平方であることを意味します
function isPerfectSquare($x){
    //関数の合成を使って、xが完全な平方かどうかを確認します。
    return !hasDecimal(sqrt($x));
}

echo (isPerfectSquare(169)?"True":"False") .PHP_EOL;
echo "<br>";
echo (isPerfectSquare(35)?"True":"False") .PHP_EOL;
echo "<br>";
?>
<br>

<?php
//f=m*a
//物体に働く力＝質力＊加速度
function forceNewtons($kg,$mpss){
    return $kg*$mpss;
}

//地球上で質量　８０kgの物体には78４Nの重力がかかります
//地球の重力加速度は9.807
echo forceNewtons(80,9.807) .PHP_EOL;
echo "<br>";
//惑星名　planet を文字列で受け取り、重力加速度を返す関数を定義します。
//デフォルトで無重力とします。
function planetGravityMpss($planet){
    if($planet=="Earth"){
        return 9.80665;
    }

    if($planet=="Jupiter"){
        return 24.79;
    }
    if($planet=="Neptune"){
        return 11.15;
    }
    return 0;
}

echo planetGravityMpss("Neptune") .PHP_EOL;
echo "<br>";
//関数を合成します
//関数の呼び出しが出力がデータを返すとき、データとして扱われるのでそれを別の関数の入力として使用することができます。

//地球上で質量80kgの物体に働く重力
echo forceNewtons(80,9.80665) .PHP_EOL;
echo "<br>";
echo forceNewtons(80,planetGravityMpss("Earth")) .PHP_EOL;
echo "<br>";
//木星上で質量８０kgの物体に働く重力
echo forceNewtons(80,planetGravityMpss("Jupiter")) .PHP_EOL;
echo "<br>";
//海王星上で質量１００kgの物体に働く重力を計算してみましょう。
echo forceNewtons(100,planetGravityMpss("Neptune")) .PHP_EOL;
echo "<br>";
//無重力状態の質力１００kgの物体の重さを計算してみましょう
echo forceNewtons(100,0) .PHP_EOL;
echo "<br>";
?>

<br>

<?php
function forceNewtons2($kg,$mpss){
    return $kg*$mpss;
}

function planetGravityMpss2($planet){
    if($planet=="Earth"){
        return 9.80665;
    }

    if($planet=="Jupiter"){
        return 24.79;
    }

    if($planet=="Neptune"){
        return 11.15;
    }

    return 0;
}

//ポンドを受け取ってkgを返す関数poundsToKgを新しく定義します。
//ポンド＊0.453592=キロ
function poundsToKg($pounds){
    return $pounds*0.453592;
}

//海王星上の８０キロの物体に働く力
echo forceNewtons2(80,planetGravityMpss2("Neptune")) .PHP_EOL;
echo "<br>";
//海王星上の８０ポンドの物体に働く力
echo forceNewtons2(poundsToKg(80),planetGravityMpss("Neptune")) .PHP_EOL;
echo "<br>";
//木星上の１００ポンドの物体に働く重力を計算してみましょう（1124.454568）
echo forceNewtons2(poundsToKg(100),planetGravityMpss2("Jupiter")) .PHP_EOL;
echo "<br>";
//地球上の５５ポンドの物体に働く重力を計算してみましょう
echo forceNewtons2(poundsToKg(55),planetGravityMpss2("Earth")) .PHP_EOL;
echo "<br>";

?>

<br>

<?php
function forceNewtons3($kg,$mpss){
    return $kg*$mpss;
}

function planetGravityMpss3($planet){
    if($planet=="Earth"){
        return 9.80665;
    }

    if($planet=="Jupiter"){
        return 24.79;
    }

    if($planet=="Neptune"){
        return 11.15;
    }

    return 0;
}

function poundsToKg2($pounds){
    return $pounds*0.453592;
}

//ニュートン＊メートルによって、ジュールを求めることができます
function joulesByWork($newtons,$meters){
    return $newtons*$meters;
}

//地球上で質量８０kgの物体に働く重力「N」
echo forceNewtons3(80,planetGravityMpss3("Earth")) .PHP_EOL;
echo "<br>";
//地球上で８０kgを１０m移動するのに必要なエネルギー量「J」
echo joulesByWork(forceNewtons3(80,planetGravityMpss3("Earth")),10) .PHP_EOL;
echo "<br>";
//地球上で８０lb（ポンド）を１０m移動するのに必要なエネルギー量
echo joulesByWork(forceNewtons(poundsToKg(80),planetGravityMpss3("Earth")),10) .PHP_EOL;
echo "<br>";
//海王星上で１０kgを１００m移動するのに必要なエネルギー料を計算して下さい
echo joulesByWork(forceNewtons3(10,planetGravityMpss3("Neptune")),100) .PHP_EOL;
echo "<br>";
//地球上で５０lbを１００m移動するのに必要なエネルギー料を計算して下さい
echo joulesByWork(forceNewtons3(poundsToKg(50),planetGravityMpss3("Earth")),100) .PHP_EOL;
echo "<br>";
?>

<br>

<?php
function forceNewtons4($kg,$mpss){
    return $kg*$mpss;
}

function planetGravityMpss4($planet){
    if($planet=="Earth"){
        return 9.80665;
    }

    if($planet=="Jupiter"){
        return 24.79;
    }

    if($planet=="Neptune"){
        return 11.15;
    }

    return 0;
}

function poundsToKg3($pounds){
    return $pounds*0.453592;
}

//ニュートン＊メートルによって、ジュールを求めることができます
function joulesByWork2($newtons,$meters){
    return $newtons*$meters;
}

//関数の合成を使って新しい関数を定義します
//関数の合成を使うことによって、各関数が再利用可能でデバックしやすくなり、さらにソフトウェアの複雑度を下げることができます。
//以下の関数を関数の合成を使わずにすべての処理を入れてしまうと、関数内の処理が複雑化し、デバックしづらく、可読性の低いコードになってしまいます。
function enegyWorkingPoundsByPlanet($planet,$pounds,$meters){
    return joulesByWork2(forceNewtons4(poundsToKg3($pounds),planetGravityMpss4($planet)),$meters);
}
//木星で６５lbの物体を３５m移動するのに必要なエネルギー料を返します。
echo enegyWorkingPoundsByPlanet("Jupiter",65,35) .PHP_EOL;
echo "<br>";
?>

<br>

<?php
//random関数
//ランダムライブラリを使って、ランダムな整数を取得します。
echo rand() .PHP_EOL;
echo "<br>";

//minとmaxを設定することもできます。
//min以上max以下
echo rand(0,2) .PHP_EOL;
echo "<br>";

//文字列の中のランダムな文字を取得します
$s="Hello";
echo $s[rand(0,strlen($s)-1)] .PHP_EOL;
echo "<br>";

//5以上100以下の中から、ランダムな整数を出力してみましょう
echo rand(5,100) .PHP_EOL;
echo "<br>";

//文字列abcdefghijkからランダムな文字を出力してみましょう
$x="abcdefghijk";
echo $x[rand(0,strlen($x)-1)] .PHP_EOL;
echo "<br>";

?>

<?php
//ord関数
#ord()関数は、文字列の最初の文字のASCII値を返します
echo ord("A") .PHP_EOL;
echo "<br>";
echo ord("Z") .PHP_EOL;
echo "<br>";
echo ord("a") .PHP_EOL;
echo "<br>";
echo ord("z") .PHP_EOL;
echo "<br>";

echo ord("%") .PHP_EOL;
echo "<br>";
echo ord("@") .PHP_EOL;
echo "<br>";
echo ord("?") .PHP_EOL;
echo "<br>";

echo ord("abcdef") .PHP_EOL;
echo "<br>";


//chr関数はASXII値の文字を変えします。ord 関数の逆です。
echo chr(65) .PHP_EOL;
echo "<br>";
echo chr(63) .PHP_EOL;
echo "<br>";
echo chr(37) .PHP_EOL;

?>

<br>

<?php
//よくない例として、すべての処理を１つの関数に入れます
//デバッグのしづらい、可読性の低い、複雑なコード
function randomCharEvenOrOdd($s){
    //strlen(s)未満のランダムな整数
    $randomIndex=rand(0,strlen($s));


    //文字
    $character=$s[$randomIndex];

    $isEven=false;

    //ord関数でASCII値を手に入れます
    //ランダムなインデックスの文字の文字コードが偶数ならtrueと書き換えます
    if(ord($character)%2===0){
        $isEven=true;
    }

    $message="The char [".$character."] at index" .$randomIndex;

    if($isEven){
        $message.= "is Even";
    }else{
        $message.= "is Odd";
    }

    return $message;
}

//関数の呼び出し
echo randomCharEvenOrOdd("Dont tell me lies") .PHP_EOL;

?>

<br>

<?php
#②文字のASCII値が奇数か偶数かチェックする関数
function isCharCodeEven($stringChar){
    $isEven=false;
    //ordで文字コードを手に入れます
    if(ord($stringChar)%2===0){
        $isEven = true;
    }
    return $isEven;
}

//①インデックスと文字列を受け取り、messageを生成する関数
function chosenCharacter($index,$string){
    return "The char [".$string[$index]."] at index" .$index;
}

//本体の関数
function randomCharEvenOrOddDecomposed($s){
    //ランダムなインデックスを取得
    $randomIndex=rand(0,strlen($s));

    //関数の分解①
    $message=chosenCharacter($randomIndex,$s);

    //関数の分解②
    if(isCharCodeEven($s[$randomIndex])){
        $message.= "is Even";
    }else{
        $message.= "is Odd";
    }

    return $message;
}

echo randomCharEvenOrOddDecomposed("Dont tell me lies") .PHP_EOL;

?>

<br>

<?php
//7＊nを計算する関数
//自信を使って定義する再起的処理
function multipleOf7($n){
    //nが０になったら０を返します
    if($n<=0){
        return 0;
    }
    //7＊nは{7*(n-1)}+7と書き換え可能
    return multipleOf7($n-1)+7;
}
//7*3の計算
echo multipleOf7(3) .PHP_EOL;
echo "<br>";
//7*11の計算
echo multipleOf7(11) .PHP_EOL;
//7*3を実行した場合を例に見てみましょう
//インデントを下げるごとに、自信を呼び出す再起的処理の実行しています
//コード内のコメントにあるカッコ付き番号を見て、１つ１つの動きを確認してみましょう

//multipleOf7(3)を実行
//(1)multipleOf(3)を実行。nには３が入っています
//(2)n=2なので条件に当てはまらずif文はスルーします
//(3)+演算子より関数の呼び出しの方が優先順位が高いため、multipleOf7(3-1)を呼びます

    //(1)multipleOf(2)を実行。nには２が入っています
    //(2)n=2なので条件に当てはまらずif文はスルーします
    //(3)+演算子より関数の呼び出しの方が優先順位が高いため、multipleOf7(2-1)を呼びます

        //(1)multipleOf(1)を実行。nには1が入っています
        //(2)n=1なので条件に当てはまらずif文はスルーします
        //(3)+演算子より関数の呼び出しの方が優先順位が高いため、multipleOf7(1-1)を呼びます

        //(1)multipleOf(0)を実行。nには0が入っています
        //(2)n=0なので条件に当てはまり、0を返します

        //(3)返された０がmultipleOf(0)に代入され０＋７をmultiple(1)の戻り値として返します
    //(3)返された7がmultipleOf(1)に代入され7＋７をmultiple(2)の戻り値として返します
//(3)返された14がmultipleOf(2)に代入され14＋７をmultiple8(3)の戻り値として返します
//最初の呼び出しもとmultipleOf(3)へ21が返され、21が出力されます

//f(3)
//7+f(2)
//  7+f(1)
//      7+f(0)
//          f(0)<-7

?>

<br>

<?php
//m*nを計算する関数
function multiply($m,$n){
    if($n<=0){
        return 0;
    }

    return multiply($m,$n-1)+$m;
}

//5*4を再起的に計算
echo multiply(5,4) .PHP_EOL;
echo "<br>";

//7*3を再起的に計算
echo multiply(7,3) .PHP_EOL;
?>

<?php
//sunstring関数で文字列の最後を切り取ることができます
echo substr("abcde",0,-1) .PHP_EOL;
echo "<br>";

//文字sが与えられるので、sの長さを返す関数をlengthOfStringとします
function lengthOfString($s){
    //ベースケースが存在しないと、無限ループに陥ります
    if($s==""){
        return 0;
}
//関数を自信を使って再起的に定義します
//I(ABCDE)=I(ABCD)+１のように、文字列の末尾を切り取り、因数として渡します
return lengthOfString(substr($s,0,-1))+1;
}

echo lengthOfString("ABCDE") .PHP_EOL;
echo "<br>";
echo lengthOfString("recursion") .PHP_EOL;

?>

<br>

<?php
//1からnまでの総和を計算する関数s
function summation($n){
    if($n<=0){
        return 0;
    }
    return summation($n-1)+$n;
}

//1から5までの総和を計算する
echo summation(5) .PHP_EOL;
echo "<br>";
//１から10までの総和を計算
echo summation(10) .PHP_EOL;

?>

<br>

<?php
//1からnまで整数の積を計算する関数
function factorial($n){
    if($n <=0){
        return 1;
    }

    return factorial($n-1)*$n;
}

//1から5までの整数の積を計算
echo factorial(5) .PHP_EOL;
echo "<br>";
//1から10までの整数の積を計算
echo factorial(10) .PHP_EOL;

?>
<br>



</body>
</html>