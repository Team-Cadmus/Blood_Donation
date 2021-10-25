function phonevalidator(){
    var x=document.getElementById("phonenumber");
    var phoneno=/^[6-9][0-9]{9}$/;
    if(!x.value.match(phoneno)){
        alert("This is not a valid phone number");
        return(false);
    }
    return(true);
}
function passvalidator(){
    var pass1=document.getElementById("pass");
    var pass2=document.getElementById("conf_pass");
    if(pass1.value!=pass2.value){
        alert("Passwords don't match");
        return(false);
    }
    return(true);
}
function emailvalidator(){
    var email=document.getElementById("email");
    var mail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(!email.value.match(mail)){
        alert("This is not a valid email id");
    }
}
function calculateAge(){
    var user_date=document.getElementById("DOB").value;
    var dob = new Date(user_date);  
    var dif_month = Date.now() - dob.getTime();  
    var month_date_format = new Date(dif_month);       
    var year = month_date_format.getUTCFullYear();  
    var user_age = Math.abs(year - 1970);   
    document.getElementById("age").value = user_age;  
}
function validatingAge(){
    var age=document.getElementById("age").value;
    if(age<18){
        alert("Age of donor can't be less than 18 years.");
    }
}
function validator(){
let x=phonevalidator();
let y=passvalidator();
if(Boolean(x) && Boolean(y)){
    return(true);
}
return(false);
}

