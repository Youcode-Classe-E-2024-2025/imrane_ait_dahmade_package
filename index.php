<?php

include_once "config.php";

$sql = "SELECT * FROM pt";
$result = $mysqli->query($sql);

// Fetch all
$data = $result->fetch_all(MYSQLI_ASSOC);




// die();




include_once $_GET['page'] . ".php";