<?php
$dbconnect = mysqli_connect("127.0.0.1:3306", "root", "root", "doingsdone");
if ($dbconnect == false){
    print('Ошибка подключения: ' . mysqli_connect_error());
}
