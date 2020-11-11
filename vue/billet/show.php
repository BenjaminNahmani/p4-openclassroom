<?= $header?>

<section class="articles">

    <div class="container_article">


            <div class="card">
                <div class="card-body">

                    <h5 class="card-title"><a href="/billet?id=<?= $billet->getId()?>"><?= $billet->getName() ?></a></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text"><?= $billet->getText()?></p>
                    <button id="new-comment"  class="btn btn-primary"><i class="fas fa-comment-dots"></i></button>
                    <button id="view_comment" class="btn btn-primary btn-comOn" data-commentaires-id="#com_card_<?= $billet->getId()?>"><i class="far fa-eye"></i></button>

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

    </div>

        <?php foreach ($billet->getCommentaires() as $com):?>

            <div class="card com_card" id="com_card_<?= $billet->getId()?>">
                <div class="card-body">
                    <p class="card-text"><?= $com->getText()?></p>

                    <button id="signal" data-id="<?= $com->getId()?>" class="btn btn-danger"><i class="fas fa-exclamation-triangle"></i></button>
                </div>
            </div>
        <?php endforeach;?>

    <!-- form pour laisser com -->
    </section>

<?= $footer?>
