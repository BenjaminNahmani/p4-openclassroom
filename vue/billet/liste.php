<?= $headerAdmin?>


<a class="btn btn-create" href="/admin/billet/create?id=">Créer un Billet</a>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Contenu</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($billets as $b):?>

        <tr>
            <td><?= $b->getId() ?></td>
            <td><?= $b->getName() ?></td>
            <td class="card-text content-billet" data-toggle="modal" data-target="#exampleModal"><?= $b->getExcerptText($b->getText())?></p>
            <td>
                <a href="/admin/commentaire/liste?id=<?= $b->getId() ?>" class="btn btn-info text-light"><i class="fa fa-list fa-admin"></i></a>
                <a href="update?id=<?= $b->getId() ?>" class="btn btn-warning text-light"><i class="fa fa-edit fa-admin"></i></a>
                <a href="delete?id=<?= $b->getId() ?>" class="btn btn-danger text-light" id="delete"><i class="fa fa-trash fa-admin"></i></a>
            </td>
        </tr>

    <?php endforeach;?>
    </tbody>
</table>

<?= $footer?>
<script src="../../vue/billet/js/liste.js"></script>
<script src="../../vue/billet/js/delete.js"></script>
</body>
</html>

