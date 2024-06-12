<?php
$getNum = array_key_exists('getNum', $_GET) ? $_GET['getNum'] : '';
$getCharacter =  array_key_exists('getCharacter', $_GET) ? $_GET['getCharacter'] : '';
$getNumber =  array_key_exists('getNumber', $_GET) ? $_GET['getNumber'] : '';
$getSymbol =  array_key_exists('getSymbol', $_GET) ? $_GET['getSymbol'] : '';
$dataToUse = [];
// $getSymbol = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "X", "Y", "Z", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "£", "$", "%", "&", "/", "@", "#", "*" . "+", "§", "ç"];
$characters = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "X", "Y", "Z"] ;
$number =["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
$simbols=[ "£", "$", "%", "&", "/", "@", "#", "*" . "+", "§", "ç"];
$password =[]

?>

<?php
function getPassword($getCharacter, $getNumber, $getSymbol, $dataToUse, $characters, $number, $simbols, $password,$getNum)
{ if ($getCharacter == true ||  $getNumber == true || $getSymbol == true) {
    
        if ($getCharacter == true) {
            $dataToUse = array_merge($dataToUse,$characters);
            // echo var_dump($getCharacter);
           
        }
          if ( $getNumber == true) {
            $dataToUse = array_merge($dataToUse,$number);
            // echo var_dump($getNumber);
        } 
         if ($getSymbol == true) {
            $dataToUse = array_merge($dataToUse,$simbols);
            // echo var_dump($getSymbol);
        }
        // echo var_dump($dataToUse);
        // echo var_dump($getNum);
        for ($i = 0; $i < $getNum; $i++) {
            // $password = array_merge($password, $dataToUse[rand(0, count($dataToUse) - 1)]);
            $password[] .=  $dataToUse[rand(0, count($dataToUse) - 1)];
        }
        // echo var_dump($password);
         echo implode($password);
    };
}

if (isset($_GET['crea_pass']))
    getPassword($getCharacter, $getNumber, $getSymbol, $dataToUse, $characters, $number, $simbols, $password,$getNum)
?>


