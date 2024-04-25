let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
} 

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
} 

let call_btn = document.querySelector("#call");
let call = document.querySelector(".call");

call_btn.onclick = () =>{
  call_btn.classList.toggle('fa-times');
  call.classList.toggle('active');
} 
