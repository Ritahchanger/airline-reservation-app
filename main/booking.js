// const bookingform=document.getElementById("flight_form");
// bookingform.addEventListener("paste",(e)=>{
//   e.preventDefault();
// });
// bookingform.addEventListener("submit",(e)=>{
    
//     const fname=document.getElementById("fname").value;
//     const fname_error=document.getElementById("fname_error");
//     const lname=document.getElementById("lname").value;
//     const lname_error=document.getElementById("lname_error");
//     const place_to=document.getElementById("place_to").value;
//     const place_to_error=document.getElementById("place_to_error");
//     const person_type=document.getElementById("way_type").value;
//     const person_type_error=document.getElementById("person_type_error");
//     const way_type=document.getElementById("way_type").value;
//     const way_type_error=document.getElementById("way_type_error");
//     const from_=document.getElementById("from_").value;
//     const from_date_error=document.getElementById("from_date_error");
//     const to_=document.getElementById("to_").value;
//     const to_date_error=document.getElementById("to_date_error");
//     const class_type=document.getElementById("class_type").value;
//     const classTypeError=document.getElementById("class_type_error");
//     const ticket=document.getElementById("ticket").value;
//     const ticket_no_error=document.getElementById("ticket_no_error");
//     const email=document.getElementById("email").value;
//     const email_error=document.getElementById("email_error");

//     if(!emailValidation()&&!validateName(fname,fname_error)&&!validateName(lname,lname_error)&&!validatePlace(place_to,place_to_error)&&!validatePerson(person_type,person_type_error)&&!validateReturn(way_type,way_type_error)&&! validateDate(from_,from_date_error)&&!validateDate(to_,to_date_error)&&!validatePerson(class_type,classTypeError)&&! validateTicket(ticket,ticket_no_error)){
//          return;
//     }else{
//         e.preventDefault()
//     }


// })

// const emailValidation=()=>{
//     const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
//     const email=document.getElementById("email").value;
//     const email_error=document.getElementById("email_error");

//     if(email.length===0){
//        email_error.style.display="block";
//        email_error.innerText="Please fill this field";
//        return false;
//     }
//     else if(!emailRegex.test(email)){
//         email_error.style.display="block";
//         email_error.innerText="Invalid Email";
//         return false; 
//     }
//     else{
//         email_error.style.display="none";
//         return true;
//     }

// }
// const validateName=(inputName,inputError)=>{
//     const nameRegex = /^[A-Za-z\s.'-]+$/;
//     if(inputName.length===0){
//         inputError.style.display="block";
//         inputError.innerText="Please fill this field";
//         return false;
//      }
//      else if(!nameRegex.test(inputName)){
//          inputError.style.display="block";
//          email_error.innerText="Invalid Name";
//          return false; 
//      }
//      else{
//          inputError.style.display="none";
//          return true;
//      }
 
// }

// const validatePlace=(inputName,inputError)=>{
//     const nameRegex = /^[A-Za-z\s.'-]+$/;
//     if(inputName.length===0){
//         inputError.style.display="block";
//         inputError.innerText="Please fill this field";
//         return false;
//      }
//      else if(!nameRegex.test(inputName)){
//          inputError.style.display="block";
//          email_error.innerText="Invalid Place";
//          return false; 
//      }
//      else{
//          inputError.style.display="none";
//          return true;
//      }
 
// }

// const validatePerson=(inputName,inputError)=>{
//     const nameRegex = /^[A-Za-z\s.'-]+$/;
//     if(inputName.length===0){
//         inputError.style.display="block";
//         inputError.innerText="Please fill this field";
//         return false;
//      }
//      else if(!nameRegex.test(inputName)){
//          inputError.style.display="block";
//          email_error.innerText="Please make a choise";
//          return false; 
//      }
//      else{
//          inputError.style.display="none";
//          return true;
//      }
 
// }
// const validateReturn=(inputName,inputError)=>{
//     const nameRegex = /^[A-Za-z\s.'-]+$/;
//     if(inputName.length===0){
//         inputError.style.display="block";
//         inputError.innerText="Please fill this field";
//         return false;
//      }
//      else if(!nameRegex.test(inputName)){
//          inputError.style.display="block";
//          email_error.innerText="Please make a choise";
//          return false; 
//      }
//      else{
//          inputError.style.display="none";
//          return true;
//      }
 
// }

// const validateDate=(timeInput,inputError)=>{
//     if(timeInput.length===0){
//         inputError.style.display="block";
//         inputError.innerText="This field cannot be empty";
//         return false;
//     }
//     else{
//         inputError.style.display="none";
//         inputError.innerText="";
//         return true;
//     }

// }

// const validateTicket=(inputText,error)=>{
//     if(inputText.length===0){
//         error.style.display="block";
//         return false;
//     }
//     else{
//         error.style.display="none";
//         return true;
//     }
// }