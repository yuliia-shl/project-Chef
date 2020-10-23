
<!DOCTYPE html>
<html>
<head>
	<title>About Froylan Rincón</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="image/png" sizes="192x192" href="img/icon.png"> 
</head>

<body>

	<div>
		<?php
		include 'parts_site/navbar.php';
		?>
		<div class="chef_photo">
			  <img src='img/chef.jpg' id="image_1" style="position: absolute;" / >
			  <img src='img/chef2.jpg' id="image_2" style="opacity: 0; filter: alpha(opacity=0); position: absolute;" />
			  <img src='img/chef7.jpg' id="image_3" style="opacity: 0; filter: alpha(opacity=0); position: absolute;" />
			  <img src='img/chef8.jpg' id="image_4" style="opacity: 0; filter: alpha(opacity=0); position: absolute;" />
			</div>
			
		<div id="about_main">

			<!-- <img id="chef_photo" src="img/chef.jpg"> -->
			

			<div class="about_chef">
				<h2>COOKING AROUND THE WORLD FOR PASSSION AND LOVE</h2>
				
				<p>Chef Froylan Rincón moved from small village to the capital city of his State. He studied Culinary Arts in one of the best Culinary University (ranking 10 in Mexico). Passionate for acquiring more experience and knowledge has been working in restaurant has one, two and three Michelin starts around Europe. Has been leading kitchens in Mexico, Abu Dhabi and actually is the chef in charge of the villa operations in the Luxury Maxx Royal Resorts and Hotels in the Turkey Riviera. You will find all the experiences that he is being accumulating all those years being abroad working with international team members.
					His love for cooking couldn’t stop him from his culinary journey.
				</p>
				<h2>MORE ABOUT MY CREATIONS</h2>

			</div>
			<!-- Фото блюд и ссылки на них в ФБ -->
			<div id="dishes">
				
				<article class="dish_photo">
					<a href="https://www.facebook.com/photo/?fbid=131334808465649&set=a.100875478178249">
						<img id="one" src="img/dish5.jpg">
					</a>
				</article>

				<article class="dish_photo">
					<a href="https://www.facebook.com/photo/?fbid=138105511121912&set=a.101917168074080">
						<img id="one" src="img/dish6.jpg">
					</a>
				</article>
				<article class="dish_photo">
					<a href="https://www.facebook.com/photo/?fbid=107241344208329&set=a.100875478178249">
						<img id="one" src="img/dish7.jpg">
					</a>
				</article>

				<article class="dish_photo">
					<a href="https://www.facebook.com/photo/?fbid=100916438174153&set=a.100875478178249">
						<img id="one" src="img/dish3.jpg">
					</a>
				</article>

				<article class="dish_photo">
					<a href="https://www.facebook.com/photo/?fbid=100916108174186&set=a.100875478178249">
						<img id="one" src="img/dish8.jpg">
					</a>
				</article>

				<article class="dish_photo">
					<a href="https://www.facebook.com/photo/?fbid=100916984840765&set=a.100875478178249">
						<img id="one" src="img/dish9.jpg">
					</a>
				</article>
				
				<article class="dish_photo">
					<a href="https://www.facebook.com/photo/?fbid=100880311511099&set=a.100875478178249">
						<img id="one" src="img/dish10.jpg">
					</a>
				</article>

				<article class="dish_photo">
					<a href="https://www.facebook.com/photo/?fbid=100875458178251&set=a.100875478178249">
						<img id="one" src="img/dish4.jpg">
					</a>
				</article>

			</div>

			<div id="info">
				<h2>Useful information</h2>
				<ul>
					<li>
						<h6>Address:</h6>
						<p>Carrer Lleida, 5, 08004 Mexiсo city</p>
					</li>
					<li>
						<h6>Contact:</h6>
						<p>fro@gmail.com</p>
						<p>(+90) 555 407 01 77</p>
					</li>
				</ul>
			</div>

		</div>

		<?php
			/* подключить файл Футер*/
			include 'parts_site/footer.php';
		?>
	</div>

		<script src="script/animation.js"></script>
</body>
</html>