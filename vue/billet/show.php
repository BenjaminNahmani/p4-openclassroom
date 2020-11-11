<?= $header?>

<section class="articles">

    <div class="container_article">


            <div class="card">
                <div class="card-body">

                    <h5 class="card-title"><a href="/billet?id=<?= $billet->getId()?>"><?= $billet->getName() ?></a></h5>
                    <p class="card-text"><?= $billet->getText()?></p>

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

    </section>

<section class="form_com">
    <form>

        <div class="form-group">
            <label for="exampleFormControlInput1">Nom</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Votre nom">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Prénom</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Commentaire</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ecrivez votre commentaire ici"></textarea>
        </div>
            
        <div class="btn-submit">
            <input class="btn btn-primary" type="submit" value="Envoyer">
        </div>
    </form>
</section>

<?= $footer?>
