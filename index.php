<?php
include "configs/db.php";

// include "add_review.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Froylan Rincón</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="image/png" sizes="192x192" href="img/icon.png"> 
</head>

<body>

	<div id="main">
		<?php
		/* подключить файл Панель навигации navbar */
		include 'parts_site/navbar.php';
		?>

		<div id="content">
			<div id="about_site">
				<h2>Video Call Culinary Courses and Live Master classes</h2>
				<p> Cook, travel and learn differently</p>

				<!-- Добавляем ссылку на презентацию в Ютубе -->
				<div class="video">
					<iframe width="949" height="534" src="https://www.youtube.com/embed/J02l_y_1Wt0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<!-- Описание сайта -->
				<div id="description">

					<div class="des_block">
						<div class="photo_left">
							<img src="img/chef3.jpg">
						</div>
						<div class="text_right">
							<h2>Discover</h2>
							<p> You can learn how to cook authentic dishes from all over the world with the help of our Professional Chef and passionate Home Cooks via a video call that is streamed live directly to you.</p>
						</div>
					</div>

					<div class="des_block">
						<div class="photo_right"><img src="img/chef5.png"></div>
						<div class="text_left">
							<h2>Real Food</h2>
							<p>After booking, Froylan Chef's personal assistant will follow up with you and make sure that we tailor your experience to your needs, including dietary and food taste preferences.</p>
						</div>
					</div>

					<div class="des_block">
						<div class="photo_left"><img src="img/chef4.png"></div>
						<div class="text_right">
							<h2>Real Chef</h2>
							<p>On the agreed day, your cooking instructor will video call you, give you cooking tips and answer any questions you may have about the dish, the history or culture behind their cuisine.</p>
						</div>
					</div>
					<div class="des_block">
						<div class="photo_right"><img src="img/chef6.png"></div>
						<div class="text_left">
							<h2>Real Time</h2>
							<p>You only need a portable device with a camera, audio and broadband internet connection. There is no need for you to leave the comfort of your own kitchen when you book with us.</p>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div id="feedback_container" name="feedback_container">
			<div class="article-search">
				<h2>What our students have to say</h2>
				<!-------------- Форма поиска отзывов --------------------------->
				<form action="feedback.php" method="POST" id="search_feedback">
					<input type="text" name="search-feedback">
					<button type="submit" class="form_button"> Search</button>
				</form>
			</div>
			<div id="feedback_blocks">
				<!---------- Подключаем функционал формирования отзывов----------->
				<?php
				include "feedback.php"
				?>
			</div>

		</div>


		<?php
		if (isset($user_cookie)) {
		?>

			<form id="review_form" action="http://projectchief.local/add_review.php" method="POST">
				<input type="hidden" name="user_id" value=<?php echo $user_cookie; ?>>
				<textarea name="review" placeholder="Write your review here..." cols="30" rows="7"></textarea>
				<button type="submit" id="send_review" class="form_button">SEND</button>
			</form>
		<?php
		}
		?>

		<!--  Модальное окно  -->
		<div id="review-modal">
			<div class="close">X</div>
			<div id="alert">Review successfully sent!</div>
			<button class="enter-btn">OK</button>
		</div>

	</div>

	<?php
	/* подключить файл Футер*/
	include 'parts_site/footer.php';
	?>

	<script src="script/script_feedback.js"></script>

</body>

</html>