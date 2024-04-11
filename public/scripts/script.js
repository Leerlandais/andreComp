const compListHead = document.getElementById("compListHead");

if (!document.querySelector(".compName")) {
    compListHead.innerHTML = 'No companies yet, click <a href="?sect=addComp">here</a> to add one';
}


window.addEventListener('resize', displayScreenWidth); 

function displayScreenWidth() { 
    const screenwidth = document.getElementById("screenwidth");
    let theWidth = window.innerWidth;                                             
    screenwidth.innerHTML = 'The screen width is: ' + theWidth;
}
displayScreenWidth();



/*

let myArr = [53882, 80453, 30238, 98621, 45999, 78338, 96038, 5427, 19335, 71624, 33262, 4486];
const aveOfArray = (myArr) => myArr.reduce((sum, val) => sum + val) / myArr.length;
let avg = aveOfArray(myArr)

*/