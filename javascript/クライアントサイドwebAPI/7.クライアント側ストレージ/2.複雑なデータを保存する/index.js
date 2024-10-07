// create needed constants
const list = document.querySelector('ul');
const titleInput = document.querySelector('#title');
const bodyInput = document.querySelector('#body');
const form = document.querySelector('form');
const submitBtn = document.querySelector('form button');


//開いているデータベースを格納するために、dbオブジェクトのインスタンスを作成します
let db;

//データベースを開きます。データベースがまだ存在しない場合は作成されます。
//(後述のupgradeneed　ハンドラーを参照)。
const openRequest = window.indexedDB.open("notes_db", 1);

//errorハンドラーはデータベースがうまく開けなかったことを意味します
openRequest.addEventListener("error", () =>
    console.error("Database failed to open"),
);

//successハンドラーは、データベースがうまく開けたことを意味します。
openRequest.addEventListener("success", () => {
    console.log("Database opened successfully");

    //開いたデータベースオブジェクトをdbという変数に記憶します。これは以降で頻繁に使われます。
    db = openRequest.result;

    // IDB内の既存のメモ書きを表示するために、displayData()関数を実行します
    displayData();
});

//データベースのテーブルがまだ存在しない場合は、それを設定します。
openRequest.addEventListener("upgradeneeded", (e) => {
    //開いたデータベースの参照を取得します。
    db = e.target.result;

    //メモと自動増加するキーを格納するために、データベースにobjectStoreを作成します
    //objectStoreはリレーショナルデータベースの「テーブル」に似ています
    const objectStore = db.createObjectStore("notes_os", {
        keyPath: "id",
        autoIncrement: true,
    });

    //objectStoreにどのようなデータ項目を格納するかを定義します
    objectStore.createIndex("title", "title", { unique: false});
    objectStore.createIndex("body","body",{ unique: false});

    console.log("Database setup complete");
});

//データをデータベースに追加
//submit イベントハンドラーを作成し、フォームが送信された時にaddData()関数が実行されるようにします。
form.addEventListener("submit", addData);



//addData()関数を定義します。
function addData(e){
    //規定の動作を抑止します。従来通りの方法でフォームを送信したくはないからです。
    e.preventDefault();

    //フォームのフィールドに入力された値を取得し、DBに挿入できるようにオブジェクトに格納します。
    const newItem = { title: titleInput.value, body: bodyInput.value};

    //読み書きのデータベーストランザクションを開いて、データの追加に備えます。
    const transaction = db.transaction(["notes_os"], "readwrite");

    //すでにデータベースに追加されているオブジェクトストアを呼びだします。
    const objectStore = transaction.objectStore("notes_os");

    //newItemオブジェクトをオブジェクトストアに追加するリクエストを行います。
    const addRequest = objectStore.add(newItem);

    addRequest.addEventListener("success", () => {
        //フォームをクリアして、次の項目の追加に備えます。
        titleInput.value = "";
        bodyInput.value = "";
    });

    //トランザクションが完了し、完全に終了した場合の成功報告をします。
    transaction.addEventListener("complete", () => {
        console.log("Transaction completed: database modification finished.");

        //表示データの更新を行い、新しく追加された項目を表示するために、再度 displayData()を実行します。
        displayData();
    });;

    transaction.addEventListener("error", () =>
        console.log("Transaction not opened due to error"),
    );
}



//displayData()関数を定義します。
function displayData(){
    //ここでは、表示が更新されるたびに、リスト要素の中身をカラにしています。
    //これを行わないと、新しいメモが追加されるたびに、重複して掲載されてしまいます。
    while(list.firstChild){
        list.removeChild(list.firstChild);
    }

    //オブジェクトストアを開き、カーソルを取得します。カーソルはストア内の異なるデータ項目を全て反復処理します。
    const objectStore = db.transaction("notes_os").objectStore("notes_os");
    objectStore.openCursor().addEventListener("success", (e) => {
        //カーソルへの参照を取得します。
        const cursor = e.target.result;

        //反復処理を行うべき別のデータ項目があれば、このコードを実行し続けます。
        if(cursor){
            //リスト項目、h3、pを作成し、表示する際に各データ項目を中に入れます。
            //HTMLフラグメントを構成し、リストの中に追加します
            const listItem = document.createElement("li");
            const h3 = document.createElement("h3");
            const para = document.createElement("p");

            listItem.appendChild(h3);
            listItem.appendChild(para);
            list.appendChild(listItem);

            //h3及びparaの内部に、カーソルからのデータを入れます。
            h3.textContent = cursor.value.title;
            para.textContent = cursor.value.body;

            //listItem の属性内部に、このデータ項目のIDを保存します。
            //こうすると、どの項目に対応しているのかがわかります。これは、後で項目を削除したくなった時に有用です。
            listItem.setAttribute("data-note-id", cursor.value.id);

            //ボタンを作成し、それを各 listItem の内部に設置します。
            const deleteBtn = document.createElement("button");
            listItem.appendChild(deleteBtn);
            deleteBtn.textContent = "Delete";

            //ボタンがクリックされてたら deleteItem()関数が実行されるように、イベントハンドラーを設定します
            deleteBtn.addEventListener("click", deleteItem);

            //カーソルの次の項目へ反復処理を行います。
            cursor.continue();
        } else {
            //Again, if list item is empty, display a 'No notes stored' message
            if(!list.firstChild){
                const listItem = document.createElement("li");
                listItem.textContent = "No notes stored.";
                list.appendChild(listItem);
            }
            //反復処理をすべきカーソルの項目がこれ以上ない場合、そのように示します。
            console.log("Notes all displayed");
        }
    });
}



//deleteItem()関数を定義します。
function deleteItem(e){
    //削除したいタスクの名前を取得します。
    //IDBで使用する前に、これを数値に変換する必要があります。
    //IDBのキーチは型が重視されます。
    const noteId = Number(e.target.parentNode.getAttribute("data-note-id"));

    //データベーストランザクションを開き、タスクを削除します。上で取得したidを使用してタスクを探します。
    const transaction = db.transaction(["notes_os"], "readwrite");
    const objectStore = transaction.objectStore("notes_os");
    const deleteRequest = objectStore.delete(noteId);

    //データ項目を削除したことを報告します。
    transaction.addEventListener("complete", () => {
        //ボタンの親、すなわちリスト項目を削除します。
        //すると、それは表示されなくなります。
        e.target.parentNode.parentNode.removeChild(e.target.parentNode);
        console.log(`Note ${noteId} deleted.`);

        //この場合も、リスト項目がカラであれば、「メモ格納されていません」というメッセージを表示します。
        if(!list.firstChild) {
            const listItem = document.createElement("li");
            listItem.textContent = "No notes stored.";
            list.appendChild(listItem);
        }
    });
}