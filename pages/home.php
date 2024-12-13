<?php include_once "actions/list_package.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter package</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-screen h-screen bg-green-200 flex justify-center">
    <h1 class="text-3xl mt-14 font-Mont text-white">GESTION DES PACKAGES JSON</h1>
    <div class="w-[70%] bg-white absolute top-[20%] rounded-lg shadow-sm shadow-green-400 flex flex-col gap-5 space-y-2 p-4 left-5 gap-2">
        <h2 class="text-2xl mt-2 font-Mont text-green-400 " >listes des PACKAGES</h2>
        <?php
         foreach($data as $item){
    echo "<div>" .
    " <div class='border-4 border-green-200 rounded-xl flex justify-between text-xl p-2' >" 
    . $item['name'] .
    "<a href='index.php?page=detail&action=read_package&id=".$item['id_pt']."' class='rounded-xl h-full w-[30%] ' onclick ='voirplus()'>voir plus </a>".
     "</div>".
      "<p>" . $item['descption'] . "</p>".
       "</div>" .
        "<div class='w-full h-2 bg-green-400 rounded-lg'></div>" ;
        }?>   
    </div>
    <form class=" w-1/4 h-[70%] bg-white absolute top-[20%] right-6 rounded-lg shadow-sm shadow-green-400 flex flex-col gap-5 space-y-2 p-4  " 
        action="index.php?page=home&action=add_package" method="POST">
    <h1 class="text-2xl  font-Mont text-green-400" >ajouter un package</h1>
    <input class=" h-[2rem] border-2 rounded-lg p-2 " type="text" placeholder="nom de package" name="name">
    <input class=" h-[2rem] border-2 rounded-lg p-2" type="text" placeholder="descreption" name="descption">
    <input class=" h-[2rem] border-2 rounded-lg p-2" type="text" placeholder="auteur" name="nom">
    <input class=" h-[2rem] border-2 rounded-lg p-2" type="text" placeholder="email de l auteur" name="email">
    <input class=" h-[2rem] border-2 rounded-lg p-2" type="text" placeholder="date de creation" name="date">
    <input class=" h-[2rem] border-2 rounded-lg p-2" type="text" placeholder="nom de version" name="v_name">
    <button type="submit" class="bg-green-500 h-[2rem] text-xl text-white rounded-lg hover:bg-green-700">Ajouter</button>
    </form>



</body>
</html>