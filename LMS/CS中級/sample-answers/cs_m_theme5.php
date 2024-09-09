<?php
//問題1
//開発中のアプリケーション内で犬をデータとして表すことにしました。
//以下に従って、Dogクラスを作成し、テストケースを出力してください
//・string name:犬の種類の名前
//・int size:犬のサイズ
//・int age:犬の年齢
//・string bark():犬の鳴き声を文字列として返します。
//・犬のサイズが50以上の時、Woof!Woof!,サイズが20以上のとき、Ruff!Ruff!,それ以外の時は、Yip!Yip!と返します
//・int calcHumanAge():犬の年齢から人間の年齢に換算します。人間の年齢＝12＋(犬の年齢-1)*７を使用してください

class Dog{
    public $name;
    public $size;
    public $age;

    function __construct($name,$size,$age){
        $this->name=$name;
        $this->size=$size;
        $this->age=$age;
    }

    function bark(){
        if($this->size>=50)return "Woof!Woof!";
        else if($this->size>=20)return "Ruff!Ruff!";
        else return "Yip!Yip!";
    }

    function calcHumanAge(){
        return 12+($this->age-1)*7;
    }
}

echo "問題1";
echo "<br>";
$goldenRetriever= new Dog("Golden Retriever",60,10);
echo $goldenRetriever->bark();
echo "<br>";
echo $goldenRetriever->calcHumanAge();
echo "<br>";

$siberianHusky= new Dog("Siberian Husky",55,6);
echo $siberianHusky->bark();
echo "<br>";
echo $siberianHusky->calcHumanAge();
echo "<br>";

$poodle= new Dog("poodle",10,1);
echo $poodle->bark();
echo "<br>";
echo $poodle->calcHumanAge();
echo "<br>";

$shibainu= new Dog("shibainu",35,4);
echo $shibainu->bark();
echo "<br>";
echo $shibainu->calcHumanAge();
echo "<br>";
?>

<br>

<?php
//問題2
//あなたは動物園で動物を研究するためのアプリを作っているチームに参加しています。
//このアプリを通じて、動物園の参観者が動物の詳細を見ることができるようになることを計画しています
//以下に従って、animalクラスを作成してください
//・string name:動物の名前
//・double weightKg:動物の体重
//・double heightM:動物の身長
//・boolean isPredator:捕食者かどうか
//・double speedKph:動物の時速
//・double activityMultiplier:どれほど動物が活発的か表す数字。
//動物園の動物は檻に入れられているので活動が制限されているとみなし、活動指数を1.2とします。
//・double getBmi():動物のBMIを返します。
//kg/(heightM2)を使ってください。小数点3位以下を切り捨ててください
//・double getDailyCalories():動物が毎日どれオドのカロリいーいを消費する必要があるか返します。
//計算式は(70*ewightKg0.75)*activityMultiplierでも止めることができます。小数点第3位以下を切り捨ててください
//・boolean isDangerous():動物が危険かどうか判断するブール値を返します。動物が捕食者だった場合、危険とみなされ、身長が1.7メートル以上、もしくは時速35km/h以上の場合も危険とみなされます

class Animal{
    public $name;
    public $weightKg;
    public $heightM;
    public $isPredator;
    public $speedKph;
    public $activityMultiplier=1.2;

    function __construct($name,$weightKg,$heightM,$isPredator,$speedKph){
        $this->name=$name;
        $this->weightKg=$weightKg;
        $this->heightM=$heightM;
        $this->isPredator=$isPredator;
        $this->speedKph=$speedKph;
    }

    function getBmi(){
        return number_format($this->weightKg/($this->heightM**2),2);
    }

    function getDailyCalories(){
        return number_format((70*$this->weightKg**0.75)*$this->activityMultiplier,2);
    }

    function isDangerous(){
        if($this->isPredator==true) return true;
        else if($this->heightM>=1.7 || $this->speedKph>=35)return true;
        else return false;
    }
}

echo "問題2";
echo "<br>";

$rabbit=new Animal("rabbit",10,0.3,false,20);
echo $rabbit->getBmi();
echo "<br>";
echo ($rabbit->isDangerous() ?"True":"False");
echo "<br>";

