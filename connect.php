<?php

$conn = mysqli_connect('localhost', 'root', '', 'cut-php-course');

if (!$conn) die("Ошибка подключения к БД: \n" . mysqli_connect_error());