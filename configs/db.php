<?php
// данные для подключения к базе данных
$server = "localhost";
$username = "root";
$password = "";
$dbname = "projectchef";

// подключение к базе данных
$connect = mysqli_connect($server, $username, $password, $dbname);
// установим кодировку для корректного отображения кириллицы
mysqli_set_charset($connect, 'utf8');

// $sql = "SELECT * FROM users";// Прописал запрос SQL из phpAdmin для получения списка всех пользователей.

$user_cookie = null;

if (isset($_COOKIE["users_id"])) {
	$user_cookie = $_COOKIE["users_id"];
}
?>

