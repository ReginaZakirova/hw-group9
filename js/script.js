/*window.onload = () =>{
    document.querySelector('.lesson1').style.display='grid';
    let buttons = document.querySelectorAll("hedear>a");
    for (let button of buttons){
        button.onclick = 'changeWork';
    }
}

function changeWork(){
    let divs = document.querySelectorAll("main>div");
    for (let div of divs){
        div.style.display = 'none';
    }
    let display = 'block';
    if(event.target.name == "lesson1") display = 'grid';
    document.querySelector('.'+event.target.name).style.display = display;
}*/

function changeColor(){
    document.getElementsByTagName('main')[0].style.backgroundColor = event.target.value;
}