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
    
    <link rel="icon" href="../../img/Group 2 (3).png">
</head>
<body>
   <div class="spin-wrapper">
  <div class="spinner">
  </div>
</div>
    <div class="header">
        <div class="zag">
            <a href="../../index.php" class="none-dec">  Manga<span class="green">Best</span></a>
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
        <div class="Osn">
            <div class="Zag-Main">Человек-Бензопила</div>
        </div>

        <div class="main2-2">
            <div>
            <figure><img src="../../img/3 (1).jpg" width="375px" height="500px" class="img-hov"><figcaption><div class="drop-menu2"><a class="text">Статус</a>
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
                            <td>108</td>
                        </tr>
                        <tr>
                            <td>Формат выпуска</td>
                            <td> - </td>
                        </tr>
                        <tr>
                            <td>Автор</td>
                            <td>Tatsuki Fujimoto</td>
                        </tr>
                        <tr>
                            <td>Художник</td>
                            <td>Tatsuki Fujimoto</td>
                        </tr>
                        <tr>
                            <td>Издатель</td>
                            <td>Shueisha</td>
                        </tr>
                    </table>
                    <br>
                    <a href="Chainsaw Man(read).php" class="Zag-Main green-hov none-dec">Читать</a>
                    </div>
                    <div>
                        <div class="Zag-Main" style="padding-top: 2%;">
                            Описание
                            </div>
                            Я всегда мечтал жить обычной жизнью: спать в тёплой постели, есть тосты с джемом по утрам, ходить на свидания со своей девушкой и улыбаться каждый день.<br>
                             Но всё изменилось со смертью отца — теперь, Потита, пора убивать!» — с такими словами Дэндзи вместе со своим псом-бензопилой Потитой отправляется на очередной контракт,<br>
                              ведь они — охотники на демонов. Каждый день они убивают ради денег, которые Дэндзи должен отдать одному якудза, иначе долг покойного отца придётся отдать собственной жизнью.
                               Но что ждёт Дэндзи, когда он вернёт весь долг: заживёт обычной жизнью или продолжит спасать мир от демонов? А может, у судьбы свои планы на участь героя?

                    </div>
                </div>
           </div>
           
        </div>
        
        <div class="particle"></div>


      </div>
    <div class="footer">
        &copy;MoriHimitsu 
    </div>
<script href=""></script>
</body>
</html>