<?php
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
if (isset($_COOKIE["users_id"])) {
    $sql="INSERT INTO orders (id_user, id_master, status) VALUES ('" . $_COOKIE["users_id"] . "', '" . $_POST['id_master'] . "', '1')";
    if(mysqli_query($connect, $sql)){
        
        header('Location: http://projectchief.local/masterclas/masterclasses.php');
    } else {
        echo "<h2>Произошла ошибка</h2>";
    }
} else {
    header('Location: http://projectchief.local/login.php');
}
//'" . $row["id_master"] . "'
?>
