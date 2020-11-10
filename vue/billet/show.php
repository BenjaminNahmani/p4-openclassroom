<?=$header?>


<?php echo $billet->getName(); ?>

    <?php foreach ($billet->getCommentaires() as $com):?>

        <div class="card com_card" id="com_card_<?= $billet->getId()?>">
            <div class="card-body">
                <p class="card-text"><?= $com->getText()?></p>

                <button id="signal" data-id="<?= $com->getId()?>" class="btn btn-danger"><i class="fas fa-exclamation-triangle"></i></button>
            </div>
        </div>
    <?php endforeach;?>

// form pour laisser com


<?= $footer?>
