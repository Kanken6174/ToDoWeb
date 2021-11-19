<!DOCTYPE html>
<html class="bck">
<link rel="stylesheet" href="login.css">

<head>
    <title>
        Veuillez vous connecter
    </title>
</head>
<header>
    <nav>
        <div class="header1">
            <h1>Site php projet</h1>
        </div>
    </nav>
</header>

<body>
    <form action="login.php" method="post">
        <div class="LoginContainer">
            <h1>Connectez-vous</h1>
            <label for="usrNom"><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrez votre pseudo" name="uname" required>
            <br />
            <label for="Passwd"><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrez votre mot de passe" name="psw" required>
            <br />
            <button type="submit">Connection</button>
        </div>
    </form>
</body>

</html>