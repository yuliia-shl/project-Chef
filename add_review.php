<?php
include 'configs/db.php';

/*======================================
Отправка сообщения выбраному пользователю
======================================*/
if(
	isset($_POST["review"]) && isset($_POST["user_id"]) 
	&& $_POST["review"] != "" && $_POST["user_id"] != "" ) {
	// Вставить в таблицу "название таблицы" ()
	$sql = "INSERT INTO feedback (user_id, feedback_date, description) VALUES ('" . $_POST["user_id"] . "', CURRENT_DATE(), '" . $_POST["review"] . "' )";

	mysqli_query($connect, $sql);

	
}

$user_cookie = $_POST["user_id"];
include 'feedback.php';

?>

