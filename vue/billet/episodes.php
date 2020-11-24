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

    <?php endforeach;?>
</table>


<?= $footer ?>