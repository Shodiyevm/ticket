<?php
session_start();

// Sessiyani tugatish va foydalanuvchini log out qilish
session_destroy();

// Foydalanuvchini bosh sahifaga yo'naltirish
header('Location: index.php');
exit;
?>
