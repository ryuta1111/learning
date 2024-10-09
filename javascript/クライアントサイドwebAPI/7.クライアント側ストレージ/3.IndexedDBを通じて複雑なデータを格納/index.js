//Create constants
const section = document.querySelector('section');
const videos = [
    { 'name' : 'crystal'},
    { 'name' : 'elf'},
    { 'name' : 'frog'},
    { 'name' : 'monster'},
    { 'name' : 'pig'},
    { 'name' : 'rabbit'}
];

//Create an instance of a db object for us to store out database in
let db;

function init(){
    //動画の名前を１つずつループ処理してゆきます
    for(const video of videos){
        //トランザクションを開き、オブジェクトストアを取得し、名前によって各動画をget()します
        const objectStore = db.transaction("videos_os").objectStore("videos_os");
        request.addEventListener("success", () => {
            //もし結果がデータベースにないに存在したら（存在しなければ undefined）
            if(request.result){
                //displayVideo()を用いて、動画をIDBから取り出して表示します
                console.log("taking videos form IDB");
                displayVideo(
                    request.result.mp4,
                    request.result.webm,
                    request.result.name,
                );
            }else{
                //動画をネットワークから取ってきます。
                fetchVideoFromNetwork(video);
            }
        });
    }
}

//Define the fetchVideoFromNetwork() function
function fetchVideoFromNetwork(video){
    console.log('fetching videos from network');
    //fetch() 関数を使用してMP4版とWebM版の動画を取得し、そのレスポンス本体をblobとして公開します
    const mp4Blob = fetch(`videos/${video.name}.mp4`).then(response => response.blob());
    const webmBlob = fetch(`videos/${video.name}.webm`).then(response => response.blob());

    //両方のプロミスが履行された時のみ、次のコードを実行します
    Promise.all([mp4Blob, webmBlob]).then(values => {
        //ネットから取ってきた動画を、displayVideo()により表示します。
        displayVideo(values[0], values[1], video.name);
        //storeVideo()を用いて、その動画をIDBに保存します。
        storeVideo(values[0], values[1], video.name);
    });
}

//storeVideo()関数を定義します。
function storeVideo(mp4Blob, webmBlob, name) {
    //トランザクションを開き、オブジェクトストアを取得し、IDBに書き込めるように読み書きできるようにします。
    const objectStore = db.transaction(['videos_os'], 'readwrite').objectStore('videos_os');

    const record = {
        mp4 : mp4Blob,
        webm : webmBlob,
        name : name
    }

    //add()を使ってレコードをIDBに追加します
    const request = objectStore.add(record);

    request.addEventListener('success',() => console.log('Record addition attempt finished'));
    request.addEventListener('error', () => console.error(request.error));
}

//displayVideo()関数を定義します
function displayVideo(mp4Blob, webmBlob, title){
    //BlobからオブジェクトURLを作成する
    const mp4URL = URL.createObjectURL(mp4Blob);
    const webmURL = URL.createObjectURL(webmBlob);

    //ページに動画を埋め込むためのDOM要素を作成する
    const article = document.createElement('article');
    const h2 = document.createElement('h2');
    h2.textContent = title;
    const video = document.createElement('video');
    video.controls = true;
    const source1 = document.createElement('source');
    source1.src = mp4URL;
    source1.type = 'video/mp4';
    const source2 = document.createElement('source');
    source2.src = webmURL;
    source2.type = 'video/webm';

    //DOM要素のページへの埋め込み
    section.appendChild(article);
    article.appendChild(h2);
    article.appendChild(video);
    video.appendChild(source1);
    video.appendChild(source2);
}

const request = window.indexedDB.open('videos_db', 1);

request.addEventListener('error', () => console.error('Database failed to open'));

request.addEventListener('success', () => {
    console.log('Database opened successfully');

    db = request.result;
    init();
});

request.addEventListener('upgradeneeded', e => {
    const db = e.target.result;

    const objectStore = db.createObjectStore('videos_os', { keyPath: 'name'});

    objectStore.createIndex('mp4', 'mp4', { unique: false });
    objectStore.createIndex('webm', 'webm', { unique: false });

    console.log('Database setup complete');
});