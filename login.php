<script>
    function validate_1(form){
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
        
    var emailRegx = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
        
    if(email == null || email==""){
        alert("Write your email!");
        email.focus;
        return false;
    }else if(!(emailRegx.test(email))){
        alert("Your email should look like this: 'example@example.com'!");
        email.focus;
        return false;
    }else if(password == null || password==""){
        alert("Write your password!");
        password.focus;
        return false;
    }else{
        return true;
    }
}
</script>

<?php
    session_start();
    if(isset($_SESSION['user_id'])){
        header("Location: index.php");
    }
    require 'includes/dbconnect.php';
       
    if(isset($_POST['submit'])):
        $email=$_POST['email'];
        $password=$_POST['password'];
        
        $query = $pdo->prepare('SELECT id, name, email, password, role FROM users WHERE email=:email');
        $query->bindParam(':email', $email);
        $query->execute();
        
        $user = $query->fetch();
        
        if(count($user)>0 && password_verify($password, $user['password'])){
            $_SESSION['user_id']=$user['id'];
            $_SESSION['name']=$user['name'];
            $_SESSION['role']=$user['role'];
            
            header("Location: index.php");
        }else{
             echo '<script>alert("Email  or Passowrd is wrong!");</script>';
        }
    endif;
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Login</title>
    </head>
    <body>
        <a href="index.php">Return back to the home page</a>
        <div class="log-reg-container">
            <div class="form-header">
                <h3>Log in</h3>
            </div>
            <form action="login.php" method="POST" class="login-form" name="form" onsubmit="return validate_1(this);">
                <div class="form-element">
                    <input type="text" id="email" name="email" class="form-input" placeholder="Email"/>
                </div>
                <div class="form-element">
                    <input type="password" id="password" name="password" class="form-input" placeholder="Password"/>
                </div>
                <div class="form-element">
                    <button class="form-button" type="submit" name="submit">Login</button> 
                </div>
            </form>
            <div class="form-footer">
                <p>Don't have an account? <a href="register.php">Register here</a></p> 
            </div>
        </div>
        
        
    </body>
    <script src="js/main.js"></script>
</html>


<style>
/*LOGIN AND REGISTER FORM-------------------------------------------------------------------*/

    a{
        color: white;
        text-decoration: none;
    }
    
.log-reg-container{
    background-color:lightblue;
    position: relative;
    left: 25%;
    width: 30%;
    margin: 10%;
    height: auto;
    border: 3px solid #338BA8;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.form-header{
    height: 10px;
    font-size: 25px;
    margin: 10px;
    padding-bottom: 20px;
}
.form-footer{
    margin: 10px;
    padding-top: 10px;
}
.form-footer a{
    color:orangered;
    text-decoration: none;
}
.form-input{
    height: 30px;
    border-radius: 5px;
    border: 2px solid black;
}

.form-element{
    padding: 10px;
}
.form-button{
    font-size: 15px;
    position: relative;
    width: 50%;
    height: 30px;
    left: 25%;
    background-color:#338BA8;
    border: 2px solid black;
    border-radius: 20px;
}
.form-button:hover{
    transition: all 0.2s;
    background-color: white;
    color: orangered;
}

#register{
    background-color: #FFFF99;
    border: 3px solid orangered;
}
#register .form-button{
    background-color:orangered;
    color: white;
}
#register .form-button:hover{
    font-size: 15px;
    transition: all 0.2s;
    background-color: white;
    color: #338BA8;
    color: orangered;
}
   
@media screen and (max-width:700px){
    .form-input{
        width: 150px;
    }
    .form-footer p{
        font-size: 15px;
    }
}
</style>