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
            <div class="Zag-Main">JoJo's Bizarre Adventure<BR>
                Steel Ball Run</div>
        </div>

        <div class="main2-2">
            <div>
            <figure><img src="../img/6.jpg" width="375px" height="500px" class="img-hov"><figcaption><div class="drop-menu2"><a class="text">Статус</a>
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
                            <td>98</td>
                        </tr>
                        <tr>
                            <td>Формат выпуска</td>
                            <td>В цвете</td>
                        </tr>
                        <tr>
                            <td>Автор</td>
                            <td>ARAKI  Hirohiko</td>
                        </tr>
                        <tr>
                            <td>Художник</td>
                            <td>ARAKI  Hirohiko</td>
                        </tr>
                        <tr>
                            <td>Издатель</td>
                            <td>Bilibili Comics</td>
                        </tr>
                    </table>
                    <br>
                    <a href="#" class="Zag-Main green-hov none-dec">Читать</a>
                    </div>
                    <div>
                        <div class="Zag-Main" style="padding-top: 2%;">
                            Описание
                            </div>
                            1890-й год. Предприниматель Стивен Стил устраивает величайшую по своему размаху гонку на лошадях через всю Америку. На кону $50.000.000. <BR>Наездники со всего света собираются, чтобы побороться за приз. Это по-настоящему уникальная гонка, и название ей – Стил-Болл-Ран.
<BR><BR>
                            В то же время юноша по имени Джонни Джостар, инвалид-колясочник и бывший наездник, поспевает посмотреть на начало гонки.<br>
                             Там он становится свидетелем потасовки между карамнником и иностранцем Джайро Цеппели, использующим в качестве оружия причудливые вращающиеся стальные шары. <br>
                             Главный герой, обескураженный увиденным, случайно касается их и впервые за несколько лет инвалидности, пускай всего и на секунду, но начинает чувствовать ноги.<br>
                            Желая узнать секрет стальных шаров, Джонни Джостар знакомится с Джайро и становится участником гонки, даже не представляя, какое приключение его ожидает.

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