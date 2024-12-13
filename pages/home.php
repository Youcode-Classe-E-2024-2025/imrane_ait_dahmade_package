<?php include_once "actions/list_package.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter package</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>





<body class="w-full h-screen bg-green-200 flex justify-center">
    <h1 class="text-3xl mt-14 font-Mont text-white">GESTION DES PACKAGES JSON</h1>
    
    
    <div class="w-[70%] bg-white absolute top-[20%] rounded-lg shadow-sm shadow-green-400 flex flex-col gap-5 p-4 left-5 ">
        <h2 class="text-2xl mt-2 font-Mont text-green-400">Liste des PACKAGES</h2>
        <?php
        include './actions/list_package.php'; // Liste les packages existants
        foreach ($data as $item) {
            echo "<div>" .
                 "<div class='border-4 border-green-200 rounded-xl flex justify-between text-xl p-2'>" .
                 htmlspecialchars($item['name']) .
                 "<a href='index.php?page=detail&action=read_package&id=" . htmlspecialchars($item['id_pt']) . "' class='rounded-xl h-full w-[30%]'>Voir plus</a>" .
                 "</div>" .
                 "<p>" . htmlspecialchars($item['descption']) . "</p>" .
                 "</div>" .
                 "<div class='w-full h-2 bg-green-400 rounded-lg'></div>";
        }
        ?>   
    </div>
    
    <!-- Formulaire pour ajouter un package -->
    <form class="w-1/4 h-[70%] bg-white absolute top-[20%] right-6 rounded-lg shadow-sm shadow-green-400 flex flex-col gap-5 p-4"
          action="./actions/add_package.php" method="POST">
        <h1 class="text-2xl font-Mont text-green-400">Ajouter un package</h1>
        <input class="h-[2rem] border-2 rounded-lg p-2" type="text" placeholder="Nom de package" name="name" required>
        <input class="h-[2rem] border-2 rounded-lg p-2" type="text" placeholder="Description" name="descption" required>
        <input class="h-[2rem] border-2 rounded-lg p-2" type="text" placeholder="Auteur" name="nom" required>
        <!-- <input class="h-[2rem] border-2 rounded-lg p-2" type="email" placeholder="Email de l'auteur" name="email" required> -->
        <input class="h-[2rem] border-2 rounded-lg p-2" type="date" placeholder="Date de création" name="date" required>
        <input class="h-[2rem] border-2 rounded-lg p-2" type="number" placeholder="idAuteur" name="idAuteur" value="5"  required>

        <!-- <input class="h-[2rem] border-2 rounded-lg p-2" type="text" placeholder="Nom de version" name="v_name" required> -->
        <button type="submit" class="bg-green-500 h-[2rem] text-xl text-white rounded-lg hover:bg-green-700">Ajouter</button>
    </form>
</body>
</html>

</html>