<?php
    // var_dump($_POST);
    // var_dump($_FILES);

    require_once './bdd.php';

    if (isset($_FILES['file'])) {
        $tmpName = $_FILES['file']['tmp_name'];
        $name = $_FILES['file']['name'];
        $size = $_FILES['file']['size'];
        $error = $_FILES['file']['error'];
        $type = $_FILES['file']['type'];

        $extCut = explode('.', $name);
        // var_dump($extCut);

        $ext = strtolower(end($extCut));
        // var_dump($ext);

        // tableau des extensions autorisées
        $authExt = ['jpg', 'jpeg', 'gif', 'png'];
        
        $maxSize = 40000;

        if (in_array($ext, $authExt) && $size <= $maxSize && $error == 0) {

            $uniqueName = uniqid('', true);
            $fileName = $uniqueName.'.'.$ext;

            move_uploaded_file($tmpName, './upload/'.$fileName);

            $req = $db->prepare('INSERT INTO file (name) VALUES (?)');
            $req->execute([$fileName]);

            echo 'Image enregistrée';
        } else {
            echo 'Extension non autorisée, taille trop importante ou erreur';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test upload</title>
</head>
<body>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <label for="file">Fichier</label>
        <input type="file" name="file" id="file">
        <button type="submit">Enregistrer</button>
    </form>
    <h2>Mes images</h2>
    <?php

    $req = $db->query('SELECT name from file');
    while ($data = $req->fetch()) {
        echo '<img src="./upload/'.$data['name'].'">';
    }

    ?>

</body>
</html>