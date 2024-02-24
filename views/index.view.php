<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pub_G4_accueil</title>
    <?php include("views/parts/head.inc.php"); ?>
</head>
<section class="messages_ajout">
    <?php include("views/parts/messages/index.inc.php"); ?>
</section>

<body>
    <div id="app">
        <header>
            <div class="nav">
                <a href="index">Acceuil</a>
                <a href="menu">Menu</a>
                <img class="logo_header" src="public/img/logo.png" alt="logo">
                <a href="#histoire">Notre histoire</a>
                <a href="#nous_joindre">Nous joindre</a>
            </div>
            <h1>Votre pub de quartier <br> depuis plus de 20 ans</h1>
            <a class="bouton_menu" href="menu"> Voir notre menu</a>

        </header>
        <main>
            <h1>Menu</h1>
            <div class="div-menu">
                <div class="entree">
                    <div class="titre">
                        <a class="titre-entree" href="menu #entree">Entrées</a>
                    </div>
                    <img :src="'./public/img/'+ entree" alt="entree">
                </div>
                <div class="repas">
                    <div class="titre">
                        <a class="titre-repas" href="menu #repas">Repas</a>
                    </div>
                    <img :src="'./public/img/' + repas" alt="repas">
                </div>
                <div class="dessert">
                    <div class="titre">
                        <a class="titre-dessert" href="menu #dessert">Desserts</a>
                    </div>
                    <img :src="'./public/img/' + dessert" alt="dessert">
                </div>
            </div>
            <div id="histoire">
                <h1>Notre histoire</h1>

                <p>Depuis maintenant 20 ans, Pub G4 vous fait découvrir des plats de tout genre avec une touche raffinée que <br> vous n’avez goutée nulle part ailleurs. Venez entre amis, pour une soirée romantique ou simplement pour <br> satisfaire votre appétit,
                    Pub G4 vous promet une expérience culinaire inoubliable.
                    Notre équipe de chefs <br> talentueux, passionnés par l'art de la gastronomie, met tout en œuvre pour créer des plats uniques. <br>
                    Que ce soit pour célébrer une occasion spéciale, organiser un repas d'affaires ou simplement profiter d'une <br> soirée détendue, Pub G4 est l'endroit idéal. <br>
                    Alors, venez découvrir l'expérience gastronomique unique de Pub G4 et laissez-vous transporter dans un <br> voyage gustatif incomparable. Réservez votre table dès maintenant et préparez-vous à vivre des moments de <br> délices et de partage inoubliables.
                </p>
            </div>
            <div class="burgers">
                <hr>
                <div class="bloc">
                    <h3>Nos burgers <br> classiques et <br> indémodables</h3>
                    <a href="menu?section=burger"><button>Voir nos burgers</button></a>
                    <div class="burgers_div">
                        <div class="boite_image"><img src="public/img/burger2.png" alt="hamburger" width="20%" height="40%"></div>
                        <div class="boite_image"><img src="public/img/burger_poulet2.png" alt="hamburger" width="20%" height="40%"></div>
                    </div>
                </div>

            </div>
            <div id="infolettre" class="infolettre">
                <video class="video" src="./public/video/infolettre.mp4" autoplay muted loop></video>
                <img class="image_infolettre" src="public/img/infolettre2.png" alt="">
                <?php if (isset($_SESSION['afficher_carte']) && $_SESSION['afficher_carte'] && !empty($_SESSION['nom_client'])) : ?>
                    <section class="bravo" v-if="carte" :class="{ active: carte}">
                        <span @click="retirerCarte()" class="material-symbols-outlined">
                            close
                        </span>
                        <h1>Félicitations <?= $_SESSION['nom_client']; ?></h1>
                        <p>Bienvenue parmi nous!</p>
                        <p>Nous vous enverrons notre infolettre d'ici quelques jours</p>
                        <img src="public/img/logo.png" alt="logo">
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
            <hr class="commentaires_hr">
            <section class="commentaires" :style="{ backgroundImage: `linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('./public/img/${image_commentaire}')` }">
                <h2 class="h2_commentaires">commentaires de clients</h2>
                <div class="etoiles">
                    <p>{{texte1}}</p>
                    <p v-html="etoile1"></p>
                    <p>{{texte2}}</p>
                    <p v-html="etoile2"></p>
                </div>
            </section>
            <div id="nous_joindre">
                <h1>nous joindre</h1>
                <p>Pub G4 <br> 297, rue St-Georges, Saint-Jérôme (Québec) J7Z 5A2 <br> 450 436-1531</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.7465989466386!2d-74.00559052330607!3d45.776268412562374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccf2ca136664c05%3A0x90430ecdc061500!2s297%20Rue%20St%20Georges%2C%20Saint-J%C3%A9r%C3%B4me%2C%20QC%20J7Z%205A2!5e0!3m2!1sfr!2sca!4v1685553239844!5m2!1sfr!2sca" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </main>
        <footer>
            <div class="gauche">
                <img class="logo2" src="public/img/logo.png" alt="logo">
                <p>Le pub G4 <br> Une force tranquille!</p>
                <div class="reseaux">
                    <a href="https://www.instagram.com/?hl=fr" target="_blank"><img src="public/img/Instagram_Glyph_Gradient.png" alt="instagram"></a>
                    <a href="https://www.facebook.com/" target="_blank"><img src="public/img/f_logo_RGB-Blue_100.png" alt="facebook"></a>
                    <a href="https://twitter.com/?lang=fr" target="_blank"><img src="public/img/2021 Twitter logo - blue.png" alt="twitter"></a>
                </div>
            </div>
            <div class="nav_footer">
                <a href="index">Accueil</a>
                <a href="menu">Menu</a>
                <a href="index #histoire">Notre histoire</a>
                <a href="#nous_joindre">Nous joindre</a>
                <div class="liens">
                    <a class="admin" href="admin">admin</a>
                    <img src="public/img/droits-dauteur.png" alt="copyright" width="4%" height="4%">
                    <p class="copyright">2023copyrightpubg4</p>
                </div>
            </div>
        </footer>
    </div>
    <script src="public/js/main.js" type="module"></script>
</body>

</html>