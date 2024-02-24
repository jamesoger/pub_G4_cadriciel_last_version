<?php if (isset($_GET["infos_requises"])) : ?>
    <p class="msg erreur infos">
        <span class="material-icons">
            info
        </span>
        Toutes les informations sont requises!
    </p>
<?php endif; ?>

<?php if (isset($_GET["succes_ajout"])) : ?>
    <p class="msg succes">
        <span class="material-icons">
            info
        </span>
        Le plat a été ajouté avec succès!
    </p>
<?php endif; ?>

<?php if (isset($_GET["echec_ajout"])) : ?>
    <p class="msg erreur">
        <span class="material-icons">
            info
        </span>
        Le plat n'a pas pu être crée...
    </p>
<?php endif; ?>

<?php if (isset($_GET["echec_suppression"])) : ?>
    <p class="msg erreur">
        <span class="material-icons">
            info
        </span>
        Le plat n'a pas pu être supprimé...
    </p>
<?php endif; ?>

<?php if (isset($_GET["succes_suppression"])) : ?>
    <p class="msg succes">
        <span class="material-icons">
            info
        </span>
        Le plat a été supprimé!
    </p>
<?php endif; ?>


<?php if (isset($_GET["aucun_droit"])) : ?>
    <p class="msg erreur">
        <span class="material-icons">
            info
        </span>
        Vous n'avez pas les autorisations pour accéder à cette page.
    </p>
<?php endif; ?>

<?php if (isset($_GET["succes_connexion"])) : ?>
    <p class="msg succes">
        <span class="material-icons">
            info
        </span>
        Vous êtes connecté!
    </p>
<?php endif; ?>
<?php if (isset($_GET["succes_modification"])) : ?>
    <p class="msg succes">
        <span class="material-icons">
            info
        </span>
        Le plat a été modifié!
    </p>
<?php endif; ?>
<?php if (isset($_GET["echec_modification"])) : ?>
    <p class="msg erreur">
        <span class="material-icons">
            info
        </span>
        Le plat n'a pas pu être modifié, veuillez réessayez plus tard.
    </p>
<?php endif; ?>

<?php if (isset($_GET["succes_suppression_mot_clef"])) : ?>
    <p class="msg succes">
        <span class="material-icons">
            info
        </span>
        Le mot-clef a été supprimé!
    </p>
<?php endif; ?>
<?php if (isset($_GET["echec_suppression_mot_clef"])) : ?>
    <p class="msg erreur">
        <span class="material-icons">
            info
        </span>
        Le mot clef n'a pas pu être supprimé, veuillez réessayez plus tard.
    </p>
<?php endif; ?>

<?php if (isset($_GET["succes_ajout_mot_clef"])) : ?>
    <p class="msg succes">
        <span class="material-icons">
            info
        </span>
        Le mot-clef a été ajouté!
    </p>
<?php endif; ?>
<?php if (isset($_GET["echec_ajout_mot_clef"])) : ?>
    <p class="msg erreur">
        <span class="material-icons">
            info
        </span>
        Le mot clef n'a pas pu être ajouté, veuillez réessayez plus tard.
    </p>
<?php endif; ?>

<?php if (isset($_GET["infos_requises_clef"])) : ?>
    <p class="msg erreur">
        <span class="material-icons">
            info
        </span>
        Veuillez remplir le champ de texte
    </p>
<?php endif; ?>

<?php if (isset($_GET["un_seul_champ"])) : ?>
    <p class="msg erreur">
        <span class="material-icons">
            info
        </span>
        Vous devez remplir soit un régime ou un mot-clef, vous ne pouvez pas sélectionner les 2.
    </p>
<?php endif; ?>


<?php if (isset($_GET["pas_chiffre"])) : ?>
    <p class="msg erreur">
        <span class="material-icons">
            info
        </span>
        Vous devez entrer un chiffre pour le prix svp.
    </p>
<?php endif; ?>

