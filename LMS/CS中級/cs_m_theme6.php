<?php
//leagueは小学生向けに算数のゲームを作りました。ゲームではランダムに数字が入っている箱を選び、全ての数字を取り出します。
//そして、取り出した数字から奇数番目のものを全て足し合わせ、合計値を求めていきます。
//数字が入った箱intArrが与えられるので、全ての奇数番目を足した値を返すaddEveryOtherElementという関数を定義してください
function addEveryOtherElement(array $intArr):int{
    $sumArr = 0;
    for($i=0;$i<count($intArr);$i += 2){
        $sumArr += $intArr[$i];
    }
    return $sumArr;
}
echo "問題1" .PHP_EOL;
echo addEveryOtherElement([34,46,45,57]). PHP_EOL;
echo addEveryOtherElement([60,45,66,75,56,32,654,45,100]). PHP_EOL;
echo addEveryOtherElement([5,10]). PHP_EOL;
echo addEveryOtherElement([120,85,45,67,54,343,57,800,88,67,56,57,68,75]). PHP_EOL;
echo addEveryOtherElement([]). PHP_EOL;
echo ("--------------------"). PHP_EOL;

?>

<br>

<?php
//問題2
//herbieは小学生向けに英語のゲームを作りました。単語が入っているバッグを用意し、単語の中に含まれる特定のアルファベットをカウントしていくというものです。
//単語のリストbagOfWordとアルファベットkeyCharacterが与えられるので、単語の中に特定のアルファベットが何回現れるかを返す、charInBgOfWordCountという関数を定義してください
function charInBagOfWordsCount(array $bagOfWords,string $keyCharacter){
    //関数を完成させてください
    $sumCount=0;
    foreach($bagOfWords as $bagOfWord){
        $count=substr_count($bagOfWord,$keyCharacter);
        $sumCount+=$count;
    }
    echo $sumCount;

}

echo "問題2" .PHP_EOL;
echo charInBagOfWordsCount(["hello","world"],"o").PHP_EOL;
echo charInBagOfWordsCount(["hello","world"],"p").PHP_EOL;
echo charInBagOfWordsCount(["The","tech","giant","is in the","city center"],"p").PHP_EOL;
echo charInBagOfWordsCount(["The","tech","giant","is in the","city center"],"e").PHP_EOL;
echo ("--------------------"). PHP_EOL;
?>

<br>

<?php
//問題3
//狭い道を歩くMarcusは、一人の老人に道を塞がれてしまいました。
//老人は「英単語を一つ出してください。私が出す英単語より文字の値が大きければ通してあげます。」と提案してきました。
//文字の値は、各文字のAscii値を合計して算出されます。
//例えば、「abc」という言葉は、「a」が97、「b」が98、「c」が99と換算され、合計値は294となります。
//この時、大文字と小文字は区別せず、全て小文字として扱われます。
//Marcusの英単語s1と老人の英単語s2が与えられるので、Marcusの方が大きければtrue、等しい時と老人の方が大きいときはfalseを返す、isMarcusLargerという関数を定義してください
function isMarcusLarger(string $s1,string $s2):bool{
    //関数を完成させてください
    $res1=0;
    $res2=0;
    for($i=0;$i<strlen($s1);$i++){
        $res1+=ord(strtolower($s1[$i]));
    }
    for($x=0;$x<strlen($s2);$x++){
        $res2+=ord(strtolower($s2[$x]));
    }
    if($res1<=$res2)return false;
    else return true;
}

echo "問題3" .PHP_EOL;
echo (isMarcusLarger("Fantastic","Bridge")?"true":"false") .PHP_EOL;
echo (isMarcusLarger("Bridge","Fantastic")?"true":"false") .PHP_EOL;
echo (isMarcusLarger("hello","Hello")?"true":"false") .PHP_EOL;
echo (isMarcusLarger("Appearances may deceive","I think so too")?"true":"false") .PHP_EOL;
echo (isMarcusLarger("pool","pooling")?"true":"false") .PHP_EOL;
echo (isMarcusLarger("magni","est")?"true":"false") .PHP_EOL;
echo ("--------------------"). PHP_EOL;

?>

<br>

