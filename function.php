<?php
$getNum = array_key_exists('getNum', $_GET) ? $_GET['getNum'] : '';
$getX = 0;
$getSymbol = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "X", "Y", "Z", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "£", "$", "%", "&", "/", "@", "#", "*" . "+", "§", "ç"];

?>

<?php
function getPassword($x, $y, $z)
{

    for ($x = 0; $x < $y; ++$x) {
        $indexRandom = rand(0, 70);

        echo  $z[$indexRandom];
    }
}

if (isset($_GET['crea_pass']))
    getPassword($getX, $getNum, $getSymbol)
?>


