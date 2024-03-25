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
    
    <link rel="icon" href="../img/Group 2 (3).png">
</head>
<body>
   <div class="spin-wrapper">
  <div class="spinner">
  </div>
</div>
    <div class="header">
        <div class="zag">
            <a href="../index.php" class="none-dec">  Manga<span class="green">Best</span></a>
        </div>
        <div class="drop-menu font-size"><a class="text">Меню</a>
            <div class="dropmenu-content">
                <div><a href="../page-osn/Manga.php">Манга</a></div>
                <div><a href="../page-osn/Manhva.php">Манхва</a></div>
                <div><a href="../page-osn/Manhua.php">Маньхуа</a></div>
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
        <div class="Osn">
            <div class="Zag-Main">Милый дом</div>
        </div>

        <div class="main2-2">
            <div>
            <figure><img src="../img/7.jpg" width="375px" height="500px" class="img-hov"><figcaption><div class="drop-menu2"><a class="text">Статус</a>
                <div class="dropmenu-content2">
                    <div><a>Прочитано</a></div>
                    <div><a>Читаю</a></div>
                    <div><a>Заброшенно</a></div>
                    </div>
            </div>
                </div></figcaption></figure>
                <div >
                    <br><br>
                    <div class="main2-3">
                        <div>
                    <table>
                        <tr>
                            <td>Статус тайтла</td>
                            <td>завершён</td>
                        </tr>
                        <tr>
                            <td>Статус перевода</td>
                            <td> завершён</td>
                        </tr>
                        <tr>
                            <td>Загружено глав</td>
                            <td>141</td>
                        </tr>
                        <tr>
                            <td>Формат выпуска</td>
                            <td>В цвете , Веб</td>
                        </tr>
                        <tr>
                            <td>Автор</td>
                            <td>Carnby</td>
                        </tr>
                        <tr>
                            <td>Художник</td>
                            <td>Hwang Youngchan</td>
                        </tr>
                        <tr>
                            <td>Издатель</td>
                            <td>Naver , Webtoon</td>
                        </tr>
                    </table>
                    <br>
                    <a href="#" class="Zag-Main green-hov none-dec">Читать</a>
                    </div>
                    <div>
                        <div class="Zag-Main" style="padding-top: 2%;">
                            Описание
                            </div>
                            В один день родители решают устроить семейную поездку, но им приходится оставить сына в покое и взять с собой лишь дочь.<br>
                            В пути они случайно выезжают на встречную полосу и разбиваются… Но Хён, кажется, особо не переживает по этому поводу. <br>
                            Его интересует лишь то, как дальше жить на гроши, оставленные родителями. Обстоятельства вынуждают юношу съехать в общежитие и экономить буквально на всём,<br>
                             а голову посещает мысль о самоубийстве. Скоро выходит новая часть его любимого фильма, и он решает назначить день Х сразу после её просмотра. <br>
                             Вот только ему было не суждено спокойно умереть… Но так ли это вообще необходимо?

                    </div>
                </div>
           </div>
           
        </div>
        
        <div class="particle"></div>


      </div>
    <div class="footer">
        &copy;MoriHimitsu 
    </div>
<script href="js/JavaScript.js"></script>
</body>
</html>