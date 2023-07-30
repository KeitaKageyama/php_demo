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
        $data = ['name' => '玉ねぎ', 'price' => 200, 'santi' => '北海道'];
        
        foreach ($data as $key => $value){

            if($key === "name"){
                $keyname = "名前";
            }else if($key === "price"){
                $keyname = "値段";
            }else if($key === "santi"){
                $keyname = "産地";
            };

            echo"{$keyname} : {$value}<br>";
        }
    ?>
    <H1>PHP code e</H1>
</body>
</html>
