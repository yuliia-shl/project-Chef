<?php
	// подключить файл базы 
	include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Masterclass</title>
	<link rel="stylesheet" type="text/css" href="../css/styleS.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="192x192" href="img/icon.png"> 
    
</head>

<body>

		<?php
		/* подключить файл Панель навигации navbar */
		include $_SERVER['DOCUMENT_ROOT'] . '/parts_site/navbar.php';
        
        $sql = " SELECT * FROM masterclass WHERE id_master=" . $_GET['id'];
        $result = $connect->query($sql);
        $row = mysqli_fetch_assoc($result);
        
            ?>

    <div id="one_masterclas">

            <div class="mcimage">
                <img src="<?php echo $row['photo'] ?>">
            </div>

        <div id="mcname-big" >
            <div class="mctitle"><?php echo $row['title'] ?></div>
            <div class="mcdate"><?php echo $row['mc_date'] ?></div>

            <div id="mcprice-big">
                <?php echo $row['price'] ?>
            </div>

            <div id="mcdescription">
                <?php echo $row['descr'] ?>  
            </div> 

            <div>
                <form action="http://projectchief.local/masterclas/add_order.php" method="POST">
                    <h2><button id="btn_order" name="id_master" value="<?php echo $row['id_master'] ?>"
                    type="submit"> Order </button></h2>
                </form>  
            </div>
        </div>
    </div>

    <?php
    /* подключить файл Панель навигации navbar */
    include $_SERVER['DOCUMENT_ROOT'] . '/parts_site/footer.php';
    ?>
</body>

</html>

