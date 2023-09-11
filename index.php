<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>AlbMov</title>
    </head>
    <body>
        <?php include 'includes/header.php';?>
        
        <?php 
                require 'includes/dbconnect.php';
                $query = $pdo->query('SELECT * from movies');
                $movies = $query->fetchAll();
            ?>
        <div id="movies" class="movies">
            <h1>New movies</h1>
            <div class="movie-line"></div><br>
            <ul class="new-movies">
                <?php foreach($movies as $movie): ?>
                <li>
                    <img src="img/<?php echo $movie['image']; ?>" alt="#">
                    <p><?php echo $movie['name']; ?></p>
                </li>
                <?php endforeach; ?>
            </ul> 
        </div>
                
<!------------------------------------------------------------------------------------------------------>           
        <div class="line-divider"></div>
        
        <?php 
            require 'includes/dbconnect.php';
            $query = $pdo->query('SELECT * from news');
            $news = $query->fetchAll();
        ?>
        <div id="news" class="news-container">
            <h1>Movie news</h1>
            <div class="news-line"></div><br>
            <ul class="news-cont">
                <?php foreach($news as $newss): ?>
                <li>
                    <img src="img/<?php echo $newss['image']; ?>" alt="#">
                    <h4><?php echo $newss['title']; ?></h4>
                    <p><?php echo $newss['content']; ?></p>
                </li>
                <?php endforeach; ?>
            </ul> 
        </div>
        
<!------------------------------------------------------------------------------------------------------>
        <div class="line-divider"></div> 

         <?php include 'contactUs.php';?>
<!------------------------------------------------------------------------------------------------------>

	<div class="line-divider"></div>

    <div class="slider">
        <h1>Upcoming movies</h1>
        <div class="slider-line"></div><br>
        <div class="slider-item slider-item-visible">
            <img src="img/noTime.jpg">
        </div>
        <div class="slider-item">
            <img src="img/rumble.jpg">
        </div>
        <div class="slider-item">
            <img src="img/spaceJam.jpg">
        </div>
        <div class="slider-actions">
                <button id="slider-btn-prev" aria-label="prev slide"><</button>
                <button id="slider-btn-next" aria-label="next slide">></button>
        </div>
    </div>            

<!------------------------------------------------------------------------------------------------------>
        <div class="line-divider"></div>
        
        <?php 
            require 'includes/dbconnect.php';
            $query = $pdo->query('SELECT * from team');
            $team = $query->fetchAll();
        ?>
        <div id="team" class="our-team">
            <h1>Our team</h1>
            <div class="ot-line"></div><br>
            <div class="ot-content">
                <?php foreach($team as $teams): ?>
                <div class="member">
                    <img src="img/<?php echo $teams['image']; ?>">
                    <h4><?php echo $teams['name']; ?></h4>
                </div>
                <?php endforeach; ?>
            </div> 
        </div>
        
        
<!------------------------------------------------------------------------------------------------------> 
        
        <div class="line-divider"></div>
        
         <?php include 'includes/footer.php';?>
        
        <script src="js/main.js"></script>
	<script src="js/slider.js"></script>
    </body>
</html>






