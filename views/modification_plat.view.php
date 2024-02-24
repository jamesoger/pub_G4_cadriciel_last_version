<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modification plat</title>
    <?php include("views/parts/head.inc.php"); ?>
</head>

<body class="modification">
    <section class="messages_ajout">
        <?php include("views/parts/messages/modification_plat.inc.php"); ?>
    </section>
    <h1>Modifier ce plat</h1>
    <form action="plat-modifier" method="POST" enctype="multipart/form-data">
        <div class="champs">
            <p class="star">*</p>
            <p class="requis">Champs requis</p>
        </div>
        <input type="hidden" name="id" value="<?= $plat->id ?>">
        <label for="nom">Nom <span class="require">*</span></label>
        <input type="text" name="nom" value="<?= $plat->nom ?>" >
        <label for="prix">Prix <span class="require">*</span> </label>
        <input type="text" name="prix" value="<?= $plat->prix ?>">
        <label for="description">Description <span class="require">*</span></label>
        <textarea name="description"><?= $plat->description ?></textarea>
        <h2>Catégories <span class="require">*</span></h2>
        <select name="noms_categorie">
            <option>choisissez une catégorie</option>
            <?php foreach ($categories as $categorie) : ?>
                <option value="<?= $categorie->id ?>" <?php if ($categorie->nom === $plat->nom_categories) echo 'style="background-color: #CDB575;"'; ?>>
                    <?= $categorie->nom ?>
                </option>
            <?php endforeach; ?>
        </select>
        <h2>mot-clef</h2>
        <select name="mot_clef">
            <option value="vide">choisissez un mot_clef</option>
            <?php foreach ($mots_clefs as $mot_clef) : ?>
                <option value="<?= $mot_clef->id ?>" <?php if ($mot_clef->nom === $plat->nom_mot_clef) echo 'style="background-color: #CDB575;"'; ?>>
                    <?= $mot_clef->nom ?>
                </option>
            <?php endforeach; ?>
        </select>
        <input type="text" name="nouveau_mot_clef" placeholder="Créez un nouveau mot-clef">
        <h2>régime</h2>
        <select name="regime">
            <option value="vide">choisissez un régime</option>
            <?php foreach ($regimes as $regime) : ?>
                <option value="<?= $regime->id ?>" <?php if ($regime->nom === $plat->nom_regime) echo 'style="background-color: #CDB575;"'; ?>>
                    <?= $regime->nom ?>
                </option>
            <?php endforeach; ?>
        </select>
        <label>
            <h2>Changez image</h2>
            <p class="p_image">Si vous aviez une image pour votre plat, il faut la télécharger de nouveau</p>
            <input class="file" type="file" name="image">
        </label>
        <button type="submit">Modifier</button>
    </form>
    <a class="admin_retour" href="admin_menu">Retour à l'administration</a>
</body>

</html>