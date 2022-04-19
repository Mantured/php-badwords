<?php 
    $text = "Blasphemous Blade is a Greatsword in Elden Ring. The Blasphemous Blade scales primarily with Strength, Dexterity and Faith and is a Weapon that deals additional fire damage. Sacred sword of Rykard, Lord of Blasphemy. surface of this blade.";
    
    $badWord = $_GET['badWord'] ?? "Elden Ring";
    

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <h1>Original text</h1>
    <p> <?php echo($text) ?>  </p>
    <pre> text length: <?php echo(strlen($text))?> </pre>
    <h1>Censored Text</h1>
    <p><?php echo str_replace($badWord, "***", $text) ?></p>
    <pre>Censored word is <?php echo $badWord?></pre> 
</body>
</html>
