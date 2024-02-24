
<?php if (isset($_GET["infos_requises"])) : ?>
     <p class="msg erreur infos">
        <span class="material-icons">
            info
        </span>
         Il manque des informations, veuillez vérifier les champs manquants!
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

<?php if (isset($_GET["echec_modification"])) : ?>
    <p class="msg erreur">
        <span class="material-icons">
             info
        </span>
        Le plat n'a pas pu être modifié, veuillez réessayez plus tard.
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