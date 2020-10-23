<?php //страница выведения заказанных мастерклассов
            /* подключить файл базы */
            include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
            ?><!DOCTYPE html>
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
        <div class="about_chef">
            <h2>You ordered masterclasses:</h2>
        </div>

        <div id="row">

            <?php //создаем запрос и вытягиваем из таблицы orders мастерклассы, 
                // которые заказал текущий пользователь
            $sql = " SELECT * FROM orders WHERE id_user= " . $_COOKIE["users_id"];
            $result = $connect->query($sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $sql_mc = " SELECT * FROM masterclass WHERE id_master= " . $row['id_master'];
                $result_mc = $connect->query($sql_mc);
                while ($row_mc = mysqli_fetch_assoc($result_mc)) {

            ?>    
                <div id="mcpage"> 
                    <!-- <p id="imageblock"> -->
                    <a href="http://projectchief.local/masterclas/masterclas.php?id=
                        <?php echo $row_mc['id_master']?>">
                        <img src="<?php echo $row_mc['photo'] ?>"></a>
                    <!-- </p> -->
                    <div id="mcname" ><a href="http://projectchief.local/masterclas/masterclas.php?id=
                        <?php echo $row_mc['id_master']?>"><?php echo $row_mc['title'] ?></a>
                    </div>
                    <div id="mcname" ><a> <?php echo $row_mc['mc_date'] ?> </a></div>
                    <div id="mcprice">Price: <?php echo $row_mc['price'] ?> </div>
                </div>
            <?php
            }
        }
            ?>
            
        </div> 
    </div> <!--  конец div masterclasses-->
</body>
            <?php
            /* подключить файл Панель навигации navbar */
            include $_SERVER['DOCUMENT_ROOT'] . '/parts_site/footer.php';
            ?>
        
</html>
