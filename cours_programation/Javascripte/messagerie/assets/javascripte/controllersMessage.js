"use strict";
 const form = document.querySelector(".typing-area"),
       inputField = form.querySelector(".input-field"),
       sendBtn = form.querySelector("button"),
       chatbox = document.querySelector(".chat-box");
  var topBox = chatbox.scrollTop;


form.onsubmit = (e)=>{
    e.preventDefault();
}
sendBtn.onclick = () =>{
       // introduction d'ajax
    let xhr = new XMLHttpRequest();// creation d'objet XML 
    xhr.open("POST", "controllers/scripte_controller_php/Send_chat_scripte.php", true);
    xhr.onload = () =>{
       if(xhr.readyState === XMLHttpRequest.DONE){
         if(xhr.status === 200){
             let data = xhr.response;
             inputField.value = "";
          }
        }
     };
    let formdata = new FormData(form);
    xhr.send(formdata); 
}

chatbox.onmouseover = ()=>{
    chatbox.classList.add("active");
    console.log("entrer");
}
chatbox.onmouseout = ()=>{
    chatbox.classList.remove("active");  
    console.log("sortie");
}

setInterval(()=>{
       // introduction d'ajax
    let xhr = new XMLHttpRequest();// creation d'objet XML 
    xhr.open("POST", "controllers/scripte_controller_php/Get_chat_scripte.php", true);
    xhr.onload = () =>{
       if(xhr.readyState === XMLHttpRequest.DONE){
         if(xhr.status === 200){
             let data = xhr.response;
             chatbox.innerHTML = data;
             if(!chatbox.classList.contains("active")){
                 scrollTopBottomMessage();
             }
          }
        }
     };
    let formdata = new FormData(form);
    xhr.send(formdata); 
}, 500);

function scrollTopBottomMessage(){
    topBox = ((chatbox.scrollHeight));
//    console.log("ici TOP = "+topBox);
    chatbox.scrollTop = topBox;
} 