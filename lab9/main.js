const elem = document.getElementById('elem');

let move = 0;
let countOfWin = 0;
let GameOn = true;


document.getElementById("player").innerHTML = "Ходит - X";
let ok = true;

elem.addEventListener('click',ev => {
    if(ev.target.className === 'cell' && GameOn === true)
    {

        if(ev.target.innerHTML === 'X' || ev.target.innerHTML === 'O')
        {

            if(ok === true) {
                let temp1 = "Это поле занято. ";
                let temp2 = document.getElementById("player").innerHTML;
                document.getElementById("player").innerHTML = temp1+temp2;
            }

            ok = false;
        }

        if(ev.target.innerHTML === "")
            ok = true;

         if(ok === true) {
             if (move % 2 === 0)
             {
                 document.getElementById("player").innerHTML = "Ходит - O";
             }
         else
             if (move % 2 !== 0)
             {
                 document.getElementById("player").innerHTML = "Ходит - X";

             }


             if (ev.target.innerHTML !== 'X' && ev.target.innerHTML !== 'O') {
                 if (move % 2 === 0) {

                     ev.target.innerHTML = 'X';
                     move++;
                 } else if (move % 2 !== 0) {
                     ev.target.innerHTML = 'O';
                     move++;
                 }
             }


             check();

         }
    }


})

const check = () => {
    const cells = document.getElementsByClassName('cell')
    const arr = [
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8],
        [0, 3, 6],
        [1, 4, 7],
        [2, 5, 8],
        [0, 4, 8],
        [2, 4, 6]
    ];

    let result;

    let win = false;

    let whoWin = 0;

    for (let i = 0; i < arr.length; i++) {
        if (cells[arr[i][0]].innerHTML === 'X' && cells[arr[i][1]].innerHTML === 'X' && cells[arr[i][2]].innerHTML === 'X') {
            result = "X";
            win = true;

            whoWin = i+1;

            break;
        } else if (cells[arr[i][0]].innerHTML === 'O' && cells[arr[i][1]].innerHTML === 'O' && cells[arr[i][2]].innerHTML === 'O') {
            result = "O";
            win = true;

            whoWin = i+1;

            break;
        }
    }


     let draw = true;
     for(let i = 1; i<=9; i++)
     {
         if(document.getElementById("insideCell" + i).innerHTML === "" && win===false)
             draw = false;

     }


     if(win === true)
     {
         GameOn = false;
         countOfWin++;
         document.getElementById("player").innerHTML = "Победил - "+result;

         for(let i=1; i<=9; i++)
         document.getElementById("insideCell"+i).style.backgroundColor = "pink";

         document.getElementById("knopka").className = "btn2";

         if(whoWin===1)
             document.getElementById("img1").setAttribute('type', 'image');
         else if(whoWin===2)
             document.getElementById("img2").setAttribute('type', 'image');
         else if(whoWin===3)
             document.getElementById("img3").setAttribute('type', 'image');
         else if(whoWin===4)
             document.getElementById("img4").setAttribute('type', 'image');
         else if(whoWin===5)
             document.getElementById("img5").setAttribute('type', 'image');
         else if(whoWin===6)
             document.getElementById("img6").setAttribute('type', 'image');
         else if(whoWin===7)
             document.getElementById("img7").setAttribute('type', 'image');
         else if(whoWin===8)
             document.getElementById("img8").setAttribute('type', 'image');

     } else if(draw === true)
     {
         GameOn = false;
         countOfWin++;
         document.getElementById("player").innerHTML = "Ничья";

         for(let i=1; i<=9; i++)
             document.getElementById("insideCell"+i).style.backgroundColor = "black";

         document.getElementById("knopka").className = "btn3";
     }

}