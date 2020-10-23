<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="image/png" sizes="192x192" href="img/icon.png"> 
<!--===============================================================================================-->
</head>
<?php
	/* Процедура регистрации пользователя */
	include "configs/db.php";

	// Проверка полей в строке браузера
	if (
		isset($_POST["password"]) && isset($_POST["email"]) &&
		isset($_POST["password"]) != "" && isset($_POST["email"]) != "" 
		) {
		// Запрос в базу данных , для добавления пользователя
		$sql = "SELECT * FROM `users` WHERE `email` LIKE '". $_POST["email"] ."' AND `password` LIKE '". $_POST["password"] ."'";
		$result = mysqli_query($connect, $sql);
		// Выбираем строку с нашего запроса
		$number_users = mysqli_num_rows($result);
		// Проверка если строка равна 1 , тогда выполняем код
		if($number_users == 1) {
			// Записываем в переменую в виде масива наш запрос
			$user = mysqli_fetch_assoc($result);
			// Создаём куки для хранения данных пользователя
			setcookie("users_id", $user["id_user"], time() + 3000);
			// Перенаправляем на главную страницу
			header("Location: /");
		} else {
			echo "<h2>Login or password incorrect</h2>";
		}
	}
?>

<body>
		<?php
			/* подключить файл Панель навигации navbar */
			include 'parts_site/navbar.php';
		?>
	
	<div class="limiter">
		<div class="container-login">
			<div class="login-more" style="background-image: url('img/login.jpg');"></div>

			<div class="wrap-login">
				<form class="login-form" action="login.php" method="POST" id="form-login">
					<span class="login-form-title">
						Sign In
                    </span>
                    
					<div class="wrap-input">
						<span class="label-input">Email</span>
						<input class="input" type="text" name="email" placeholder="Email address...">
						<span class="focus-input"></span>
					</div>

					<div class="wrap-input">
						<span class="label-input">Password</span>
						<input class="input" type="password" name="password" placeholder="*************">
						<span class="focus-input"></span>
					</div>

					<div class="container-login-form-btn">
						<div class="wrap-login-form-btn">
							<div class="login-form-bgbtn"></div>
							<button class="login-form-btn" type="submit" id="login-button">
								LOG IN
							</button>
						</div>

						<a href="registration.php" class="dis-block">
							Registration
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
		<?php
			/* подключить файл Панель навигации navbar */
			include 'parts_site/footer.php';
		?>
</body>
</html>