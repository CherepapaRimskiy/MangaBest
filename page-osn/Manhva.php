<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/anim.css"> 
    <link rel="stylesheet" href="../css/style.css">
    
    <link rel="icon" href="img/Group 2 (3).png">
</head>
<body>
    <div class="header">
        <div class="zag">
            <a href="../index.php" class="none-dec">Manga<span class="green">Best</span></a>
        </div>
        <div class="drop-menu font-size"><a class="text">Меню</a>
            <div class="dropmenu-content">
                <div><a href="../page-osn/Manga.php">Манга</a></div>
                <div><a href="../page-osn/Manhva.php">Манхва</a></div>
                <div><a a href="../page-osn/Manhua.php">Маньхуа</a></div>
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
            <div class="Zag-Main">Манхва</div>
        </div>

        <div class="main2">
          <a href="../page-mang/Solo/Solo Leveling.php" class="none-dec">  <figure><img src="../img/1.jpg" width="375px" height="500px" class="img-hov"><figcaption>Поднятие уровня<br>в одиночку</figcaption></figure></a>
            
          <a href="../page-mang/Sweet home.php" class="none-dec">  <figure><img src="../img/7.jpg" width="375px" height="500px" class="img-hov"><figcaption>Милый дом</figcaption></figure></a>
        
        </div>
        
        <div class="particle"></div>


      </div>
    <div class="footer">
        &copy;MoriHimitsu 
    </div>

</body>
</html>