<?php
//問題4
//Jimmyはカジノでブラックジャックを行いました。
//Jimmyの手札playerCards、ディラーの手札houseCardsが与えられるので、Jimmyが勝利した場合true,ディーラーが勝利した場合falseを返す、winnerBlackjackという関数を定義してください。条件は以下のとおりです。
//カードはマークと値によって構成されています。カードの値は、A=1,2-10はそのままの値、J=11,Q=12,K=13とします
//プレイヤーの手札の合計地が21を超えている場合はプレイヤーの敗北となります。
//ディーラーの手札の合計値が22未満でかつプレイヤーのカードの合計値より大きければプレイヤーの敗北となります。
//ドローだった場合はプレイヤーの敗北となります。
function winnerBlackjack(array $playerCards,array $houseCards):bool{
    //関数を完成させてください
    $sumPlayerCards=0;
    $sumHouseCards=0;
    $playerCards=str_replace("♡","",$playerCards);
    $houseCards=str_replace("♡","",$houseCards);
    $playerCards=str_replace("♠︎","",$playerCards);
    $houseCards=str_replace("♠︎","",$houseCards);
    $playerCards=str_replace("♣️","",$playerCards);
    $houseCards=str_replace("♣️","",$houseCards);
    $playerCards=str_replace("♦︎","",$playerCards);
    $houseCards=str_replace("♦︎","",$houseCards);
    $playerCards=str_replace("A",1,$playerCards);
    $houseCards=str_replace("A",1,$houseCards);
    $playerCards=str_replace("J",11,$playerCards);
    $houseCards=str_replace("J",11,$houseCards);
    $playerCards=str_replace("Q",12,$playerCards);
    $houseCards=str_replace("Q",12,$houseCards);
    $playerCards=str_replace("K",13,$playerCards);
    $houseCards=str_replace("K",13,$houseCards);
    foreach($playerCards as $playerCard){
        $sumPlayerCards+=intval($playerCard);
    }
    foreach($houseCards as $houseCard){
        $sumHouseCards+=intval($houseCard);
    }
    if($sumPlayerCards>21)return false;
    else if($sumHouseCards<22 && $sumHouseCards>$sumPlayerCards) return false;
    else if($sumPlayerCards==$sumHouseCards)return false;
    else return true;
}

echo "問題4" .PHP_EOL;
echo (winnerBlackjack(["♣️4","♡7","♡7"],["♠️Q","♣️J"])?"true":"false") .PHP_EOL;
echo (winnerBlackjack(["♡10","♡6","♣️K",],["♠️Q","♦︎2","♡K"])?"true":"false") .PHP_EOL;
echo (winnerBlackjack(["♠︎3","♠︎J","♣️5"],["♣️A","♡Q","♣️5"])?"true":"false") .PHP_EOL;
echo (winnerBlackjack(["♡2","♣️A","♣️8","♡7","♡3"],["♡6","♡K","♣️5","♡K"])?"true":"false") .PHP_EOL;
echo (winnerBlackjack(["♡2","♣️A","♣️8","♡7","♡3"],["♡2","♣️A","♣️8","♡7","♡3"])?"true":"false") .PHP_EOL;
echo ("--------------------"). PHP_EOL;



?>

<br>

<?php
//問題5
//sanchezはメルマガを定期的に配信しています。会員のメールアドレスリストemailListが与えられるので、正しく利用できるメールアドレスだけを配列として返すvalidEmailListという関数を定義してください。
//正しいメールアドレスの条件は以下のとおりです。　
//・スペースがないこと
//・「＠」を１つのみ含んでいること
//・「＠」の後に「.」があること
//・「＠」から始まらないこと
function validEmailList(array $emailList){
    //関数を完成させてください
    foreach($emailList as $email){
        $atLocation=strpos($email,"@");
        if(str_contains($email," "))echo "";
        else if(substr_count($email,"@")!=1)echo "";
        else if(substr_count(substr($email,$atLocation),".")==0)echo "";
        else if(substr($email,0,1)=="@")echo "";
        else echo $email . ",";
    }
    
}

echo "問題5" .PHP_EOL;
echo validEmailList(["ccc@aaa.com","c@cc@aaa.com","cc c@aaa.com","cc.c@aaa.com"]). PHP_EOL;
echo validEmailList(["c@cc@aaa.com","cc c@aaa.com","cc.c@aaacom"]). PHP_EOL;
echo validEmailList(["ccc@aaa.com","cvsd@a.com","tele@bb.aa","cc.c@aaa.com"]). PHP_EOL;
echo validEmailList(["c@cc@aaa.com","tele@bb.aa","cc.c@aaa.com","ccc@aaa.com"]). PHP_EOL;
echo ("--------------------"). PHP_EOL;

?>

<br>

<?php
//問題6
//Samはa駅、b駅、...y駅、z駅とアファベットが各駅の名前になっている路線の電車に乗っています。
//Samは自分が乗った駅から降りる駅まで、全ての停止場所を確認しました。
//乗車駅firstAlphabet,降車駅secondAlphabetが与えられるので、停止駅を配列として返す、generateAlphabetという関数を定義してください。
//ただし、アルファベットは大文字と小文字を区別せず、全て小文字で表示し、aに近い文字から返すようにしてください。
function generateAlphabet(string $firstAlphabet,string $secondAlphabet){
    for($i=ord(strtolower($firstAlphabet));$i<=ord(strtolower($secondAlphabet));$i++){
        echo chr($i). ",";
        
    }
}
echo "問題6" .PHP_EOL;
echo generateAlphabet('a','z').PHP_EOL;
echo generateAlphabet('b','b').PHP_EOL;
echo generateAlphabet('C','Z').PHP_EOL;
echo generateAlphabet('M','z').PHP_EOL;
echo ("--------------------"). PHP_EOL;

?>
