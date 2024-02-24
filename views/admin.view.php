<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>administration</title>
    <?php include("views/parts/head.inc.php"); ?>
</head>
<section class="messages_ajout">
    <?php include("views/parts/messages/admin.inc.php"); ?>
</section>

<body class="connexion">
    <section class="login">
        <h1>Connexion</h1>
        <form action="connecter" method="POST">
            <input type="email" name="courriel" placeholder="Courriel" autofocus>
            <input type="password" name="mdp" placeholder="Mot de passe">
            <input class="btn_submit" type="submit" value="Envoyer">
        </form>
    </section>
</body>

</html>