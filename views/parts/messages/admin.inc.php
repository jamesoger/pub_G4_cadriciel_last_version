<?php if (isset($_GET["infos_requises"])) : ?>
    <p class="msg erreur">
        <span class="material-icons">
            info
        </span>
        Il manque des informations, veuillez remplir tous les champs.
    </p>
<?php endif; ?> 

<?php if (isset($_GET["infos_invalides"])) : ?>
    <p class="msg erreur">
        <span class="material-icons">
            info
        </span>
        Informations invalides. veuillez recommencer svp.
    </p>
<?php endif; ?> 

