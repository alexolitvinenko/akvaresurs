<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $last_name = $_POST['last_name']; 
    $adress = $_POST['adress'];
    $phone_number = $_POST['phone_number']; 
    $quantity = $_POST['quantity']; 

    mail("alexolitvinenko@yandex.ru", "Заявка", "Поступила заявка:\nПочта: $email\nИмя: $name\nФамилия: $last_name\nАдрес: $adress\nНомер телефона: $phone_number\nКоличество счетчиков: $quantity");
}
?>