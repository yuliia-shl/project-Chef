<?php
	// Если пользователь авторизован
	if(isset ($user_cookie)) {
		// делаем запрос в БД где айди пользователя равен кукам
		$sql = "SELECT * FROM `users` WHERE id_user=" . $user_cookie;
		$result = mysqli_query($connect, $sql);
		$user_root = mysqli_fetch_assoc($result);
		// И если права доступа равны единице, то выводим форму добавления мастеркласса
		if ($user_root["root"] == 1) {
		?>
			<div class="about_chef">
                <h2>
                    Add new Master Class
                </h2>
            </div>
			<form action="add_master_into_base.php" method="POST" class="mc_form">


                <div class="wrap-input">
                    <p class="label-input">
                        Title: <br/>
                        <input class="input" type="text" name="title" placeholder="">
                    </p>
                </div>

                <div class="wrap-input">
                    <p class="label-input">
                        Photo: <br/>
                        <input class="input" type="file" name="photo">
                    </p>
                </div>

                <div class="wrap-input">
                    <p class="label-input">
                        Date: <br/>
                        <input class="input" type="date" name="mc_date" placeholder="">
                    </p>
                </div>

                <div class="wrap-input">
                    <p class="label-input">
                        Price: <br/>
                        <input class="input" type="text" name="price" placeholder="">
                    </p>
                </div>

                <div class="wrap-input">
                    <p class="label-input">
                        Description: <br/>
                        <!-- <input class="input" type="text" name="descr" placeholder=""> -->
                        <textarea class="input" name="descr" placeholder=""></textarea>
                    </p>
                </div>

                <div class="wrap-input">
                    <span class="label-input">
                        <button type="submit" class="login-form-btn">
                            ADD
                        </button>
                    </span>
                </div>
            </form>

			<?php
		}
    } 
    
    
?>
