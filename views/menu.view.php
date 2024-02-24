<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <?php include("views/parts/head.inc.php"); ?>
</head>

<body class="menu_body">
    <div id="app">
        <header>
            <div class="nav">
                <a href="index">Accueil</a>
                <a href="menu">Menu</a>
                <img class="logo_header" src="public/img/logo.png" alt="logo" width="15%" height="30%">
                <a href="index #histoire">Notre histoire</a>
                <a href="#nous_joindre">Nous joindre</a>
            </div>
            <h1>menu</h1>
        </header>
        <main>
            <h1 id="entree">entrées</h1>
            <div class="image_entree"></div>
            <div class="conteneur">
                <div class="carte">
                    <?php $ancien_mot_clef = null; ?>
                    <?php $ancien_regime = null; ?>

                    <?php foreach ($entrees1 as $entree1) : ?>
                        <?php if ($entree1->regime != $ancien_regime  && !empty($entree1->regime)) : ?>
                            <div class="mot_clef">
                                <h3> <?= $entree1->regime ?></h3>
                                <hr>
                            </div>
                        <?php endif; ?>
                        <?php $ancien_regime = $entree1->regime ?>
                        <?php if ($entree1->mot_clef != $ancien_mot_clef  && !empty($entree1->mot_clef)) : ?>
                            <div class="mot_clef">
                                <h3> <?= $entree1->mot_clef ?></h3>
                                <hr>
                            </div>

                        <?php endif; ?>
                        <?php $ancien_mot_clef = $entree1->mot_clef ?>
                        <div class="texte">
                            <h2><?= $entree1->plat ?></h2>
                            <p><?= $entree1->description ?></p>
                        </div>

                        <p class="prix"><?= $entree1->prix ?>$</p>
                        <img class="entree1" src="<?= $entree1->image ?>" alt="">

                    <?php endforeach; ?>
                    <hr class="ocre">
                </div>
            </div>
            <h1 id="repas">Nos repas</h1>
            <div class="image_repas"></div>
            <div class="conteneur">
                <div class="carte">
                    <?php $ancien_mot_clef = null; ?>
                    <?php $ancien_regime = null; ?>
                    <?php foreach ($repas1 as $repas) : ?>
                        <?php if ($repas->regime != $ancien_regime  && !empty($repas->regime)) : ?>
                            <div class="mot_clef">
                                <h3> <?= $repas->regime ?></h3>
                                <hr>
                            </div>

                        <?php endif; ?>
                        <?php $ancien_regime = $repas->regime ?>
                        <?php if ($repas->mot_clef != $ancien_mot_clef  && !empty($repas->mot_clef)) : ?>
                            <div class="mot_clef">
                                <h3> <?= $repas->mot_clef ?></h3>
                                <hr>
                            </div>

                        <?php endif; ?>
                        <?php $ancien_mot_clef = $repas->mot_clef ?>
                        <div class="texte">
                            <h2><?= $repas->plat ?></h2>
                            <p><?= $repas->description ?></p>
                        </div>

                        <p class="prix"><?= $repas->prix ?>$</p>
                        <img class="entree1" src="<?= $repas->image ?>" alt="">

                    <?php endforeach; ?>
                    <hr class="ocre">



                </div>

            </div>
            <h1 id="dessert">Nos desserts</h1>
            <div class="image_dessert"></div>
            <div class="conteneur">
                <div class="carte">
                    <?php $ancien_mot_clef = null; ?>
                    <?php $ancien_regime = null; ?>

                    <?php foreach ($dessert1 as $dessert) : ?>
                        <?php if ($dessert->regime != $ancien_regime  && !empty($dessert->regime)) : ?>
                            <div class="mot_clef">
                                <h3> <?= $dessert->regime ?></h3>
                                <hr>
                            </div>

                        <?php endif; ?>
                        <?php $ancien_regime = $dessert->regime ?>
                        <?php if ($dessert->mot_clef != $ancien_mot_clef  && !empty($dessert->mot_clef)) : ?>
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
                        <img class="entree1" src="<?= $dessert->image ?>" alt="">

                    <?php endforeach; ?>
                </div>
            </div>
            
            <div id="infolettre" class="infolettre" >
                <video class="video" src="./public/video/infolettre.mp4" autoplay muted loop ></video>
                <img class="image_infolettre"src="public/img/infolettre2.png" alt="">
                <?php if (isset($_SESSION['afficher_carte']) && $_SESSION['afficher_carte'] && !empty($_SESSION['nom_client'])) : ?>
                    <section class="bravo" v-if="carte" :class="{ active: carte}">
                        <span @click="retirerCarte()" class="material-symbols-outlined">
                            close
                        </span>
                        <h1>Félicitations <?= $_SESSION['nom_client']; ?></h1>
                        <p>Bienvenue parmi nous!</p>
                        <p>Nous vous enverrons notre infolettre d'ici quelques jours</p>
                    </section>
                    <?php unset($_SESSION['afficher_carte'], $_SESSION['nom_client']); ?>
                <?php endif; ?>
                <h2 class="info"> Pour ne rien manquer des nouveautés <br> abonnez vous à notre infolettre!</h2>
                <form action="enregistrer-client" method="POST">
                    <input type="text" name="nom" v-model="nom_client" placeholder="NOM">
                    <input type="text" name="courriel" placeholder="COURRIEL">
                    <input type="hidden" name="afficher_carte" value="1">
                    <input @click="afficherCarte()" class="submit" type="submit" name="abonner" value="ABONNEZ-VOUS">
                </form>
            </div>
            <hr class="hr_menu">
            <div id="nous_joindre">
                <h1>nous joindre</h1>
                <p>Pub G4 <br> 297, rue St-Georges, Saint-Jérôme (Québec) J7Z 5A2 <br> 450 436-1531</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.7465989466386!2d-74.00559052330607!3d45.776268412562374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccf2ca136664c05%3A0x90430ecdc061500!2s297%20Rue%20St%20Georges%2C%20Saint-J%C3%A9r%C3%B4me%2C%20QC%20J7Z%205A2!5e0!3m2!1sfr!2sca!4v1685553239844!5m2!1sfr!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </main>
        <footer>
            <div class="gauche">
                <img class="logo2" src="public/img/logo.png" alt="logo">
                <p>Le pub G4 <br> Une force tranquille!</p>
                <div class="reseaux">
                    <a href="https://www.instagram.com/?hl=fr"target="_blank"><img src="public/img/Instagram_Glyph_Gradient.png" alt="instagram"></a>
                    <a href="https://www.facebook.com/"target="_blank"><img src="public/img/f_logo_RGB-Blue_100.png" alt="facebook"></a>
                    <a href="https://twitter.com/?lang=fr"target="_blank"><img src="public/img/2021 Twitter logo - blue.png" alt="twitter"></a>
                </div>

            </div>
            <div class="nav_footer">
                <a href="index">Accueil</a>
                <a href="menu">Menu</a>
                <a href="index #histoire">Notre histoire</a>
                <a href="#nous_joindre">Nous joindre</a>
                <div class="liens">
                    <a class="admin" href="admin">admin</a>
                    <img src="public/img/droits-dauteur.png" alt="copyright">
                    <p class="copyright">2023copyrightpubg4</p>

                </div>
            </div>
        </footer>
    </div>

    <script src="public/js/main.js" type="module"></script>
</body>

</html>