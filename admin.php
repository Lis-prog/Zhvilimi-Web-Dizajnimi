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
    h1{
        text-align: center;
        margin-bottom: 20px;
    }
    h2{
        text-align: center;
        margin-top: 100px;
    }
    .adm-from{
        width: 50%;
        position: relative;
        left: 25%;
        border: 3px solid orange;
        border-radius: 10px;
        text-align: center;
        margin: 30px 0;
        
    }
    .adm-from h2{
        margin-top: 5px;;
        margin-bottom: 10px;
    }
    .adm-from input{
        margin: 10px 0;
        height: 30px;
        color: black;
    }
     .adm-from button{
        margin: 10px 0;
        height: 30px;
         width: 80px;
         color: black;
    }
    
    .tab{
        border-collapse: collapse;
        text-align: center;
        width: 80%;
        height: 20%;
        margin: 30px 0;
        border: 2px solid orange;
        position: relative;
        left: 10%;
    }
    .tab2{
        border-collapse: collapse;
        text-align: center;
        width: 50%;
        height: 40%;
        margin: 30px 0;
        border: 2px solid orange;
        position: relative;
        left: 25%;
    }
</style>

<?php
    session_start();
    if($_SESSION['role']==1){
    require "includes/dbconnect.php";
?>

<h1>Admin Dashboard</h1>

<a href="index.php" style="text-decoration: none; color:white; text-align: none; margin-bottom: 80px;">Go back to main page</a>


<?php
    
    $errormsg = "";

    if(isset($_POST['m_submit'])){
        
        if(empty($_POST['m_image'])){
            $errormsg = "You must insert a photo";
           
        }else{
            $image = $_POST['m_image'];
        }
        if(empty($_POST['m_name'])){
              $errormsg = "You must insert movie\'s name";  
        }else{
            $name = $_POST['m_name'];
        }
        $addedby = $_POST['addedby'];

        $sql = 'INSERT into movies (image, name, addedby) values (:image, :name, :addedby)';

        $query = $pdo->prepare($sql);
        $query->bindParam('image', $image);
        $query->bindParam('name', $name);
        $query->bindParam('addedby', $addedby);

        $query->execute();
        header("Location: admin.php");
    }
?>

<div class="adm-from">
    <h2>Add movies</h2>
    <form action="admin.php" method="POST">
        Image:
        <input type="text" name="m_image" required><br>
        Name:
        <input type="text" name="m_name" required><br>
        <input type="hidden" name="addedby" value="<?php echo $_SESSION['name']; ?>"><br>
        <button type="submit" name="m_submit" >Add</button>
        <span style="color:white;"><?php echo $errormsg  ?></span>
    </form>
</div>

<!-------------------------------------------------------------------------------------------------->

<?php
if(isset($_POST['n_submit'])){
    if(empty($_POST['n_image'])){
        echo "<script>alert('You must insert a photo');</script>";
    }else if(empty($_POST['n_title'])){
        echo "<script>alert('You must insert the title of the news');</script>";
    }else if(empty($_POST['n_content'])){
        echo "<script>alert('You must insert the content of the news');</script>";
    }else{
        $image = $_POST['n_image'];
        $title = $_POST['n_title'];
        $content = $_POST['n_content'];
    }
    $addedby = $_POST['addedby'];
    
    $sql = 'INSERT into news (image, title, content, addedby) values (:image, :title, :content, :addedby)';
    
    $query = $pdo->prepare($sql);
    $query->bindParam('image', $image);
    $query->bindParam('title', $title);
    $query->bindParam('content', $content);
    $query->bindParam('addedby', $addedby);
    
    $query->execute();
    header("Location: admin.php");
}
?>

<div class="adm-from">
    <h2>Add news</h2>
    <form action="admin.php" method="POST">
        Image:
        <input type="text" name="n_image" required><br>
        Title:
        <input type="text" name="n_title" required><br>
        Content:
        <textarea rows="5" cols="20" type="text" name="n_content" required></textarea><br>
        <input type="hidden" name="addedby" value="<?php echo $_SESSION['name']; ?>"><br>
        <button type="submit" name="n_submit" >Add</button>
    </form>
</div>

<!------------------------------------------------------------------------------------------------------>

<?php
if(isset($_POST['s_submit'])){
     if(empty($_POST['s_image'])){
        echo "<script>alert('You must insert a photo');</script>";
    }else{
        $image = $_POST['s_image'];
    }
    $addedby = $_POST['addedby'];
    
    $sql = 'INSERT into slider (image, addedby) values (:image, :addedby)';
    
    $query = $pdo->prepare($sql);
    $query->bindParam('image', $image);
    $query->bindParam('addedby', $addedby);
    
    $query->execute();
    header("Location: admin.php");
}
?>

<div class="adm-from">
    <h2>Add new movies into slider</h2>
    <form action="admin.php" method="POST">
        Image:
        <input type="text" name="s_image" required><br>
        <input type="hidden" name="addedby" value="<?php echo $_SESSION['name']; ?>"><br>
        <button type="submit" name="s_submit" >Add</button>
    </form>
</div>

<!------------------------------------------------------------------------------------------------------>

<?php
if(isset($_POST['o_submit'])){
    if(empty($_POST['o_image'])){
        echo "<script>alert('You must insert a photo');</script>";
    }else if(empty($_POST['o_name'])){
        echo "<script>alert('You must insert a name');</script>";
    }else{
        $image = $_POST['o_image'];
        $name = $_POST['o_name']; 
    }
    $addedby = $_POST['addedby'];
    
    $sql = 'INSERT into team (image, name, addedby) values (:image, :name, :addedby)';
    
    $query = $pdo->prepare($sql);
    $query->bindParam('image', $image);
    $query->bindParam('name', $name);
    $query->bindParam('addedby', $addedby);
    
    $query->execute();
    header("Location: admin.php");
}
?>

<div class="adm-from">
    <h2>Add new memebers</h2>
    <form action="admin.php" method="POST">
        Image:
        <input type="text" name="o_image" required><br>
        Name:
        <input type="text" name="o_name" required><br>
        <input type="hidden" name="addedby" value="<?php echo $_SESSION['name']; ?>"><br>
        <button type="submit" name="o_submit">Add</button>
    </form>
</div>

<!------------------------------------------------------------------------------------------------------->

<?php 
    $query = $pdo->query('SELECT * from users');
    $users = $query->fetchALL();
?>

<table class="tab" border="3" align="center">
    
    <thead>
        <h2>Users</h2>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user): ?>
        <tr>
            <td><?php echo $user['id'] ?></td>
            <td><?php echo $user['name'] ?></td>
            <td><?php echo $user['email'] ?></td>
            <td><?php echo $user['password'] ?></td>
            <td><?php echo $user['role'] ?></td>
            <td><a href="edit.php?id=<?php echo $user['id']; ?>" style="color: orange;">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $user['id']; ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<!------------------------------------------------------------------------------------------------------->

<?php 
    $query = $pdo->query('SELECT * from contactus');
    $users = $query->fetchALL();
?>

<table class="tab2"  border="3" align="center">
    <h2>Contact</h2>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Comment</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user): ?>
        <tr>
            <td><?php echo $user['id'] ?></td>
            <td><?php echo $user['name'] ?></td>
            <td><?php echo $user['email'] ?></td>
            <td><?php echo $user['comment'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php } else{ header("Location: index.php");}