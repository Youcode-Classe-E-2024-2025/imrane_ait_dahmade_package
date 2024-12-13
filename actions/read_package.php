<?php

$id = $_GET['id'];

$afficher = "SELECT 
    pt.name, 
    pt.descption,
    auteur.nom, 
    auteur.email,
    pt.date_creation
FROM 
   pt
JOIN 
    nouvelle_table ON nouvelle_table.id_pt = pt.id_pt
JOIN 
    auteur ON nouvelle_table.id_au = auteur.id_auteur
WHERE 
    pt.id_pt = $id;";


$resultafficher = $mysqli->query($afficher);


if ($resultafficher) {
    // Fetch results as an associative array
    $dataafficher = $resultafficher->fetch_all(MYSQLI_ASSOC);
} else {
    // If there was an error in the query
    die('Query failed: ' . mysqli_error($mysqli));
}


$resultafficher->free();