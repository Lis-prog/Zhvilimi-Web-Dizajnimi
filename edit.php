    <?php 

    $errorName = "";
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data); 
        $data = htmlspecialchars($data);
        return $data;
    }

    require 'includes/dbconnect.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $sql = "SELECT * from users where id =:id";
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);
    $user = $query->fetch(); 

        if(isset($_POST['submit'])){ 
         if(empty($_POST['name'])){
        $errorName = "Write a name";
        }else{
            $name = test_input($_POST['name']);
        }
        $email = $_POST['email'];
        
    
        $sql = "UPDATE users SET name = :name, email =:email where id=:id";
        $query = $pdo->prepare($sql);
        $query->bindParam('name', $name);
        $query->bindParam('email', $email);
        $query->bindParam('id', $id);

        $query->execute(); 
        header("Location: admin.php");
    }
?>

<style>
   html{
     background-color: black;
    }
    *{
        color: orange;
        padding: 0;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
    h2{
        text-align: center;
        margin-top: 100px;
    }
    .edit-from{
        width: 50%;
        position: relative;
        left: 25%;
        border: 3px solid orange;
        border-radius: 10px;
        text-align: center;
        margin: 30px 0;
        
    }
    .edit-from h2{
        margin-top: 5px;;
        margin-bottom: 10px;
    }
    .edit-from input{
        border: 5px solid orange;
        margin: 10px 0;
        height: 30px;
        color: black;
    }
     .edit-from button{
        margin: 10px 0;
        height: 30px;
         width: 80px;
         color: black;
    }
</style>

<div class="edit-from">
    <h2>Edit users</h2>
    <form method="POST">
    EMRI:<br>
    <input type="text" name="name" value= "<?php echo $user['name']?>"><br>
    EMAIL:<br>
    <input type="email" name="email" value= "<?php echo $user['email']?>"><br>
        <button type="submit" name="submit">Edit</button><br>
    </form>
</div>