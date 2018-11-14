const btnLine = document.getElementById("addLine");
const btn = document.getElementById("addText");
const btnH = document.getElementById("addH");
let count = 0;


function addTestArea() {
    const divSurround = document.createElement("div");
    const textArea = document.createElement("textarea");
    const acceptBtn = document.createElement("input");
    const rejectBtn = document.createElement("input");
    const divToBtn = document.createElement("div");
    divSurround.id = count;
    divToBtn.className = "float-right";
    acceptBtn.type = "image";
    acceptBtn.src ="build/svg/check.svg";
    acceptBtn.id = count;
    rejectBtn.type = "image";
    rejectBtn.src = "build/svg/x.svg";
    rejectBtn.id = count;
    textArea.className = "form-control";
    acceptBtn.className = "mr-1";
    rejectBtn.addEventListener("click", function(){
        console.log($(this).attr('id'));
        removeArea($(this).attr('id'));
    });
    divToBtn.append(acceptBtn,rejectBtn);
    divSurround.appendChild(textArea);
    divSurround.appendChild(divToBtn);
    const div = document.querySelector(".test");
    div.appendChild(divSurround);
    count++;
}

function addLine(){
    const el = document.createElement("hr");
    const div = document.querySelector(".test");
    div.appendChild(el);
}

function removeArea(counter){
    const el = document.getElementById(counter);
    const div = document.querySelector(".test")
    div.removeChild(el);

}

btnLine.addEventListener("click", function(){
    addLine();
});

btn.addEventListener("click", function(){
    addTestArea();
});

btnH.addEventListener("click", function(){
    const div = document.getElementById("papa");
    const el = document.createElement("h2");
    el.innerText= "Do sedna";
    div.appendChild(el);
});

function getSelectionText() {
    console.log(3);
    let text = "";
    if (window.getSelection) {
        text = window.getSelection().toString();
    } else if (document.selection && document.selection.type != "Control") {
        text = document.selection.createRange().text;
    }
    return text;
}

document.onmouseup = document.onkeyup = document.onselectionchange = function() {
    document.getElementById("lol").value = getSelectionText();
    console.log(2);
};

