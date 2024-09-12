function showPass(){
    let pass = document.getElementById("pass");
    if (pass.type === "password"){
        pass.type = "text";
    }
    else{
        pass.type = "password";
    }
}

function validUsername(){
    let username = document.getElementById("username");
    console.log(username.value);
    if(username.value == 'admin'){
        username.classList.add("invalid");
        username.nextElementSibling.style.display = "inline";
        return false;
    }else
    {
        element.classList.remove("invalid");
        element.nextElementSibling.style.display = "none";
        return true;
    }
}

function validEmail(){
    var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    let email = document.getElementById("email");

    let checkExists = false;
    var hxr = new XMLHttpRequest();
    hxr.onreadystatechange  = function(){
        if (this.readyState == 4 && this.status == 200) {
            checkExists = hxr.responseText;
          }
    }
    hxr.open("GET","checkEmailExists?q="+email.value,false);
    hxr.send();

    if (emailPattern.test(email.value) && checkExists){
        email.classList.remove("invalid");
        email.nextElementSibling.style.display = "none";
        document.getElementById("emailError").style.display = "none";
        return true;
        
    }else if(!emailPattern.test(email.value))
    {
        email.classList.add("invalid");
        email.nextElementSibling.style.display = "inline";
        document.getElementById("emailError").style.display = "none";

    }else{
        email.classList.add("invalid");
        document.getElementById("emailError").style.display = "inline";
        email.nextElementSibling.style.display = "none";
    }
    return false;
}

let pass = document.getElementById("pass");
let confPass = document.getElementById("confPass")

function validPass(){
    if (confPass.value.length != 0){
        validConfPass();
    }
    if(pass.value.length < 8 || pass.value.length > 16){
        pass.classList.add("invalid");
        pass.nextElementSibling.style.display = "inline"
        return false;
    }else
    {
        pass.classList.remove("invalid");
        pass.nextElementSibling.style.display = "none"
        return true; 
    }
    
}

function validConfPass(){
    if (pass.value === confPass.value){
        confPass.classList.remove("invalid");
        confPass.nextElementSibling.style.display = "none"                    
        return true;

    }else
    {
        confPass.classList.add("invalid");
        confPass.nextElementSibling.style.display = "inline"
        return false;
    }
}

function validPhoneNo(){
    var phonePattern = /^\(?([0-9]{2,3})\)?-([0-9]{7,8})$/;
    let phoneNo = document.getElementById("phoneNo");
    if (!phonePattern.test(phoneNo.value)){
        phoneNo.classList.add("invalid");
        phoneNo.nextElementSibling.style.display = "inline";
        return false;
    }else
    {
        phoneNo.classList.remove("invalid");
        phoneNo.nextElementSibling.style.display = "none";
        return true;
    }
}       

function validEmpty(element){
    if(element.value.length == 0){
        element.classList.add("invalid");
        element.nextElementSibling.style.display = "inline";
        return false;
    }else
    {
        element.classList.remove("invalid");
        element.nextElementSibling.style.display = "none";  
    }
}


function validation(){
    final_validation = validUsername() && validEmail() && validPass() && validConfPass() && validPhoneNo();                
    document.getElementById("validresult").value = condition ? 'true' : 'false';
};