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
        try {
            $dsn = 'mysql:host=mysql;dbname=sample;charset=utf8';
            $db = new PDO($dsn, 'root', 'root');

            $sql = 'SELECT * FROM users';
            $contact = $db->prepare($sql);
            $contact->execute();
            $result = $contact->fetchAll(PDO::FETCH_ASSOC);
            var_dump($result);
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }

    ?>
    <H1 id="main">PHP code e</H1>


    <script>
        const a = document.getElementById('main')

        // aの中みをこんにちはに変える
        a.textContent = "こんにちは"

        console.log(a)
    </script>
</body>
</html>
