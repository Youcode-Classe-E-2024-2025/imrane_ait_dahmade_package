<?php
include '../_config/config.php'; // Connexion à la base de données

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérification et échappement des données
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $descption = mysqli_real_escape_string($mysqli, $_POST['descption']);
    $date_creation = mysqli_real_escape_string($mysqli, $_POST['date']);
    $idAuteur = mysqli_real_escape_string($mysqli, $_POST['idAuteur']); // ID de l'auteur

    // Vérifiez si l'auteur existe dans la table 'auteur'
    $checkAuteurQuery = "SELECT ID_auteur FROM auteur WHERE ID_auteur = $idAuteur";
    $resultAuteur = mysqli_query($mysqli, $checkAuteurQuery);

    if (mysqli_num_rows($resultAuteur) > 0) {
        // L'auteur existe, insérez le package
        $sql = "INSERT INTO pt (`name`, `descption`, `ID_AU`, `date_creation`) 
                VALUES ('$name', '$descption', $idAuteur, '$date_creation')";

        if (mysqli_query($mysqli, $sql)) {
            echo "Package ajouté avec succès !";
            header("Location: ../index.php?page=home"); // Redirection après l'ajout
            exit;
        } else {
            echo "Erreur lors de l'ajout du package : " . mysqli_error($mysqli);
        }
    } else {
        // L'auteur n'existe pas
        echo "Erreur : Aucun auteur trouvé avec l'ID $idAuteur.";
    }
}
?>
