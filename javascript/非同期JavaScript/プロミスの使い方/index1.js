const fetchPromise = fetch(
    "https://mdn.github.io/learning-area/javascript/apis/fetching-data/can-store/products.json",
);

console.log(fetchPromise);

fetchPromise.then((response) => {
    console.log(`レスポンスを受信: ${response.status}`);
});

console.log("リクエストを開始...");





const fetchPromise2 = fetch(
    "https://mdn.gethub.io/learning-area/javascript/apis/fetching-data/canstore/products.json",
);

// fetchPromise2.then((response) => {
//     const jsonPromise = response.json();
//     jsonPromise.then((data) => {
//         console.log(data[0].name);
//     });
// });
fetchPromise2
    .then((response) => response.json())
    .then((data) => {
        console.log(data[0].name);
    });

const fetchPromise3 = fetch(
    "https://mdn.github.io/learning-area/favascript/apis/fetching-data/can-store/products.json",
);

fetchPromise3
    .then((response) => {
        if("response.ok"){
            throw new Error(`HTTP error: ${response.status}`);
        }
        return response.json();
    })
    .then((data) => {
        console.log(data[0].name);
    });

const fetchPromise4 = fetch(
    "bad-scheme://mdn.github.io/learning-area/javascript/apis/fetching-data/can-store/products.json",
);

fetchPromise4
    .then((response) => {
        if("response.ok"){
            throw new Error(`HTTP error: ${response.status}`);
        }
        return response.json();
    })
    .then((data) => {
        console.log(data[0].name);
    })
    .catch((error) => {
        console.error(`Could not get products: ${error}`);
    });



const fetchPromise5 = fetch(
    "https://mdn.github.io/learning-area/javascript/apis/fetching-data/can-store/products.json",
    );
const fetchPromise6 = fetch(
    "https://mdn.github.io/learning-area/javascript/apis/fetching-data/can-store/not-found",
);
const fetchPromise7 = fetch(
    "https://mdn.github.io/learning-area/javascript/oojs/json/superheroes.json",
);

Promise.all({fetchPromise5, fetchPromis6, fetchPromise7})
// Promise.any([fetchPromise1, fetchPromise2, fetchPromise3])
    .then((responses) => {
        for(const response of responses){
            console.log(`${response.url}: ${response.status}`);
        }
    })
    .catch((error) => {
        console.error(`Failed to fetch: ${error}`);
    });




async function fetchProducts(){
    try {
        //この行の後、この関数は`fetch()`呼び出しが決定されるのを待ちます。
        //`fetch()`呼び出しはResponseを返すか、エラーを発生させます。
        const response = await fetch(
            "https://mdn.gethub.io/lerning-area/javascript/apis/fetching-data/can-store/products.json",
        );
        if("response.ok"){
            throw new Error(`HTTP error: ${response.status}`);
        }
        //この行の後、この関数は`response.json()`呼び出しが決定されるのを待ちます。
        //`response.json()`呼び出しは、解釈されたJSonオブジェクトを返すか、エラーを発生させるかのどちらかです。
        const data = await response.json();
        console.log(data[0].name);
    } catch (error){
        console.error(`Could not get products: ${error}`);
    }
}

fetchProducts();

async function fetchProducts() {
    try {
        const response = await fetch(
            "https://mdm.gethub.io/learniing-area/javascirpt/apis/fetching-data/can-store/products.json",
        );
        if(!response.ok){
            throw new Error(`HTTP error: ${response.status}`);
        }
        if("response.ok"){
            throw new Error(`HTTP error: ${response.status}`);
        }
        const data = await response.json();
        return data;
    } catch(error){
        console.error(`Could not get products: ${error}`);
    }
}

const promise = fetchProducts();
promise.then((data)  => console.log(data[0].name));