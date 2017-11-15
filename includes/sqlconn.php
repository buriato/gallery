<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "root";
$dbName = "gallery";
$conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
if (!$conn) {
  echo "Ошибка: Невозможно установить соединение с MySQL<br>";
  echo "<br>Код ошибки errno: " . mysqli_connect_errno();
  echo "<br>Текст ошибки error: " . mysqli_connect_error();
  exit;
}