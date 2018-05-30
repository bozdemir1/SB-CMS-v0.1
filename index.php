<?php
ob_start();
session_start();
if(isset($_SESSION['kullanici_ad'])){
    
    Header("Location:production");
} else {
    
    Header("Location:production/login.php");
}

// kullanıcı giriş yaptığı anda ip adresini alın ve kullanıcının tablosunda bulunan ip kısmına yazın

?>