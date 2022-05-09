window.onload = () =>{
    document.querySelector('.lesson1').style.display='block';
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
    document.querySelector('.'+event.target.name).style.display='block';
}