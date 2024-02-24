<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("views/parts/head.inc.php"); ?>
</head>
<section class="messages_ajout">
    <?php include("views/parts/messages/ajout_compte.inc.php"); ?>
</section>

<body class="ajout_compte">

    <div class="boites">
        <div class="employe">
            <h1>Vos employés</h1>
            <?php foreach ($employes as $employe) : ?>
                <p><?= $employe->prenom . " " . $employe->nom . " " . "<br>" .   "courriel:" . " " . $employe->courriel ?> </p>
                <div class="modif">
                    <a href="modifier-compte?id=<?= $employe->id ?>">modifier</a>
                    <a href="compte-supprimer?id=<?= $employe->id ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ?')">supprimer</a>
                </div>
            <?php endforeach; ?>
        </div>
        <form action="compte-enregistrer" method="POST">
            <h1>Ajoutez des employés</h1>
            <input type="text" name="prenom" placeholder="Prénom">
            <input type="text" name="nom" placeholder="Nom">
            <input type="email" name="courriel" placeholder="Courriel" >
            <input type="password" name="mdp" placeholder="Mot de passe" >
            <input type="password" name="confirmer_mdp" placeholder="Confirmer le mot de passe" >
            <input class="btn_submit" type="submit" value="Créez votre nouvel employé!" >
        </form>


    </div>
    <a class="retour" href="admin_menu">Retour à l'administration</a>
</body>

</html>