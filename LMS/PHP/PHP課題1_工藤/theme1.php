
<?php
//問題1
$sum=100*1+200*2;
echo$sum;
echo'円です';
?>

<br>

<?php
//問題2
$x=50;
if($x>50){
  echo'50より大きい';
}elseif($x<50){
  echo'50より小さい';
}else{
  echo'50です';
}
//49,50,51
?>


<br>

<?php
//問題3
$colors=array('red','blue','yellow');
echo$colors[1];
?>


<br>

<?php
//問題4
$user=array('name','age','gender');
$user[0]='田中';
$user[1]=25;
$user[2]='男性';
echo$user[0];
echo$user[1];
echo'・';
echo$user[2];
?>

<br>

<?php
//問題5
for($i=1;$i<=100;$i++){
  echo$i;
}
?>

<br>

<?php
//問題6
$countrys=array(
    1=>'日本',
    2=>'アメリカ',
    3=>'イギリス',
    4=>'フランス'
);
foreach($countrys as $number => $country){
  echo$number;
  echo':';
  echo$country;
}
?>

<br>

<?php
//問題7
$countrys=array(
  '日本'=>'東京',
  'アメリカ'=>'ワシントン',
  'イギリス'=>'ロンドン',
  'フランス'=>'パリ'
);
foreach($countrys as $country => $city){
  echo$country;
  echo'の首都は';
  echo$city;
  echo'です';
}
?>

<br>

<?php
//問題8
function getSum($num){
  return $num + 1;
}
$sum=getSum(10);
echo$sum;
?>

<br>

<?php
//問題9
$scores=array(10,60,90,70,50);
foreach($scores as $score)
if($score>80){
  echo$score;
  echo'点は「優」です';
}elseif($score>60){
  echo$score;
  echo'点は「優」です';
}elseif($score>40){
  echo$score;
  echo'点は「優」です';
}else{
  echo$score;
  echo'点は「不可」です';
}
?>

<br>


<?php
//問題10
$array = [
  'name'=>['田中','鈴木','佐藤'],
  'age'=>[25,20,23],
  'gender'=>['男','男','女']
];

foreach($array as $key=>$vals){
  if($key=='gender'){
    break;
  }else{
  echo $vals[2];
  echo '<br>';
  }
}
?>



<br>

<?php
//問題11
$dates=array(2023,06,01,'木');
echo$dates[0].'年'.$dates[1].'月'.$dates[2].'日（'.$dates[3].'曜日）';

?>

<br>

<?php
//問題12
date_default_timezone_set('Asia/Tokyo');
echo date("Y年m月d日 H時i分s秒").'<br>';
echo date('Y年m月d日', strtotime('+3 day')).'<br>';
echo date('Y年m月d日 H時i分s秒', strtotime('-12 hours')).'<br>';

$day1 = new DateTime('now');
$day2 = new DateTime('2020-01-01');
$interval = $day1->diff($day2);
echo $interval->format('%a日')

?>

<br>

<?php
//問題13
for($i=0;$i<10;$i++){
$hairetu[$i]=rand(0,99);
}
?>
<?php
for($i=0;$i<10;$i++){
$hairetu[$i]=rand(0,99);
}
print_r($hairetu);
?>








