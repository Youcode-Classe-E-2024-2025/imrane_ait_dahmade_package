<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter package</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-screen h-screen bg-green-200 flex justify-center">
    <h1 class="text-3xl mt-14 font-Mont text-green-700">les informations de package</h1>
  <div class="w-1/2 h-[70%] bg-white absolute top-[20%] rounded-lg shadow-sm shadow-green-400 flex flex-col gap-5 space-y-2 p-4  gap-2">
<?php
  foreach($dataafficher as $item){
    echo "<div>" .
    " <div class='border-4 border-green-200 rounded-xl flex justify-center text-4xl p-2' >" 
    . $item['name'] .
     "</div>".
     "<span class = 'text-xl text-green-700'>description de package</span>".
      "<p> " . $item['descption'] . "</p>".
       "</div>" .
        "<div class='w-full h-1 bg-green-400 rounded-lg'></div>".
        
        "<div class= 'flex flex-row justify-around'>".
        "<span class = 'text-xl text-green-700 text-center'>le nom auteur</span>".
        "<span class='text-xl'> " . $item['nom'] . "</span>".
         "</div>".  
        "<div class= 'flex flex-row justify-around'>".
        "<span class = 'text-xl text-green-700 text-center'>email de l auteur</span>".
        "<span class='text-xl'> " . $item['email'] . "</span>".
         "</div>".
         
        "<div class= 'flex flex-row justify-around'>".
        "<span class = 'text-xl text-green-700 text-center'>date de creation</span>".
        "<span class='text-xl'> " . $item['date_creation'] . "</span>".
         "</div>"
      ;
        }?>   
    </div>

  </div>



</body>
</html>