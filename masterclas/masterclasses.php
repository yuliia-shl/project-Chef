
<?php
// этот файл выводит список мастер-классов, вытягивая их из базы
	/* подключить файл базы */
	include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Froylan Rincón</title>
	<link rel="stylesheet" type="text/css" href="../css/styleS.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="192x192" href="img/icon.png"> 
    
</head>

<body>
    <div> 
		<?php
		/* подключить файл Панель навигации navbar */
		include $_SERVER['DOCUMENT_ROOT'] . '/parts_site/navbar.php';
		?>
    </div>
    <div class="chef_photo">
        <img src='..//img/chef10.jpg'>
    </div>
    
    <div id="masterclas">
                    <?php
        
        // если права доступа равны "1" то появляется поле добавить мастеркласс
        include $_SERVER['DOCUMENT_ROOT'] . '/masterclas/add_masterclass.php';
        // Если пользователь авторизован и права доступа нулевые, то показываем его заказы
        if(isset ($user_cookie) ) {
                // делаем запрос в БД в таблицу users где айди пользователя равен кукам
            $sql_user = "SELECT * FROM `users` WHERE id_user=" . $user_cookie;
            $result_user = mysqli_query($connect, $sql_user);
            $user_root = mysqli_fetch_assoc($result_user);
            if ($user_root["root"] == 0) {
                //это кнопка по которой выводим заказанные мастерклассы
                ?>
                <div class="about_chef">
                    <h2><a href="ordered_mc.php">My orders</a></h2>
                    <p> Here you can see Masterclasses which you ordered.</p>
                </div>
                <?php
            }
        }
        //раздел поиска по мастерклассам
                ?>
        <div class="article-search">    
            <h2>Choose masterclass</h2>
            <form action="masterclasses.php" method="POST" id="search">
                <input type="text" name="search_contact">
                <button class="form_button"> 
                    Search
                </button>
                </form> 
        </div>

        <div id="row">
            <?php
            //проверка существует ли запрос на поиск мастеркласса 
            if(isset($_POST["search_contact"])) {   
                //создаем запрос на поиск имен из БД где есть частичное совпадение
                $sql = "SELECT * FROM masterclass WHERE title LIKE '%" . $_POST["search_contact"] . "%'" . 
                " OR descr LIKE '%" . $_POST["search_contact"] . "%'";
                //резульатат запроса пишем в переменную
                $result = mysqli_query($connect, $sql);
                //считаем количество строк (совпадений) для запуска цикла
                $count_mc = mysqli_num_rows($result);
                $i = 0;
                //если количство совпадений равно нулю, выводим сообщение
                if ($count_mc == 0) {
                    ?>
                    <div class="about_chef">
                        <h2>Таких мастерклассов не найдено</h2>
                    </div>
                <?php
                } //если совпадения по поиску есть, то запускаем цикл
                while ($i < $count_mc) {
                    //получаем результирующий ряд в виде ассоциативного массива
                    $mc = mysqli_fetch_assoc($result);
                    //выводим список 
                    ?>    
                    <div id="mcpage"> 
                        <!-- <p id="imageblock"> -->
                        <a href="http://projectchief.local/masterclas/masterclas.php?id=
                            <?php echo $mc['id_master']?>">
                            <img src="<?php echo $mc['photo'] ?>"></a>
                        <!-- </p> -->
                        <div id="mcname" ><a href="http://projectchief.local/masterclas/masterclas.php?id=
                            <?php echo $mc['id_master']?>"><?php echo $mc['title'] ?></a>
                        </div>
                        <div id="mcname" ><a> <?php echo $mc['mc_date'] ?> </a></div>
                        <div id="mcprice">Price: <?php echo $mc['price'] ?> </div>
                    </div>
                    <?php 
                    $i = $i + 1;
                }
            } else { //иначе если запроса на поиск нет, то просто выводим все мастерклассы
            ?>
        </div>

        <div id="row">
                <?php
                $sql = " SELECT * FROM masterclass ORDER BY mc_date";
                $result = $connect->query($sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>    
                    <div id="mcpage"> 
                        <!-- <p id="imageblock"> -->
                        <a href="http://projectchief.local/masterclas/masterclas.php?id=
                            <?php echo $row['id_master']?>">
                            <img src="<?php echo $row['photo'] ?>"></a>
                        <!-- </p> -->
                        <div id="mcname" ><a href="http://projectchief.local/masterclas/masterclas.php?id=
                            <?php echo $row['id_master']?>"><?php echo $row['title'] ?></a>
                        </div>
                        <div id="mcname" ><a> <?php echo $row['mc_date'] ?> </a></div>
                        <div id="mcprice">Price: <?php echo $row['price'] ?> </div>
                    </div>
                    <?php
                }
            }
        ?>
        </div> 

        
    </div> <!--  конец div masterclasses-->
    <?php

        /* подключить файл футер */
        include $_SERVER['DOCUMENT_ROOT'] . '/parts_site/footer.php';
        ?>

</body>	
</html>
