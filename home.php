
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
    <div class="w-1/2 bg-white absolute top-[20%] rounded-lg shadow-sm shadow-green-400 flex flex-col gap-5 space-y-2 p-4 left-5 gap-2">
        <h2 class="text-2xl mt-2 font-Mont text-green-400 " >listes des PACKAGES</h2>
        <?php    
         foreach($data as $item){
    echo "<div>" .
    " <div class='border-4 border-green-200 rounded-xl flex justify-between' >" 
    . $item['name'] .
    "<button class='bg-red-400 rounded-xl h-full w-[30%] '>voir plus </button>".
     "</div>".
      "<p>" . $item['descption'] . "</p>".
       "</div>" .
        "<div class='w-full h-2 bg-red-400 rounded-lg'></div>" ;
}?>   
    </div>
    <form class=" w-1/4 h-[70%] bg-white absolute top-[20%] right-6 rounded-lg shadow-sm shadow-green-400 flex flex-col gap-5 space-y-2 p-4 " action="">
    <input class="w-1/2 h-[2rem]" type="text" placeholder="nom de package">
    <input class="w-1/2 h-[2rem]" type="text" placeholder="descreption">
    <input class="w-1/2 h-[2rem]" type="text" placeholder="auteur">
    <input class="w-1/2 h-[2rem]" type="text" placeholder="email de l auteur">
    <input class="w-1/2 h-[2rem]" type="text" placeholder="date de creation">
    <button type="submit" class="bg-green-500 h-[2rem] text-xl text-white rounded-lg hover:bg-green-700"> ajouter</button>
    </form>



</body>
</html>