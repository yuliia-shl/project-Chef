<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration</title>
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
		isset($_POST["name"]) && isset($_POST["password"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST ["us_photo"])
		&& $_POST["name"] != "" && $_POST["password"] != "" && $_POST["email"] != "" && $_POST["phone"] != ""
		) {
			$imgway = 'img/';
			// Запрос в базу данных , для добавления пользователя
			$sql = "INSERT INTO users (name, email, password, phone, us_photo) VALUES ('" . $_POST["name"] . "', '" . $_POST["email"] . "' , '" . $_POST["password"] . "','" . $_POST["phone"] . "', '" . $imgway . $_POST ["us_photo"] . "')";

			if(mysqli_query($connect,$sql)) {
				echo "<h2>Registration completed</h2>";
				// Перенаправляет на другую страницу в нашем случае на регистрацию
	            header("Location: /login.php");
			} else {
				echo "<h2>Ошибка</h2>" . mysqli_error($connect);
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
			<div class="login-more" style="background-image: url('img/reg.jpg');"></div>

			<div class="wrap-login">
				<form action="registration.php" method="POST" class="login-form">
					<span class="login-form-title">
						Registration
					</span>

					<div class="wrap-input">
						<span class="label-input">Full Name</span>
						<input class="input" type="text" name="name" placeholder="Name..." maxlength="25">
						<span class="focus-input"></span>
					</div>

					<div class="wrap-input">
						<span class="label-input">Email</span>
						<input class="input" type="text" name="email" placeholder="Email address...">
						<span class="focus-input"></span>
					</div>

					<div class="wrap-input">
						<span class="label-input">Phone</span>
						<input class="input" type="text" name="phone" placeholder="Phone...">
						<span class="focus-input"></span>
					</div>

					<div class="wrap-input" >
						<span class="label-input">Password</span>
						<input class="input" type="text" name="password" placeholder="*************" maxlength="25">
						<span class="focus-input"></span>
					</div>

					<div class="wrap-input" >
						<span class="label-input">Choose your photo</span>
						<input class="input" type="file" name="us_photo">
						<span class="focus-input"></span>
					</div>

					<div class="container-login-form-btn">
						<div class="wrap-login-form-btn">
							<div class="login-form-bgbtn"></div>
							<button type="submit" class="login-form-btn">
								Registration
							</button>
						</div>

						<a href="login.php" class="dis-block">LOG IN</a>
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