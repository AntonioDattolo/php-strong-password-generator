<?php
$getNum = array_key_exists('getNum', $_GET) ? $_GET['getNum'] : '';
$getCharacter =  array_key_exists('getCharacter', $_GET) ? $_GET['getCharacter'] : '';
$getNumber =  array_key_exists('getNumber', $_GET) ? $_GET['getNumber'] : '';
$getSymbol =  array_key_exists('getSymbol', $_GET) ? $_GET['getSymbol'] : '';
// $getX = 0;
$dataToUse = [];
$characters = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "X", "Y", "Z"];
$number = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
$simbols = ["£", "$", "%", "&", "/", "@", "#", "*" . "+", "§", "ç"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3.4.27/dist/vue.global.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <title>#####</title>
</head>

<body class="myBg">
    <section class="container my-3">
        <h1 class="my-3">PassWord GenEraTor</h1>
        <form method="GET" class="my-4">
            <input type="number" name="getNum" min="1" max="20" placeholder="Chose password's lenght" style="width: 250px;">
            <button type="submit" name="crea_pass">Invia</button>
            <label for="getCharacter">
                Characters
            </label>
            <input type="checkbox" name="getCharacter" value="true">
            <label for="getNumber">
                Number
            </label>
            <input type="checkbox" name="getNumber" value="true">
            <label for="getSymbol">
                Simbols
            </label>
            <input type="checkbox" name="getSymbol" value="true">
        </form>
    </section>
    <section class="container">
        <h5>
            La Tua SICURISSIMA PASSWORD é :
            <h3 class="text-center">

                <?php

                // getPassword($getX,$getNum,$getSymbol)
                include 'function.php'

                ?>
            </h3>
        </h5>
    </section>
    <!-- <script src="./js/main.js"></script> -->
</body>

</html>