$snake=new Animal("snake",30,1,true,30);
echo ($snake->isDangerous() ?"True":"False");
echo "<br>";
echo $snake->getDailyCalories();
echo "<br>";

$elephant=new Animal("elephant",300,3,false,5);
echo $elephant->getBmi();
echo "<br>";
echo $elephant->getDailyCalories();
echo "<br>";

$gazelle=new Animal("gazelle",50,1.5,false,100);
echo $gazelle->getDailyCalories();
echo "<br>";
echo ($gazelle->isDangerous() ?"True":"False");
echo "<br>";

?>

<br>

<?php
//問題3
//開発中のアプリケーション内で色を実装することになりました。
//色は一般的にRGB(red-green-blue)カラーモデルを使って定義されます。
//RGBの各色は、0から255までの数値で表されます
//以下の構造に沿った、色の設計図を作成し、テストケースを出力してください
//・int red:0から255までの数値
//・int green:0から255までの数値
//・int blue:0から255までの数値
//・string getHexCode():カラーコードを16進数(文字列)で返します。文字っ列の先頭には＃をつけてください
//・string getBits():カラーコードを2進数で返します。取得した16進数を2進数へ変換してください
//・string getColorShade():赤、青、緑の中でどの色が濃いのかを文字列で返します。全ての色の強さが同じ場合、grayscaleと返してください

class RGB{
    public $red;
    public $green;
    public $blue;

    function __construct($red,$green,$blue){
        $this->red=$red;
        $this->green=$green;
        $this->blue=$blue;
    }

    function getHexCode(){
        return "#" . str_pad(dechex($this->red),2,"0",STR_PAD_LEFT) . str_pad(dechex($this->green),2,"0",STR_PAD_LEFT) . str_pad(dechex($this->blue),2,"0",STR_PAD_LEFT);
    }

    function getBits(){
        return base_convert($this->getHexCode(),16,2);
    }
    function getColorShade(){
        if($this->red > $this->green && $this->red > $this->blue)return "red";
        else if($this->green > $this->red && $this->green > $this->blue)return "green";
        else if($this->blue > $this->green && $this->blue > $this->red)return "blue";
        else if($this->red == $this->green && $this->red == $this->blue)return "grayscale";
    }
}

echo "問題3";
echo "<br>";

$color1=new RGB(0,153,255);
echo $color1->getHexCode();
echo "<br>";
echo $color1->getBits();
echo "<br>";
echo $color1->getColorShade();
echo "<br>";

$color2=new RGB(255,153,204);
echo $color2->getHexCode();
echo "<br>";
echo $color2->getBits();
echo "<br>";
echo $color2->getColorShade();
echo "<br>";

$color3=new RGB(0,87,0);
echo $color3->getHexCode();
echo "<br>";
echo $color3->getBits();
echo "<br>";
echo $color3->getColorShade();
echo "<br>";

$color4=new RGB(123,123,123);
echo $color4->getHexCode();
echo "<br>";
echo $color4->getBits();
echo "<br>";
echo $color4->getColorShade();
echo "<br>";

?>

<br>

<?php
//問題4
//あなたは銀行をシュミレーションするビデオゲームに機能を追加しています
//この銀行はプレイヤーのお金をBankAccountクラスで管理し、いくつかの機能を提供します
//以下に従って、BankAccountクラスを作成し、テストケースを出力してください。
//・string bankName:銀行口座を管理する銀行名
//・string ownerName:銀行口座の所有者の名前
//・int savings:銀行口座の中に現在ある合計貯蓄額
//・int depositMoney(int depositAmount):depositAmountのよって貯蓄額を増やし、その金額をint型で返します。
//もし預金前の貯蓄額が$20,000以下の場合は、$100の手数料がかかります
//・int withdrawMoney(int withdrawAmount):withdrawAmountのよって貯蓄額を減らし、残りの貯蓄額を整数として返します。
//最大で貯蓄額の20％を引き出すことができます
//・double pastime(int days):講座に毎日0.25ドル振り込まれていく時、貯蓄金額をdouble型で返します

class BankAccount{
    public $bankName;
    public $ownerName;
    public $savings;

    function __construct($bankName,$ownerName,$savings){
        $this->bankName=$bankName;
        $this->ownerName=$ownerName;
        $this->savings=$savings;
    }

