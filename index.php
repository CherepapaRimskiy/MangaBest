<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/anim.css"> 
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="icon" href="img/Group 2 (3).png">
</head>
<body>
   
    <div class="header">
        <div class="zag">
            <a href="index.php" class="none-dec">  Manga<span class="green">Best</span></a>
           
        </div>


        <?php
      
            if(isset($_SESSION["login"])){
                echo '<div class="user"><p class="hello-user">Здравствуй, '.$_SESSION["login"].'!</div>';
            }
            ?>


        <div class="drop-menu font-size"><a class="text">Меню</a>
            <div class="dropmenu-content">
                <div><a href="page-osn/Manga.php">Манга</a></div>
                <div><a href="page-osn/Manhva.php">Манхва</a></div>
                <div><a href="page-osn/Manhua.php">Маньхуа</a></div>
                <?php
                if (empty($_SESSION['login'])) {
                    echo '<div><a href="page-osn/vhod().php">Вход</a></div>';
                }
            ?>
                <?php
        if (!empty($_SESSION["login"])) {
                echo '<div><a href="page-osn/logout.php" class="user-panel-link">Выйти</a></div>
            </div>';
        }
    ?>
                </div>
        </div>
    </div>

    <div class="space">
        <div class="main">
            <div class="Zag-Main">Популярные манги</div>
        </div>

        <div class="main2">
            <a href="page-mang/Solo/Solo Leveling.php" class="none-dec prob"><figure><img src="img/1.jpg" width="375px" height="500px" class="img-hov"><figcaption>Поднятие уровня<br>в одиночку</figcaption></figure></a>
            <a href="page-mang/chain/Chainsaw Man.php" class="none-dec prob"><figure><img src="img/3 (1).jpg" width="375px" height="500px" class="img-hov"><figcaption>Человек-Бензопила</figcaption></figure></a>
            <a href="page-mang/Fires Unluck.php" class="none-dec prob"><figure><img src="img/4.jpg" width="375px" height="500px" class="img-hov"><figcaption>Пламя Бесчисленных Невзгод</figcaption></figure>      </a>     
        
           <a href="page-mang/Sweet home.php" class="none-dec prob"> <figure><img src="img/7.jpg" width="375px" height="500px" class="img-hov"><figcaption>Милый дом</figcaption></figure></a>
            <a href="page-mang/JJBA.php" class="none-dec prob"><figure><img src="img/6.jpg" width="375px" height="500px" class="img-hov"><figcaption>JoJo's Bizarre Adventure<br>Steel Ball Run</figcaption></figure></a>
           <a href="page-mang/Legend Mech.php"class="none-dec prob"> <figure><img src="img/5.jpg" width="375px" height="500px" class="img-hov"><figcaption>Легендарный  Механик</figcaption></figure></a>
        </div>
        
        <div class="particle"></div>


      </div>
    <div class="footer">
        &copy;MoriHimitsu 
    </div>
<script href="js/JavaScript.js"></script>
</body>
</html>