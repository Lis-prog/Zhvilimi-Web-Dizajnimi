<script>
    function validate_2(regform){
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var passwordC = document.getElementById("passwordC").value;
        
    var usernameRegx =/^[a-zA-z0-9]{5,8}$/;
    var emailRegx = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
            
    if(username == null || username==""){
        alert("Write your username!");
        username.focus;
        return false;
    }else if(!(usernameRegx.test(username))){
        alert("Username must have only letters or numbers and it must be 5-8 chars long!");
        username.focus;
        return false;
    }else if(email == null || email==""){
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
    }else if(passwordC== null || passwordC==""){
        alert("Write your confirmation password!");
        passwordC.focus;
        return false;
    }else if(password!=passwordC){
        alert("Your passwords don't match! Write the confirmation password again!");
        passwordC.focus;
        return false;
    }else{
        return true;
    }
}

</script>


<?php
    session_start();

    $errorName = "";
    $errorEmail = "";

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    if(isset($_SESSION['user_id'])){
        header("Location: index.php");
    }
    require 'includes/dbconnect.php';

    if(isset($_POST['submit'])){
        
        if(empty($_POST['name'])){
            $errorName = "Write your name";
        }else{
            $name = test_input($_POST['name']);
            if(!preg_match("/^[a-zA-Z]*$/", $name)){
                $errorName = "Only letters and numbers are allowed";
            }
        }
        
        if(empty($_POST['email'])){
            $errorEmail = "Email is required";
        }else{
            $email = test_input($_POST['email']);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errorEmail = "This email format is invalid!";
            }
        }
        
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        
        $sql = 'INSERT INTO users (name, email, password) values (:name, :email, :password)';
        $query = $pdo->prepare($sql);
        $query->bindParam('name', $name);
        $query->bindParam('email',$email);
        $query->bindParam('password',$password);
        
        if($query->execute()){
            echo '<script>alert("Registered successfully");</script>';
        }else{
            echo '<script>alert("There was a problem while registering");</script>';
            
            header("Location: register.php");
        }
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Register</title>
    </head>
    <body>
        <a href="index.php">Return back to the home page</a>
        <div id="register" class="log-reg-container">
             <?php 
                if(!empty($message)){
                    echo $message;
                }
            ?>
            <div class="form-header">
                <h3>Register here</h3>
            </div>
            <form action="register.php" method="POST" class="register-form" name="regform" onsubmit="return validate_2(this)">
                <div class="form-element">
                    <input type="text" class="form-input" id="username" name="name" placeholder="Username"/>
                </div>
                <div class="form-element">
                    <input type="text" class="form-input" id="email" name="email" placeholder="Email"/>
                </div>
                <div class="form-element">
                    <input type="password" class="form-input" id="password" name="password" placeholder="Password"/>
                </div>
                <div class="form-element">
                    <input type="password" class="form-input" id="passwordC" placeholder="Confirm password"/>
                </div>
                <div class="form-element">
                    <button class="form-button" name="submit" type="submit">Register</button> 
                </div>
                <div class="form-footer">
                    <p>Return back to <a href="login.php" style="color: blue;">login here</a></p> 
            </div>
            <span><?php echo $errorName; ?></span>
            <span><?php echo $errorEmail; ?></span>
            </form>
        </div>
    </body>
    <script src="main.js"></script>
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
    left: 28%;
    width: 25%;
    margin: 10%;
    min-height: 250px;
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

@media screen and (max-width:845px){
    
    .form-header{
        font-size: 20px;
    }
    .form-input{
        width: 150px;
    }
    .form-footer p{
        font-size: 15px;
    }
}

@media screen and (max-width:696px){
    .form-header{
        font-size: 18px;
    }
    .log-reg-container{
        width: 30%;
    }
}    
</style>