    function withdrawMoney($withdrawAmount){
        if($withdrawAmount >= $this->savings*0.2)return $this->savings - ($this->savings*0.2);
        else return $this->savings - $withdrawAmount;
    }
    
    function depositMoney($withdrawAmount,$depositAmount){
        if($this->savings<=20000)return $this->withdrawMoney($withdrawAmount) + $depositAmount-100;
        else return $this->withdrawMoney($withdrawAmount)+$depositAmount;
    }

    function pastime($withdrawAmount,$depositAmount,$days){
        return $this->depositMoney($withdrawAmount, $depositAmount)+($days*0.25);
    }

}

echo "問題4";
echo "<br>";
$user1=new BankAccount("Chase","Claire Simmmons",30000);
echo $user1->withdrawMoney(2000);
echo "<br>";
echo $user1->depositMoney(2000,10000);
echo "<br>";
echo $user1->pastime(2000,10000,93);
echo "<br>";

$user2=new BankAccount("Bank Of America","Remy Clay",10000);
echo $user2->withdrawMoney(5000);
echo "<br>";
echo $user2->depositMoney(5000,12000);
echo "<br>";
echo $user2->pastime(5000,12000,505);
echo "<br>";

?>

<br>

<?php
//問題5
//あなたは開発チームに所属しており、企業様向けのクラウドシステムを構築するタスクを与えられました。
//このソフトウェアの一部には、ユーザーがファイルを保存したり、読み書きできる機能が含まれています。
//ファイルを共有rすることもできるので、ユーザーは上書きがないように自分のファイルをロックする機能もついています。
//以下に従って、filesクラスを作成し、テストケースを出力してください
//・string fileName:ファイル名
//・string fileExtension:ファイルの拡張子。.word,.png,.mp4,.pdf出ない場合は、.txtに設定されます
//・string content:ファイルに含まれるコンテンツ
//・string parentFolder:ファイルが置かれているフォルダの名前
//・string getLifetimeBandwidthSize():サービス中に使われるファイルの最大容量を返します。　
//contentに含まれる文字（空白文字を含む）につき、25MBとして計算してください。
//たとえば、40文字含まれている場合、40*25MB=1,000MB=1GBになります。
//単位の最大はG（ギガ）とします。1000MB以上は単位をGBに変換してください
//・stirng prependContent(string data):ファイルのcontentの先頭にデータ文字列を追加し、新しいcontentを返します
//・string addContent(string data,int position):ファイルのcontentの指定した位置（インデックス）にデータ文字列を追加し、新しいcontentを返します
//・string showFileLocation():親ファイル>ファイル名.拡張子という形で返します

class Files{
    public $fileName;
    public $fileExtension;
    public $content;
    public $parentFolder;

    function __construct($fileName,$fileExtension,$content,$parentFolder){
        $this->fileName=$fileName;
        $this->fileExtension=$fileExtension;
        $this->content=$content;
        $this->parentFolder=$parentFolder;
    }

    function getLifetimeBandwidthSize(){
        if(strlen($this->content)*25>=1000)return (strlen($this->content)*25)/1000 . "GB";
        else return strlen($this->content)*25 . "MB";
    }

    function prependContent($data){
        return substr_replace($this->content,$data,0,0);
    }

    function addContent($data,$data2,$position){
        return substr_replace($this->prependContent($data),$data2,$position,0);
    }

    function showFileLocation(){
        return $this->parentFolder. ">" .$this->fileName .$this->fileExtension;
    }

}

echo "問題5";
echo "<br>";
$assignment=new Files("assignment",".word","ABCDEFGH","homework");
echo $assignment->getLifetimeBandwidthSize();
echo "<br>";
echo $assignment->prependContent("MMM");
echo "<br>";
echo $assignment->addContent("MMM"," hello world ",5);
echo "<br>";
echo $assignment->showFileLocation();
echo "<br>";

$blade=new Files("blade",".php","bg-primary text-white m-0 p-0 d-flex fustify-content-center","view");
echo $blade->getLifetimeBandwidthSize();
echo "<br>";
echo $blade->addContent(""," font-weight-bold ",11);
echo "<br>";
echo $blade->showFileLocation();
echo "<br>";

?>


