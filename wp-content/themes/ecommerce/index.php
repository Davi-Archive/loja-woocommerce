<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$produtos = ['Bermudas', 'Camisetas','Sapatos'];

$produto = [
    'nome'=> 'Camisa',
    'preco'=> 'RS49',
    'img'=> [
        'src'=> './img/image.jpg',
        'alt'=> 'Camisa Preta',
    ],
    ];
?>

<pre>

<?php
print_r($produto);
?>

<br />
<?= $produtos[0];
print_r($produtos);


var_dump($produtos);
?>
</pre>
</body>
</html>