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

//success 反dラーは、データベースがうまく開けたことを意味します。
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