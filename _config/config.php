<?php

/**
 * Dump and die.
 *
 * @param $var
 * @return void
 */
function dd(...$var) {
    foreach ($var as $elem) {
        echo '<pre class="codespan">';
        echo '<code>';
        !$elem || $elem == '' ? var_dump($elem) : print_r($elem);
        echo '</code>';
        echo '</pre>';
    }

    die();
}

$mysqli = new mysqli("localhost", "root", "", "gestion_pacakges");

// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}
 
