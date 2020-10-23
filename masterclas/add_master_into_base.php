<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
	
	// Если существует запрос с [".."], и они не равны пустоте, то
	if (
		isset($_POST["title"]) && isset($_POST["mc_date"]) && isset($_POST["price"]) && isset($_POST["descr"]) && isset($_POST["photo"])
		&& $_POST["title"] != "" && $_POST["mc_date"] != "" && $_POST["price"] != "" && $_POST["descr"] != "" ) {
			$imgway = '..//img/';
		    $sql="INSERT INTO masterclass (title, mc_date, price, descr, photo) VALUES ('" . $_POST['title'] . "',
		     '" . $_POST['mc_date'] . "', '" . $_POST['price'] . "',
		     '" . $_POST['descr'] . "', '" . $imgway . $_POST['photo'] . "')";
		    if(mysqli_query($connect, $sql)){
		        echo "<h3>Master class successfully added!</h3>";
		        header('Location: http://projectchief.local/masterclas/masterclasses.php');
		    } else {
		        echo "<h2>Произошла ошибка</h2>";
		    }
	} else {
	    echo "<h2>Произошла ошибка</h2>";
	}
?>
