<?php 
 
session_start(); 
 

 
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING); 
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING); 
$pass = md5($password); 
$mysql = new mysqli('localhost','root','','manga best'); 
 

 
$stmt = $mysql->prepare("SELECT * FROM manga WHERE login=?"); 
$stmt->bind_param("s", $login); 
$stmt->execute(); 
 
$result = $stmt->get_result(); 
$user = $result->fetch_assoc(); 
 
if(!$user) { 
    echo "Пользователь не найден"; 
    exit(); 
} 
 
if (!($pass == $user['password'])) { 
    echo 'Неверный пароль'; 
     
    exit(); 
} 
 
if ($pass == $user['password']) { 
    $authed = true; 
    $_SESSION["login"] = $login; 
    header('Location: /'); 
    exit(); 
} 
 
$stmt->close(); 
$mysql->close(); 
?>