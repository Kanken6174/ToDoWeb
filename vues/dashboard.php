<!DOCTYPE html>
<html class="bck">
<link rel="stylesheet" href="login.css">

<head>
    <title>
        Vos listes TODO
    </title>
</head>

<header>
    <nav>
        <div class="header1">
            <h1>
                TODOList
            </h1>
        </div>
    </nav>
</header>

<body>

<div>
    <?php
    if (isset($list_Arr)) {
        foreach ($list_Arr as $ficheTODO) {
            echo $ficheTODO;
        }
    }
    ?>
</div>
</body>

</html>