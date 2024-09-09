// var x = 1;
// if(x===1){
//     var x = 2;
//     console.log(x);
// }
// console.log(x);

// function foo(){
//     var x = 1;
//     function bar(){
//         var y = 2;
//         console.log(x);
//         console.log(y);
//     }
//     bar();
//     console.log(x);
//     console.log(y);
// }


var x = 0;

console.log(typeof z);

function a(){
    var y = 2;

    console.log(x,y);

    function b(){
        x = 3;
        y = 4;
        z = 5;
    }

    b();
    console.log(x,y,z);
}

a();
console.log(x,z);
console.log(typeof y);
