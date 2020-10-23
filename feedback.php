<?php
// Делаем подключение к базе данных
include "configs/db.php";
   /* ------------------------------- Функционал вывода отзывов  и поиска отзывов-----------------*/
	if (isset($_POST["search-feedback"])) {
		//создаем запрос на поиск имен из БД где есть частичное совпадение в таблице `feedback` в полях description и 
		$sql = "SELECT * FROM feedback WHERE description LIKE '%" . $_POST["search-feedback"] . "%'";
		//результат запроса пишем в переменную
		$result = mysqli_query($connect, $sql);
		//считаем количество строк (совпадений) для запуска цикла
		$num_review = mysqli_num_rows($result);
		$i = 0;
		if ($num_review == 0) {
	?>
			<div class="not-found">
				<h2>Not found</h2>
			</div>
		<?php
		}
		while ($i < $num_review) {
			//получаем результирующий ряд в виде ассоциативного массива
			$feedback = mysqli_fetch_assoc($result);
			//выводим список 
		?>
			<div class="review">
				<?php
				// Вывести имя конкретного пользователя
				$sql = "SELECT * FROM users WHERE id_user=" . $feedback["user_id"];
				// выполняем запрос
				$user = mysqli_query($connect, $sql);
				// записываем в переменную масив с данными пользователя
				$user = mysqli_fetch_assoc($user);
				?>
				<div>
					<div class="img"><img src=<?php echo $user["us_photo"]; ?>></div>
					<div class="name"><?php echo $user["name"]; ?></div>
					<div class="date"><?php echo $feedback["feedback_date"]; ?></div>
				</div>
				<div class="text">
					<p> <?php echo $feedback["description"]; ?></p>
				</div>
			</div>

		<?php $i = $i + 1;
		}
	} else {
		$sql = "SELECT * FROM `feedback` ORDER BY feedback_date DESC /*ORDER BY rand() LIMIT 3*/";
	// выполнить sql запрос в БД
	$result = mysqli_query($connect, $sql);
	// mysqli_num_rows получить кол-во результатов (сток)
	$num_review = mysqli_num_rows($result);

	$i = 0;
	while ($i < $num_review) {
		// mysqli_fetch_assoc - преобразовать полученные данные в масив
		$feedback = mysqli_fetch_assoc($result);
		?>
		<!-- <div id="feedback_blocks"> -->
		<div class="review">
			<?php
			// Вывести имя конкретного пользователя
			$sql = "SELECT * FROM users WHERE id_user=" . $feedback["user_id"];
			// выполняем запрос
			$user = mysqli_query($connect, $sql);
			// записываем в переменную масив с данными пользователя
			$user = mysqli_fetch_assoc($user);
			?>
			<div>
				<div class="img"><img src=<?php echo $user["us_photo"]; ?>></div>
				<div class="name"><?php echo $user["name"]; ?></div>
				<div class="date"><?php echo $feedback["feedback_date"]; ?></div>
			</div>
			<div class="text">
				<p> <?php echo $feedback["description"]; ?></p>
			</div>
		</div>
		<!-- </div>	 -->
	<?php
		$i = $i + 1;
	}
}
	?>