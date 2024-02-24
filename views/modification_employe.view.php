<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modification employé</title>
    <?php include("views/parts/head.inc.php"); ?>
</head>
<section class="messages_ajout">
    <?php include("views/parts/messages/modification_employe.inc.php"); ?>
</section>

<body class="modification_employe">
    <div class="formulaire">
        <h1>Modifiez vos employés</h1>
        <a href="admin_menu">Retour à l'administration</a>
        <form action="compte-modifier" method="POST">
            <input type="hidden" name="id" value="<?= $un_employe->id ?>">
            <input  type="text" name="prenom" value="<?= $un_employe->prenom ?>">
            <input type="text" name="nom" value="<?= $un_employe->nom ?>">
            <input type="email" name="courriel" value="<?= $un_employe->courriel ?>">
            <input class="btn_submit" type="submit" value="Modifiez cet employé!">
        </form>
        <h2>Modifiez son mot de passe</h2>

        <form action="mdp-modifier" method="POST">
            <p class="message_infos">Facultatif! Si vous ne modifiez pas son mot de passe, cet employé conservera celui qu'il possède déja.
            </p>
            <input type="hidden" name="id" value="<?= $un_employe->id ?>">
            <input type="password" name="mot_de_passe" placeholder="Mot de passe">
            <input type="password" name="confirmer_mdp" placeholder="Confirmer le mot de passe">
            <input class="btn_submit" type="submit" value="Modifiez le mot de passe!">
        </form>
    </div>

</body>

</html>