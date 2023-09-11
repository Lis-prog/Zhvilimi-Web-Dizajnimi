
<!DOCTYPE html>
<html>
    <head>
        <title>Header</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <nav>
            <div class="logo">
                <img src="img/logo.png" alt="logo">
            </div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#movies">Movies</a></li>
                <li><a href="#news">News</a></li>
                
                <li><a href="#contact">Contact Us</a></li>
                <?php if(isset($_SESSION['name'])): ?>
                    <li><a href="admin.php">Admin</a></li>
                    <li><a href="logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="login.php">Log In</a></li>
                <?php endif; ?>
            </ul>
            <div class="mob-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
        
        <script src="main.js"></script>
    </body>
</html>

