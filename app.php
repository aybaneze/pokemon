<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Pokemon</title>
</head>
<body>
    <section>
    <img class="title" src="http://pluspng.com/img-png/pokemon-logo-png-pokemon-logo-png-2000.png">
</section>    

<section>
<div class="container">
 <?php
$data = json_decode( file_get_contents('https://pokeapi.co/api/v2/pokemon?offset=4&limit=40'), true );
for($i = 0; $i < count($data['results']) ; $i++ ){
    echo "<div class='ab'><div class='az'><p class='name-pok'>".$data['results'][$i]["name"]."</p><br /></div>";
    $data2 = json_decode( file_get_contents($data['results'][$i]["url"]), true );
    ?>
   <div class="imgs"><img class="img-pok" src="<?php echo $data2['sprites']['front_default']?>">   <img class="img-pok" src="<?php echo $data2['sprites']['back_default']?>">  <img class="img-pok" src="<?php echo $data2['sprites']['back_shiny']?>"> <img class="img-pok" src="<?php echo $data2['sprites']['front_shiny']?>"> <br /></div></div>
    <?php
}?>
</div>
</section>
    



</body>
</html>