//HEADER----------------------------------------------------------------
const navSlide = ()=>{
    const mobMenu = document.querySelector('.mob-menu');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');
    
    mobMenu.addEventListener('click',()=>{
        nav.classList.toggle('nav-active');
    });
}
navSlide();


//LOGIN---------------------------------------------------------------------
//function validate_1(){
//    var email = document.getElementById("email").value;
//    var password = document.getElementById("password").value;
//        
//    var emailRegx = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
//        
//    if(email == null || email==""){
//        alert("Write your email!");
//        email.focus;
//        return false;
//    }else if(!(emailRegx.test(email))){
//        alert("Your email should look like this: 'example@example.com'!");
//        email.focus;
//        return false;
//    }else if(password == null || password==""){
//        alert("Write your password!");
//        password.focus;
//        return false;
//    }else{
//        return true;
//    }
//}

//REGISTER-----------------------------------------------------------------------------

// function validate_2(){
//    var username = document.getElementById("username").value;
//    var email = document.getElementById("email").value;
//    var password = document.getElementById("password").value;
//    var passwordC = document.getElementById("passwordC").value;
//        
//    var usernameRegx =/^[a-zA-z0-9]{5,8}$/;
//    var emailRegx = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
//            
//    if(username == null || username==""){
//        alert("Write your username!");
//        username.focus;
//        return false;
//    }else if(!(usernameRegx.test(username))){
//        alert("Username must have only letters or numbers and it must be 5-8 chars long!");
//        username.focus;
//        return false;
//    }else if(email == null || email==""){
//        alert("Write your email!");
//        email.focus;
//        return false;
//    }else if(!(emailRegx.test(email))){
//        alert("Your email should look like this: 'example@example.com'!");
//        email.focus;
//        return false;
//    }else if(password == null || password==""){
//        alert("Write your password!");
//        password.focus;
//        return false;
//    }else if(passwordC== null || passwordC==""){
//        alert("Write your confirmation password!");
//        passwordC.focus;
//        return false;
//    }else if(password!=passwordC){
//        alert("Your passwords don't match! Write the confirmation password again!");
//        passwordC.focus;
//        return false;
//    }else{
//        return true;
//    }
//}



//CONTACT US------------------------------------------------------------------------------------

//function validate_3(number){
//    var inputContact = document.getElementsByClassName('input-contact');
//        switch(number==0){
//        case inputContact[0].value=="":
//                
//             inputContact[0].style.border = "5px solid red";  
//             inputContact[0].placeholder = "Write your name!";
//        break;
//        case inputContact[1].value=="":
//                
//             inputContact[0].style.border = "1px solid black";
//             inputContact[1].style.border = "5px solid red";  
//             inputContact[1].placeholder = "Write you email!";
//        break;
//            case inputContact[0].value != "" && inputContact[1].Value != "":
//                inputContact[1].style.border = "1px solid black";
//                alert('Thank you for your submission!')
//        default:
//        } 
//    }

//SLIDER---------------------------------

