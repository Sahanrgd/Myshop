<?php
if (isset($_GET["id"])){
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "myshop";

    //create connection
    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "delete from clients where id=$id";
    $connection->query($sql);
}

header("location:/myshop/index.php");
exit;
?>