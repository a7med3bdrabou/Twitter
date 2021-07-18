const form = document.querySelector(".mb-3") ; 
const fName = document.getElementById("firstName");
const lName = document.getElementById("lastName");
const email = document.getElementById("email");
const password = document.getElementById("password");
const c_password = document.getElementById("confirm-password");


form.addEventListener("submit",(e)=>{
    e.preventDefault();
    checkInputs();
}) ;

function checkInputs(){
    const fNameValue = fName.ariaValueText.trim();
    const lNameValue = lName.nodeValue.trim();
    const emailValue = email.nodeValue.trim();
    const passwordValue = password.nodeValue.trim();
    const c_passwordValue = c_password.nodeValue.trim();
    
    if(fNameValue === " "){
        setErrorFor(fName , "User name can't be blank");

    }else {
        setScuccessFor(fName);
    }
}

function setErrorFor(input , message) {
    const formControl = form.parentElement ; 
    const small = document.querySelector("small") ;
    small.innerText = message ; 
    formControl.className ="mb-3 error";
}


function setScuccessFor(input){
    const formControl = form.parentElement ; 
    formControl.className ="mb-3 success";
}



// const showPassword = document.querySelector(".show-pass")

function showPass() {
    if(password.getAttribute("type")==="password"){
        password.setAttribute("type","text");
    }else {
        password.setAttribute("type","password");
    }
}

