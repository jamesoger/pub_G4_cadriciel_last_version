<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin menu</title>
    <?php include("views/parts/head.inc.php"); ?>
</head>
<section class="messages_ajout">
    <?php include("views/parts/messages/admin_menu.inc.php"); ?>
</section>
<section class="messages_ajout">
    <?php include("views/parts/messages/attention.inc.php"); ?>
</section>

<body class="admin_menu">
    <header>
        <h1>Bienvenue sur la page administration du pub G4</h1>
        <div class="liens">
            <a href="compte-creer">Ajouter des employés</a>
            <a href="deconnecter">Se deconnecter</a>
        </div>

    </header>
    <main>

        <div class="modifications">
            <section class="vos_mots_clefs">
                <h1>Vos mots_clefs</h1>
                <?php foreach ($mots_clefs as $mot_clef) : ?>
                    <p><?= $mot_clef->nom ?><a href="admin_menu?attention=<?= $mot_clef->id ?>">Supprimer ce mot-clef</a></p>
                <?php endforeach; ?>
                <h2>Ajoutez un mot-clef</h2>
                <form class="mot_clef_formulaire" action="enregistrer-mot-clef" method="POST">
                    <input class="texte" type="text" name="nom">
                    <input class="submit" type="submit">
                </form>
            </section>
            <section class="ajout_plat">
                <div class="champs">
                    <p class="star">*</p>
                    <p class="requis">Champs requis</p>
                </div>

                <h1>Créez votre plat</h1>
                <hr>
                <form class="ajout_formulaire" action="plat-enregistrer" method="POST" enctype="multipart/form-data">
                    <label>
                        <h2>Nom du plat <span class="require">*</span> </h2>
                        <textarea name="nom" class="description" placeholder="Entrez votre description..."></textarea>
                    </label>
                    <label>
                        <h2>Description <span class="require">*</span> </h2>
                        <textarea name="description" class="nom" placeholder="Entrez votre nom de plat..."></textarea>
                    </label>
                    <label>
                        <h2>Prix <span class="require">*</span> </h2>
                        <textarea name="prix" class="prix" placeholder="Entrez le prix du plat..."></textarea>
                    </label>
                    <h2 class="categorie">Catégories <span class="require">*</span> </h2>
                    <select name="noms_categorie">
                        <option>choisissez une catégorie</option>
                        <?php foreach ($categories as $categorie) : ?>
                            <option value="<?= $categorie->id ?>"><?= $categorie->nom ?></option>
                        <?php endforeach; ?>
                    </select>
                    <h2 class="categorie">Mots-clefs (facultatif)</h2>
                    <select name="mot_clef">

                        <option value="vide">choisissez un mot_clef</option>
                        <?php foreach ($mots_clefs as $mot_clef) : ?>
                            <option value="<?= $mot_clef->id ?>"><?= $mot_clef->nom ?></option>
                        <?php endforeach; ?>
                    </select>
                    <h2 class="categorie">Régimes (facultatif)</h2>
                    <select name="regime">
                        <option value="vide">choisissez un régime</option>
                        <?php foreach ($regimes as $regime) : ?>
                            <option value="<?= $regime->id ?>"><?= $regime->nom ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label>

                        <h2 class="media">Image (facultative)</h2>
                        <input class="file" type="file" name="image">
                    </label>
                    <div>
                        <input class="creez" type="submit" value="Créer votre plat" class="btn_submit">
                    </div>
                </form>
                <hr>

            </section>
        </div>

        <h1>Modifier votre menu</h1>
        <hr>
        <h1>entrées</h1>
        <div class="image_entree"></div>
        <div class="conteneur_admin">
            <div class="carte">
                <?php $ancien_mot_clef = null; ?>
                <?php $ancien_regime = null; ?>

                <?php foreach ($entrees1 as $entree) : ?>
                    <?php if ($entree->regime != $ancien_regime) : ?>
                        <div class="mot_clef">
                            <h3> <?= $entree->regime ?></h3>
                            <hr>
                        </div>

                    <?php endif; ?>
                    <?php $ancien_regime = $entree->regime ?>
                    <?php if ($entree->mot_clef != $ancien_mot_clef) : ?>
                        <div class="mot_clef">
                            <h3> <?= $entree->mot_clef ?></h3>
                            <hr>
                        </div>

                    <?php endif; ?>
                    <?php $ancien_mot_clef = $entree->mot_clef ?>
                    <div class="texte">
                        <h2><?= $entree->plat ?></h2>
                        <p><?= $entree->description ?></p>
                    </div>

                    <p class="prix"><?= $entree->prix ?>$</p>
                    <span class="material-icons">delete</span>
                    <a href="supprimer-plat?id=<?= $entree->id ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ?')">Supprimer ce plat</a>
                    <span class="material-icons">edit</span>
                    <a href="modifier-plat?id=<?= $entree->id ?>">Modifier ce plat</a>
                    <img class="entree1" src="<?= $entree->image ?>" alt="" width="250px" height="auto">
                <?php endforeach; ?>
                <hr class="ocre">
            </div>

            <h1>Nos repas</h1>
            <div class="image_repas"></div>
            <div class="conteneur">
                <div class="carte">
                    <?php $ancien_mot_clef = null; ?>
                    <?php $ancien_regime = null; ?>

                    <?php foreach ($repas1 as $un_repas) : ?>
                        <?php if ($un_repas->regime != $ancien_regime) : ?>
                            <div class="mot_clef">
                                <h3> <?= $un_repas->regime ?></h3>
                                <hr>
                            </div>

                        <?php endif; ?>
                        <?php $ancien_regime = $un_repas->regime ?>
                        <?php if ($un_repas->mot_clef != $ancien_mot_clef) : ?>
                            <div class="mot_clef">
                                <h3> <?= $un_repas->mot_clef ?></h3>
                                <hr>
                            </div>

                        <?php endif; ?>
                        <?php $ancien_mot_clef = $un_repas->mot_clef ?>
                        <div class="texte">
                            <h2><?= $un_repas->plat ?></h2>
                            <p><?= $un_repas->description ?></p>
                        </div>

                        <p class="prix"><?= $un_repas->prix ?>$</p>
                        <span class="material-icons">delete</span>
                        <a href="supprimer-plat?id=<?= $un_repas->id ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ?')">Supprimer ce plat</a>
                        <span class="material-icons">edit</span>
                        <a href="modifier-plat?id=<?= $un_repas->id ?>">Modifier ce plat</a>
                        <img class="entree1" src="<?= $un_repas->image ?>" alt="" width="250px" height="auto">

                    <?php endforeach; ?>
                    <hr class="ocre">



                </div>

            </div>
            <h1>Nos desserts</h1>
            <div class="image_dessert"></div>
            <div class="conteneur">
                <div class="carte">
                    <?php $ancien_mot_clef = null; ?>
                    <?php $ancien_regime = null; ?>

                    <?php foreach ($desserts as $dessert) : ?>
                        <?php if ($dessert->regime != $ancien_regime) : ?>
                            <div class="mot_clef">
                                <h3> <?= $dessert->regime ?></h3>
                                <hr>
                            </div>

                        <?php endif; ?>
                        <?php $ancien_regime = $dessert->regime ?>
                        <?php if ($dessert->mot_clef != $ancien_mot_clef) : ?>
                            <div class="mot_clef">
                                <h3> <?= $dessert->mot_clef ?></h3>
                                <hr>
                            </div>

                        <?php endif; ?>
                        <?php $ancien_mot_clef = $dessert->mot_clef ?>
                        <div class="texte">
                            <h2><?= $dessert->plat ?></h2>
                            <p><?= $dessert->description ?></p>
                        </div>

                        <p class="prix"><?= $dessert->prix ?>$</p>
                        <span class="material-icons">delete</span>
                        <a href="supprimer-plat?id=<?= $dessert->id ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ?')">Supprimer ce plat</a>
                        <span class="material-icons">edit</span>
                        <a href="modifier-plat?id=<?= $dessert->id ?>">Modifier ce plat</a>
                        <img class="entree1" src="<?= $dessert->image ?>" alt="" width="250px" height="auto">

                    <?php endforeach; ?>
                </div>
            </div>

    </main>

</body>

</html>