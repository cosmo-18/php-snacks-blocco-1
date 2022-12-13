<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

$Basket = [

    [
        "squadraCasa" =>  "OlimpiaMilano",
        "puntiCas" =>  "55",
        "squadraOspite" =>  "Cantù",
        "puntiOsp" =>  "60",
        "data"=>  "5/10/2022"
    ],

     [
        "squadraCasa" =>  "OlimpiaMilano",
        "puntiCas" =>  "70",
        "squadraOspite" =>  "Cantù",
        "puntiOsp" =>  "90",
        "data"=>  "25/10/2022"
     ],
     [
        "squadraCasa" =>  "OlimpiaMilano",
        "puntiCas" =>  "105",
        "squadraOspite" =>  "Cantù",
        "puntiOsp" =>  "80",
        "data"=>  "1/10/2022"
     ]

     ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK_1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer'/>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>

<div class="container-fluid d-flex w-50 justify-content-between py-3">

<?php

foreach ($Basket as $partita) {

echo "<pre>";
    echo "Casa: ";     
printf ($partita["squadraCasa"]);
     echo "</br>";
    echo "Punteggio Casa: ";
     printf ($partita["puntiCas"]);
     echo "</br>";
    echo "Ospiti: ";
     printf ($partita["squadraOspite"]);
     echo "</br>"; 
     echo "Punteggio Ospiti: ";
     printf ($partita["puntiOsp"]);
     echo "</br>"; 
     echo "Giocata il: ";
     printf ($partita["data"]);

   echo  "</pre>";

}

?>

</div>



    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src='https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js'></script>
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
</body>
</html>