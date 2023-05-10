<?php
echo " ►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►► " . '<br>' . '<br>';

// ! 1 esempio  strtolower - strtoupper  - ucfirst  -  ucwords

// - strtoupper è una funzione che viene utilizzata per convertire una stringa in caratteri maiuscoli.
$stringa_1 = "ctrfrc88a135ffd55s";   //? es generare CODICE FISCALE
$stringa_maiuscola = strtoupper($stringa_1);
echo $stringa_maiuscola . '<br>' . '<br>' ;                    


// - strtolower  è una funzione che viene utilizzata per convertire una stringa in caratteri minuscoli.
$stringa_2 = "QUESTA STRINGA VIENE TRASFORMATA IN MINUSCOLO";       
$stringa_minuscola = strtolower($stringa_2);
echo $stringa_minuscola . '<br>' . '<br>' ;                  



// ucfirst traforma in MAIUSCOLO SOLO la prima lettera della prima parola di una stringa
$stringa_3 = "stringa di prova";                    // ?es: nomi,cognomi in database
$result = ucfirst($stringa_3);
echo $result . '<br>' . '<br>' ; 

// ucwords trasforma  in MAIUSCOLO  le prime lettere di ogni parola di una stringa
$stringa_4 = "ulteriore stringa di prova";        //? es: nomi paesi/nazioni
$result_2 = ucwords($stringa_4);
echo $result_2 . '<br>' . '<br>' ;

// lcfirst trasforma in MINUSCOLO SOLO la prima lettera della prima parola di una stringa
$stringa_5 = "Altra stringa di prova";
$result3=lcfirst($stringa_5);
echo $result3 . '<br>' . '<br>' . '<br>' . '<br>'  ;


echo " ►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►► " . '<br>' . '<br>';

// ! 2 esempio similar_text
//similar_text — Calcola la somiglianza tra due stringhe
//sintassi : similar_text(string $string1, string $string2, float &$percent = null): int

echo "ESEMPIO SIMILAR_TEXT". '<br>' . '<br>';

$example_1 = "Questa password è insicura". '<br>' . '<br>';   //* es controllo password precedenti
$example_2 = "Questa password sarà sicura ?". '<br>' . '<br>';
$percent=0;

$result = similar_text($example_1, $example_2, $percent);
echo $example_1 . '<br>';
echo $example_2 . '<br>';
echo $percent . '%' . '<br>' . '<br>'. '<br>';


echo " ►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►► " . '<br>' . '<br>';


// ! 3 esempio str_split  - implode
echo "ESEMPIO str_split  - implode - str_replace array_slice". '<br>' . '<br>';

//converte stringa in un array
// sintassi: str_split(string $string, int $length = 1)

$esempio = "Hello Friend Booleaner";
echo $esempio . '<br>'. '<br>';

// replace usato per togliere spazi tra le parole della stringa
$esempio_no_spazi = str_replace(' ','', $esempio);
echo $esempio_no_spazi . '<br>';


//trasformazione in array sintassi: str_split(string $string, int $length = 1)

$arr = str_split($esempio_no_spazi);
var_dump ($arr) . '<br>';




// implode converte array in stringa sintassi: implode(separator,array)
$str_implode= implode('', $arr);
echo($str_implode). '<br>' . '<br>';

echo " ►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►►► " . '<br>' . '<br>';


//! se uno è pignolo e vuole mettere gli spazi tra le parole
// Estrae una porzione dell'array a partire dall'indice n1, con lunghezza n2 array_slice($array, n1, n2);

$sub_1= array_slice($arr, 0, 5);
$sub_2= array_slice($arr,5, 6);
$sub_3= array_slice($arr, 11, 9);   
var_dump($sub_1);
var_dump($sub_2);
var_dump($sub_3);

$str_1=implode('',$sub_1);
$str_2=implode('',$sub_2);
$str_3=implode('',$sub_3);

$str_ultimate= $str_1 . " " . $str_2 . " " . $str_3;
var_dump($str_ultimate);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: rgb(49, 50, 49); color: #bfc3d7;">

    
</body>
</html>