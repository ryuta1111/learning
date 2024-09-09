// 関数: HTML の body タグ内の一番下に新しい段落を追加します。

function createParagraph(){
    const para = document.createElement("p");
    para.textContent = "ボタンが押されました！";
    document.body.appendChild(para);
}

/*
1. ページ内のボタンへの参照をすべて取り出して配列に入れる。
2. すべてのボタンをループで回し、クリックイベントのリスナーを追加する

どのボタンが押されても、 createParagraph() 関数が実行されるようにする。
*/

const buttons = document.querySelectorAll("button");

for (const button of buttons){
    button.addEventListener("click", createParagraph);
}