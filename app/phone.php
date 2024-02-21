<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name']; 
    $phone_number = $_POST['phone_number']; 

    mail("alexolitvinenko@yandex.ru", "Заявка на звонок", "Поступила заявка на звонок:\nИмя: $name\nНомер телефона: $phone_number");
}
?>