<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color : #f00
        }
     </style>
</head>
<body>
    <?php
     
        $onion = ['name' => 'たまねぎ', 'price' => 36, 'santi' => '長野', ];


        foreach ($onion as $key => $value) {
            if ($key === "name"){
             $keyName = "商品名";
             echo $keyName . 'は' . $value . 'です。';
            }else if ($key === "price"){
             $keyName = "価格";
             echo $keyName . 'は' . $value . '円です。';
            }else if ($key === "santi"){た
             $keyName = "産地";
             echo $keyName . 'は' . $value . 'です。';
            }
        }

    ?>
    <H1>PHP code e</H1>
</body>
</html>
