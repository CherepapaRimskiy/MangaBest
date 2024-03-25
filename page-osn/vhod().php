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
            <a href="../index.html" class="none-dec">Manga<span class="green">Best</span></a>
        </div>
        <div class="drop-menu font-size"><a class="text">Меню</a>
            <div class="dropmenu-content">
                <div><a href="../page-osn/Manga.html">Манга</a></div>
                <div><a href="../page-osn/Manhva.html">Манхва</a></div>
                <div><a a href="../page-osn/Manhua.html">Маньхуа</a></div>
                <div><a href="../page-osn/Vhod.html">Вход</a></div>
                </div>
        </div>
    </div>

    <div class="space">
        <div class="main">
            <div class="Zag-Main">Вход</div>
        </div>

    <div align="center" class="otstup">
        <form id="signin" action="auth.php" method="post">
            <input type="text" name="login"  placeholder="login" /> <br>
            <input type="password" name="password" placeholder="password" /><br>
            <div class="submit-container" >
            <input type="submit" value="Войти" id="log">
            </div>
            
        </form>
        <button onclick="window.document.location='reg.php'">Регистрация</button>
        
    </div>

        <div class="particle"></div>


      </div>
    <div class="footer">
        &copy;MoriHimitsu 
    </div>

</body>
</html>