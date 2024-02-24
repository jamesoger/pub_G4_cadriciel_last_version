<?php if (isset($_GET["mdp_incorrect"])) : ?>
    <p class="msg erreur infos">
        <span class="material-icons">
            info
        </span>
        Informations invalides, veuillez recommencer svp.
    </p>
<?php endif; ?>

<?php if (isset($_GET["echec_modification"])) : ?>
    <p class="msg erreur infos">
        <span class="material-icons">
            info
        </span>
        La modification a échouée, veuillez réessayez plus tard.
    </p>
<?php endif; ?>


<?php if (isset($_GET["infos_absentes"])) : ?>
    <p class="msg erreur">
        <span class="material-icons">
            info
        </span>
        Il manque des informations, veuillez remplir tous les champs svp.
    </p>
<?php endif; ?>

<?php if (isset($_GET["succes_modification"])) : ?>
    <p class="msg succes">
        <span class="material-icons">
            info
        </span>
        La modification a été réalisée avec succès!
    </p>
<?php endif; ?> 