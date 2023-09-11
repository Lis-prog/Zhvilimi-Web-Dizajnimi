<script>
    function validate_3(contact){
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var comment = document.getElementById("comment").value;
        var emailRegx = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
        var inputContact = document.getElementsByClassName('input-contact');
        
        if(name == null || name==""){
            inputContact[0].style.border = "5px solid red";  
            inputContact[0].placeholder = "Write your name!";
            name.focus;
            return false;
       }else if(email == null || email==""){
            inputContact[0].style.border = "3px solid orange";
            inputContact[1].style.border = "5px solid red";  
            inputContact[1].placeholder = "Write you email!";
            email.focus;
            return false;
        }else if(!(emailRegx.test(email))){
            alert("Your email should look like this: 'example@example.com'!");
            email.focus;
            return false;
        }else if(comment== null || comment==""){
            inputContact[0].style.border = "3px solid orange";
            inputContact[1].style.border = "3px solid orange"; 
            inputContact[2].style.border = "5px solid red"; 
            inputContact[2].placeholder = "Please write something.";
            comment.focus;
            return false;
        }else{
            inputContact[1].style.border = "3px solid orange";
            alert('Thank you for your submission!');
            return true;
        }
        
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
    }
</script>

<?php 
    require 'includes/dbconnect.php';

        if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
        
        $sql = 'INSERT into contactus (name, email, comment) values (:name, :email, :comment)';
            
        $query = $pdo->prepare($sql);
        $query->bindParam('name',$name);
        $query->bindParam('email',$email);
        $query->bindParam('comment',$comment);
        
        $query->execute();
       
        header("Location: index.php");
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="">
        <title>Contact us</title>
    </head>
    <body>
        <div  id="contact" class="contact-container">
            <div class="contact-nav">
                <h1>Contact us</h1>
            </div>
            <form class="contact" action="contactUs.php" name="contact" method="post" onsubmit="return validate_3(this)">
                <input type="text" id="name" name="name" class="input-contact" placeholder="Name"/>
                <input type="text" id="email" name="email" class="input-contact" placeholder="Email"/>
                <input class="input-contact" id="comment" name="comment" placeholder="Comment"/>
                <button class="contact-submit" type="submit" name="submit" id="submit2">Submit</button>
            </form>
        </div>
    </body>
</html>



<style>
/*CONTACT FORM-----------------------------------------------------------------------------*/
html{
     background-color: black;
}

*{
    padding: 0;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}
.contact-container{
    display: flex;
    margin: 20px;
    flex-direction: column;
    align-items: center;
    border: 2px solid orange;
    width: 38%;
    position: relative;
    left: 30%;
    min-height: 300px;
}
.contact-nav{
    margin: 20px;
    color: white;
    font-size: 22px;
}
.contact{
    height: auto;
    display:flex;
    flex-direction: column;
}
.input-contact{
    width: 200px;
    height: 40px;
    margin-top: 20px;
    border: 3px solid orange;
    border-radius: 5px;
}
#submit2 {
  font-size: 15px;
  position: relative;
  width: 100px;
  left: 25%;
  margin: 30px 0;
  padding: 10px 10px;
  background-color:orange;
  border-radius: 20px;
}

#submit2:hover{
    transition: all 0.2s;
    background-color: white;
    color: black;
}

@media screen and (max-width:768px){
    .contact-container{
        left: 18%;
        width: 60%;
    }   
    .input-contact{
         width: 150px;
    }
    .contact-container h1{
        font-size: 24px;
    }
    #submit2 {
        width: 100px;
        left: 15%;
        margin: 30px 0;
        padding: 10px 10px;
    }
    
@media screen and (max-width:375px){
    .contact-container{
        left: 15%;
        width: 60%;
    }    
}
</style>