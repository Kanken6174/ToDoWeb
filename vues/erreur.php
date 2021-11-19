<html>

<head>
    <title>
        Erreur
    </title>
</head>

</html>

<body>
    <h1>
        Une erreur est survenue
    </h1>

    <?php
    if (isset($Err_array)) {
        foreach ($Err_array as $Erreur) {
            echo $Erreur;
        }
    }
    ?>
</body>