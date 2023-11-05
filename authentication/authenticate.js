document.addEventListener("DOMContentLoaded",function(){

const signupform=document.getElementById("sign_up");


signupform.addEventListener("submit",(e)=>{
const sname=document.getElementById("sname").value;
const lname=document.getElementById("lname").value;
const idno=document.getElementById("idno").value;
const email=document.getElementById("email").value;
const password=document.getElementById("password").value;
const comfirm_password=document.getElementById("confirm_password").value;
const postion=document.getElementById("position").value;
const sname_error=document.getElementById("sname_error");
const lname_error=document.getElementById("lname_error");
const idno_error=document.getElementById("idno_error");
const email_error=document.getElementById("email_error");
const password_error=document.getElementById("password_error");
const position_error=document.getElementById("position_error");
const comfirm_password_error=document.getElementById("comfirm_password_error");

window.addEventListener("load",()=>{

    password="";
    comfirm_password="";

});
name_validator(sname,sname_error);name_validator(lname,lname_error);idno_validator(idno,idno_error);
email_validator(email,email_error);password_validator(password,password_error);password_validator(comfirm_password,comfirm_password_error);
position_validator(postion,position_error);

if(name_validator(sname,sname_error) && name_validator(lname,lname_error) && idno_validator(idno,idno_error) && email_validator(email,email_error) && password_validator(password,password_error) && password_validator(comfirm_password,comfirm_password_error) && position_validator(postion,position_error) && password!=comfirm_password){
    e.preventDefault();
    password_error.style.display="block";
    password_error.innerText="Please yours passwords are not matching";

}else if(name_validator(sname,sname_error) && name_validator(lname,lname_error) && idno_validator(idno,idno_error) && email_validator(email,email_error) && password_validator(password,password_error) && password_validator(comfirm_password,comfirm_password_error) && position_validator(postion,position_error)){
    return;
}
else{
    e.preventDefault();
}

});


const name_validator=(name,inputError)=>{
    const nameRegex = /^[A-Za-z\s.'-]+$/;
    if((name.trim()).length===0){
        inputError.style.display="block";
        inputError.innerText="Please fill this field";
        return false;
    }else if(!nameRegex.test(name)){
        inputError.style.display="block";
        inputError.innerText="Write valid name";
        return false;
    }else{
        inputError.style.display="none";
        inputError.innerText=" ";
        return true;
    }
}
const idno_validator=(idno,inputError)=>{
    if((idno.trim()).length===0){
        inputError.style.display="block";
        inputError.innerText="Please fill this field";
        return false;
    }else if(idno.length!=8){
        inputError.style.display="block";
        inputError.innerText="The id no must be 8 digits";
        return false;
    }else{
        inputError.style.display="none";
        inputError.innerText=" ";
        return true;
    }
}
const email_validator=(email,inputError)=>{
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if((email.trim()).length===0){
        inputError.style.display="block";
        inputError.innerText="Please fill this field";
        return false;
    }else if(!emailRegex.test(email)){
        inputError.style.display="block";
        inputError.innerText="Write the correct email format";
        return false;
    }else{
        inputError.style.display="none";
        inputError.innerText=" ";
        return true;
    }
}
const password_validator=(password,inputError)=>{
    const pattern_password = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/;
    if(password.length===0){
        inputError.style.display="block";
        inputError.innerText="Please fill this field";
        return false;
    }else if(!pattern_password.test(password)){
        inputError.style.display="block";
        inputError.innerText="Include uppercase,lowercase and numbers";
        return false;
    }else{
        inputError.style.display="none";
        inputError.innerText=" ";
        return true;
    }
}
const position_validator=(name,inputError)=>{
    const nameRegex = /^[A-Za-z\s.'-]+$/;
    if((name.trim()).length===0){
        inputError.style.display="block";
        inputError.innerText="Please fill this field";
        return false;
    }else if(!nameRegex.test(name)){
        inputError.style.display="block";
        inputError.innerText="Select valid postion";
        return false;
    }else{
        inputError.style.display="none";
        inputError.innerText=" ";
        return true;
    }
}

});