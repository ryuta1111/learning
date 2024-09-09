<?php
//問題1
//文字列stringInputが与えられるので、最初の文字を返す、stringfirstという関数を定義してください
function stringFirst(string $stringInput):string{
    //関数を完成させてください
    return $stringInput[0];

    
}
echo stringFirst("stringInput") .PHP_EOL;
?>


<?php
//問題2
//文字列stringが与えられるので、最後の文字を返す、stringLastという関数を定義してください。

function stringLast(string $stringInput):string{
    //関数を完成させてください
    return $stringInput[-1];
}
echo stringLast("string") .PHP_EOL;
?>

<?php
//問題3
//姓と名がそれぞれlastNameとfirstNameとして与えられるので、イニシャルを返す、nameInitialsという関数を定義してください。

function nameInitials(string $firstName,string $lastName):string{
    //関数を完成させてください
    return $firstName[0].'.'.$lastName[0];
}
echo nameInitials("Ryuta","Kudo") .PHP_EOL;

?>

<?php
//問題4
//JR北日本は過去数年の分析に基づいて、新幹線の搭乗券の売れ行きを計算しています。
//今、七日間で＄250の搭乗券を、１５万人が購入することがわかっています。
//統計を取ると、この価格帯から＄10高くなるたびに7000人が購入をやめ、＄10安くなるたびに追加で7000人が搭乗券を購入することがわかりました
//（つまり、＄260では、14万3千人が搭乗券を購入し、＄270では13万６千人が搭乗券を購入することになります）
//今、七日間の搭乗券の価格ticketPriceが与えられるので、搭乗券の購入人数を返す、weekly7DaysSaleという関数を定義してください。

function weekly7DaysSales(int $ticketPrice):int{
    //関数を完成させてください
    //基準の人数
    $a=15000;
    //基準の値段
    $b=250;
    //$1で変わる人数
    $c=700;
    //計算結果
    return $a-(($b-$ticketPrice)*$c);

}

echo weekly7DaysSales(300) .PHP_EOL;