<?php if (isset($_GET["attention"])) : ?>
    <div class="attention">
        <p>Attention! En supprimant un mot-clef, vous supprimez le mot-clef associé au plat, il faudra donc modifier le plat et ajouter un nouveau mot-clef s'il y a lieu.</p>
        <a href="supprimer-mot-clef?id=<?= $_GET["attention"] ?>">Confirmer la suppression</a>
    </div>
<?php endif; ?>
