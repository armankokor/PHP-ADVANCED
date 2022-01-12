/*Ik probeerde de achtergrond kleur te veranderen maar dat lukte niet. De rest werkt volgensmij gewoon goed maar die achtergrond niet/*

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="mijngegevens.php" method="post">
        Voornaam: <input type="text" name="Voornaam"><br>
        Achternaam: <input type="text" name="Achternaam"><br>
        Klas: <input type="text" name="Klas"><br>
        Leeftijd: <input type="text" name="Leeftijd"><br>
        Adres: <input type="text" name="Adres"><br>
        Woonplaats: <input type="text" name="Woonplaats"><br>

        <form class= "Form" method="post" action="mijngegevens.php">
            <label>Geslacht</label> <br>

            <input type="radio" id="Man" name="gender" value="Man">
            <label for="Man">Man</label>

            <input type="radio" id="Vrouw" name="gender" value="Vrouw">
            <label for="Vrouw">Vrouw</label> <br>


        <select name="kleur" id="kleuren" action="mijngegevens.php"> <br>

<?php
            $kleuren = ['blauw' , 'rood' , 'geel' , 'groen'];
            foreach($kleuren as $kleur){
                 echo "<option value= '$kleur' selected>$kleur</option>";
            }
        
?>
          </select>  
                  <button>verstuur</button> <br>
          </form>



        
</body>
</html>