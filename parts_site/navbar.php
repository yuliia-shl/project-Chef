
<div id="navbar">
	<div id="logo">
		<a href="/"><b> F R O R I N C Ó N | Chef </b></a>

	</div>

	<div class="menu">
		<a href="http://projectchief.local/about.php">About Froylan</a>
		<a href="http://projectchief.local/index.php#feedback_container">Reviews</a>
		<a href="http://projectchief.local/masterclas/masterclasses.php">Masterclasses</a>
		
			<?php
		include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
					
		// Проверка на COOKIE если они есть тогда показать Выход
		if (isset($_COOKIE["users_id"])) {
			$sql = "SELECT * FROM users WHERE id_user= " . $_COOKIE["users_id"];
			
			$result = mysqli_query($connect, $sql);

			$user = mysqli_fetch_assoc($result);

			?>
			<a href="http://projectchief.local/exit.php"><?php echo $user["name"]?> &#8658; </a>

			<?php
		} else {
			?>
			<a href="http://projectchief.local/login.php">Autorization</a>
			<?php
		}
			?>
	</div>
</div>

