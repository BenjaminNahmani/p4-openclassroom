<?= $header?>

<section class="articles">

    <div class="container_article">


            <div class="card">
                <div class="card-body">

                    <h5 class="card-title"><a href="/billet?id=<?= $billet->getId()?>"><?= $billet->getName() ?></a></h5>
                    <p class="card-text"><?= $billet->getText()?></p>

                </div>
            </div>

            <h2 id="com_zone_title"> Zone des commentaires</h2>

            <?php foreach ($billet->getCommentaires() as $com):?>

            <div class="com_wrapper border">
                <div class="card com_card" id="com_card_<?= $billet->getId()?>">
                    <div class="card-body">
                    <span class="text-secondary mr-3"><?= $com->getNom()." ".$com->getPrenom()?></span> 
                    <p class="card-text"><?= $com->getText()?></p>
                        <div>
                            
                            <button data-id="<?= $com->getId()?>" class="btn btn-danger signal"><i class="fas fa-exclamation-triangle"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <?php endforeach;?>

    </div>

</section>

<section class="form_com">
    <form action="/commentaire/create" method="POST">

        <input type="hidden" name="billet" value="<?=$billet->getId()?>" />

        <div class="form-group">
            <label for="exampleFormControlInput1">Nom <span class="text-danger"> *</span></label>
            <input name="nom" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Votre nom" required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Prénom <span class="text-danger"> *</span></label>
            <input name="prenom" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Votre prénom" required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Commentaire <span class="text-danger"> *</span></label>
            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ecrivez votre commentaire ici" required></textarea>
        </div>
            
        <div class="btn-submit">
            <input class="btn btn-primary" type="submit" value="Envoyer">
        </div>
    </form>
</section>

<?= $footer?>
