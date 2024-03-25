<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/anim.css"> 
    <link rel="stylesheet" href="../../css/style.css">
    
    <link rel="icon" href="../img/Group 2 (3).png">
</head>
<body>
   <div class="spin-wrapper">
  <div class="spinner">
  </div>
</div>
    <div class="header">
        <div class="zag">
            <a href=".../../../../index.php" class="none-dec">  Manga<span class="green">Best</span></a>
        </div>
        <div class="drop-menu font-size"><a class="text">Меню</a>
            <div class="dropmenu-content">
                <div><a href="../../page-osn/Manga.php">Манга</a></div>
                <div><a href="../../page-osn/Manhva.php">Манхва</a></div>
                <div><a href="../../page-osn/Manhua.php">Маньхуа</a></div>
                <?php
                if (empty($_SESSION['login'])) {
                    echo '<div><a href="../../page-osn/vhod().php">Вход</a></div>';
                }
            ?>
                <?php
        if (!empty($_SESSION["login"])) {
                echo '<div><a href="../../page-osn/logout.php" class="user-panel-link">Выйти</a></div>
            </div>';
        }
    ?>
                </div>
        </div>
    </div>

    <div class="space">
        
    <div class="button" align="center">
        <div id="nach"></div>
        <img src="000-001.png" id="manga-page-read">
        <div>
    <button onclick="nazad()" style="display: none;">Назад</button><button onclick="vpered()">Вперёд</button> 
        </div>
    </div>       
        <div class="particle"></div>
        

      </div>
    <div class="footer">
        &copy;MoriHimitsu 
    </div>
    <script>
        let page=document.querySelector('#manga-page-read');
        let count_page = 1;
        let count_chapter = 0;
        let page_number = "001";
        let chapter_number = "000";
        
        function vpered() {
            ++count_page;
            
            if (count_page < 10) {
                page_number = "00" + count_page;
            }
            else {
                page_number = "0" + count_page;
            }
        
            if (count_page > 14) {
                count_page = 1;
                page_number = "001";
                ++count_chapter;
                chapter_number = "00" + count_chapter;
            }
            
            if (count_chapter > 1) {
                window.document.location = "Solo Leveling.php";
            }
        
            page.src = `${chapter_number}-${page_number}.png`;
            window.document.location = "#nach";
            
            
        }
        function nazad() {
        
        }
    </script>  
</body>
</html>