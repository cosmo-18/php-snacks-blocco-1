<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php

$frase = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit ut ad, optio quod ea eveniet quidem! Magnam enim dolor sapiente ea ratione quis in, vitae quas provident, numquam tempore est. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis hic quam ipsam pariatur consectetur, rerum quod at rem omnis accusamus ea possimus beatae voluptas quisquam adipisci, veniam modi! At, error? Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi doloribus vitae ipsam, nobis voluptas itaque est deserunt! Ratione, quae! Modi eaque voluptate nostrum. Provident assumenda incidunt delectus nihil magni reprehenderit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi animi odit omnis voluptatibus sit quidem fugit explicabo voluptate doloremque totam adipisci tempore, eligendi quisquam molestias quod natus necessitatibus enim optio.';

$pezzo=  explode('.', $frase);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK_5</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer'/>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>

<?php

forEach($pezzo as $punto){
    echo $punto;
    echo '<br/>';
}

?>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src='https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js'></script>
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
</body>
</html>