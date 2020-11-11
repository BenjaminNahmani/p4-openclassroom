<?=$header?>

    <section id="main_pic">
        <div class="wrapper">
            <div class="content">
                <h1>Aller simple en Alaska</h1>
                <p class=subtitle>Un roman sur l'Alaska</p>
            </div>
        </div>
    </section>

<div class="container">

    <?php foreach ($billets as $billet):?>

        <div class="card">
            <div class="card-body">

                <h5 class="card-title"><a href="/billet?id=<?= $billet->getId()?>"><?= $billet->getName() ?></a></h5>
                <p class="card-text"><?= $billet->getExcerptText($billet->getText())?></p>
                <p class="card-text card-text-right"><a href="/billet?id=<?= $billet->getId()?>">Lire la suite</a></p>

            </div>
        </div>

        <?php foreach ($billet->getCommentaires() as $com):?>

                <div class="card com_card" id="com_card_<?= $billet->getId()?>">
                    <div class="card-body">
                        <p class="card-text"><?= $com->getText()?></p>

                        <button id="signal" data-id="<?= $com->getId()?>" class="btn btn-danger"><i class="fas fa-exclamation-triangle"></i></button>
                    </div>
                </div>
        <?php endforeach;?>

    <?php endforeach;?>
</div>



<?=$footer?>
