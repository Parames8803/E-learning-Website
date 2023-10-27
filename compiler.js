
function run(){
    let html_code=document.getElementById('msg').value;
    let css_code="<style>"+document.getElementById('msg1').value+"</style>";
    let js_code=document.getElementById('msg2').value;
    let outputvalue=document.getElementById('output');
    let content=outputvalue.contentDocument;
    content.body.innerHTML=html_code+css_code;
    outputvalue.contentWindow.eval(js_code);
    console.log("working");
}


let output=document.getElementById("output-bar")
let hide=document.getElementById("hidden");




//download section

let textarea_1=document.getElementById('msg');
let textarea_2=document.getElementById('msg1');
let textarea_3=document.getElementById('msg2');
let text_bar=document.getElementById('text');
let select_bar=document.getElementById('select');
let button=document.getElementById('save');
let ico1=document.getElementById('save_ico');
let ico2=document.getElementById('save_ico_2');
let ico3=document.getElementById('save_ico_3');


function btn_1(){
output.style.display="none";
hide.style.display='block';
hide.style.right="-400px";
hide.style.transition="1.5s";

button.addEventListener('click', () => {
    const blob=new Blob([textarea_1.value],{type: select_bar.value});
    const linkurl=URL.createObjectURL(blob);
    const link=document.createElement("a");
    link.download=text_bar.value;
    link.href=linkurl;
    link.click();
    hide.style.right='-800px';
})
}

function btn_2(){
    output.style.display="none";
    hide.style.display='block';
    hide.style.right="-400px";
    hide.style.transition="1.5s";
    button.addEventListener('click', () => {
    const blob=new Blob([textarea_2.value],{type: select_bar.value});
    const linkurl=URL.createObjectURL(blob);
    const link=document.createElement("a");
    link.download=text_bar.value;
    link.href=linkurl;
    link.click();
    hide.style.right='-800px';
    })
}

function btn_3(){
    output.style.display="none";
    hide.style.display='block';
    hide.style.right="-400px";
    hide.style.transition="1.5s";
    button.addEventListener('click', () => {
    const blob=new Blob([textarea_3.value],{type: select_bar.value});
    const linkurl=URL.createObjectURL(blob);
    const link=document.createElement("a");
    link.download=text_bar.value;
    link.href=linkurl;
    link.click();
    hide.style.right='-800px';
    })
}