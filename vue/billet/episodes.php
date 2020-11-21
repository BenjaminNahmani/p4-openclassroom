<?= $header ?>

<div class="title_pages">
    <h1>Retrouvez l'intégralité du roman ici</h1>
</div>
  
<table class="table">
    <tbody>
        <?php foreach ($billet as $b):?>
        <tr>

            <td class="table_episode"><a href="/billet?id=<?= $b->getId()?>"><?= $b->getName() ?></a></td>
            <td class="card-text content-billet" data-toggle="modal" data-target="#exampleModal"><?= $b->getExcerptText($b->getText())?></td>
        </tr>
    </tbody>
<!-- 
        <div class="card">
            <div class="card-body">

                <h5 class="card-title card_episode"><a href="/billet?id=<?= $b->getId()?>"><?= $b->getName() ?></a></h5>
                <p class="card-text card_episode"><?= $b->getExcerptText($b->getText())?></p>
                <p class="card-text card-text-right card_episode"><a href="/billet?id=<?= $b->getId()?>">Lire la suite</a></p>

            </div>
        </div> -->

    <?php endforeach;?>
</table>


<?= $footer ?>