
<?php if (isset($_GET["infos_absentes"])) : ?>
     <p class="msg erreur infos">
        <span class="material-icons">
            info
        </span>
         Toutes les informations sont requises!
    </p>
<?php endif; ?>

<?php if (isset($_GET["mdp_incorrect"])) : ?>
     <p class="msg erreur infos">
        <span class="material-icons">
            info
        </span>
         Informations invalides, veuillez recommencer svp.
    </p>
<?php endif; ?>

<?php if (isset($_GET["succes_creation_compte"])) : ?>
    <p class="msg succes">
        <span class="material-icons">
            info
        </span>
        L'employé a été ajouté avec succès!
    </p>
<?php endif; ?> 


<?php if (isset($_GET["echec_creation_compte"])) : ?>
    <p class="msg succes">
        <span class="material-icons">
            info
        </span>
        L'employé n'a pas pu être crée, veuillez réessayer plus tard!
    </p>
<?php endif; ?> 
<?php if (isset($_GET["echec_suppression"])) : ?>
    <p class="msg erreur">
        <span class="material-icons">
            info
        </span>
        La modification a été réalisée avec succès!
    </p>
<?php endif; ?> 

<?php if (isset($_GET["succes_suppression"])) : ?>
    <p class="msg succes">
        <span class="material-icons">
            info
        </span>
        L'employé a bien été supprimé!
    </p>
<?php endif; ?> 