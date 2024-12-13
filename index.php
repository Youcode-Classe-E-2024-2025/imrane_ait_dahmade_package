<?php

include_once "_config/config.php";

if(isset($_GET['action'])) {
    include_once "actions/" . $_GET['action'] . ".php";
}

if(isset($_GET['page'])) {
    include_once "pages/" . $_GET['page'] . ".php";
} else {
    include_once "pages/home.php";
}
