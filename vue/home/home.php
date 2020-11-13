<?=$header?>

    <section id="main_pic">
        <div class="wrapper">
            <div class="content">
                <h1>Aller simple en Alaska</h1>
                <p class=subtitle>Un roman sur l'Alaska</p>
            </div>
        </div>


        <div class="container card_home">


                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title"><a href="/billet?id=<?= $billet->getId()?>"><?= $billet->getName() ?></a></h5>
                        <p class="card-text"><?= $billet->getExcerptText($billet->getText())?></p>
                        <p class="card-text card-text-right"><a href="/billet?id=<?= $billet->getId()?>">Lire la suite</a></p>

                    </div>
                </div>


        </div>
    </section>



<?=$footer?>
