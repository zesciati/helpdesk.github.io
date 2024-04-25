var form = document.getElementById("signIn");
form.onsubmit = function(){
    var email = document.getElementById("email");
    var pass = document.getElementById("pass");
 
    if(email.value == ""){
        alert("Email tidak boleh kosong");
    }
    else if(pass.value == ""){
        alert("Password tidak boleh kosong");
    }
    else{
        alert("Registrasi anda berhasil");
    }
}

var form = document.getElementById("signUp");
form.onsubmit = function(){
    var nama = document.getElementById("nama");
    var email = document.getElementById("email");
    var nomor = document.getElementById("nomor");
    var pass = document.getElementById("pass");
 
    if(nama.value == ""){
        alert("Nama tidak boleh kosong");
    }
    else if(email.value == ""){
        alert("Email tidak boleh kosong");
    }
    else if(nomor.value == ""){
        alert("Nomor Telepon tidak boleh kosong");
    }
    else if(pass.value == ""){
        alert("Password tidak boleh kosong");
    }
    else{
        alert("Registrasi anda berhasil");
    }
}

const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});