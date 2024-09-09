<?php
//問題1
//文字列sと数値iを受け取り、i番目に「_」を入れた文字列を返す、insertUnderscoreAtという関数を作成して下さい
//数値iが受け取った文字列のサイズ以上の場合、文字列はそのまま返されます。

function insertUnderscoreAt(string $s,int $i){
    //関数を完成させて下さい
    return substr_replace($s,"_",$i,0);
}

echo insertUnderscoreAt("stevejobs",8) .PHP_EOL;
echo insertUnderscoreAt("stevejobs",9) .PHP_EOL;
echo insertUnderscoreAt("stevejobs",0) .PHP_EOL;

?>

<?php
//問題２
//jacobは息子の学校の宿題を手伝ってあげています。答えを教えてしまっては勉強の意味がないので、答えの最後の４文字だけを教えてあげることにしました。
//文字列stringを受け取り、最後の４文字以外をHint is:で置き換える、lasrFourHintという関数を作成して下さい。
//また、文字列が６文字未満の場合は、There is no Hintと返して下さい

function lastFourHint(string $stringInput):string{
    //関数を完成させて下さい
    if(strlen($stringInput)>=6) return "Hint is :".substr($stringInput,-4,4);
    else return "There is no Hint";
}

echo lastFourHint("text") .PHP_EOL;
echo lastFourHint("Ocean") .PHP_EOL;
echo lastFourHint("the ocean is blue") .PHP_EOL;
echo lastFourHint("abcdef") .PHP_EOL;

?>

<?php
//問題３
//paulは自身のサービスのβテストユーザーを、メールアドレス登録によって受け付けようと思いました。
//その際、ユーザーのメールアドレスが有効なものかをチェックするプログラムが必要になります。
//あるメールアドレスemailを受け取るので、それが正しいものであればtrueを、そうでなければfalseを返すisValidEmailという関数を作成して下さい。
//ここでの正しいアドレスというのは以下の４つの条件を満たすものを指します。
//・「＠」から始まらないこと
//・スペースがないこと
//・「＠」を１つのみ含んでいること
//・「＠」の後に「.」があること

function isValidEmail(string $email) :bool{
    $atLocation=strpos($email,"@");
    if(substr($email,0,1)=="@") return false;
    else if(strpos($email," ")) return false;
    else if(strpos($email,"@")==1) return false;
    else if(strpos(substr($email,$atLocation),".")==0) return false;
    else return true;
}


echo (isValidEmail("ccc@aaa.com")?"True":"False") .PHP_EOL;
echo (isValidEmail("@aaa.com")?"True":"False") .PHP_EOL;
echo (isValidEmail("cc c@aaa.com")?"True":"False") .PHP_EOL;
echo (isValidEmail("c@cc@aaa.com")?"True":"False") .PHP_EOL;
echo (isValidEmail("ccc@aaacom")?"True":"False") .PHP_EOL;
echo (isValidEmail("c.cc@aaacom")?"True":"False") .PHP_EOL;

?>

<?php
//問題4
//文字列stringを受け取り、文字数の半分を文字列の真ん中から返す、,middleSubstringという関数を定義して下さい。
//（文字数が２以下の場合は、最初の文字を返します。）

function middleSubstring(string $stringInput):string{
    //関数を完成させて下さい
    $x=floor(strlen($stringInput)/2);
    $y=ceil($x/2);
    if(strlen($stringInput)==2) return substr($stringInput,0,1);
    else if(strlen($stringInput)>=3) return substr($stringInput,$y,$x);
    else return substr($stringInput,0,1);
}

echo middleSubstring("A") .PHP_EOL;
echo middleSubstring("AB") .PHP_EOL;
echo middleSubstring("ABC") .PHP_EOL;
echo middleSubstring("ABCDEF") .PHP_EOL;
echo middleSubstring("ABCDEFG") .PHP_EOL;
echo middleSubstring("ABCDEFGHIJKL") .PHP_EOL;
