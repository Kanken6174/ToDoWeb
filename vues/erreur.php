<!DOCTYPE html>
<html class="bck">
<link rel="stylesheet" href="login.css">

<head>
    <title>
        Erreur
    </title>
</head>

<header>
    <nav>
        <div class="header1">
            <h1>
                Une erreur est survenue
            </h1>
        </div>
    </nav>
</header>

<body>


    <?php
    if (isset($Err_array)) {
        foreach ($Err_array as $Erreur) {
            echo $Erreur;
        }
    }
    ?>
</body>

</html>