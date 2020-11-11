<?php
include_once "vue/menu/menu.php";
?>

<h2>Liste des Commmentaires signalé</h2>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Contenu</th>
        <th scope="col">Billet</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($coms as $com):?>

        <tr>
            <td><?= $com->getId() ?></td>
            <td><?= $com->getText() ?></td>
            <td><?= $com->getBillet()->getName() ?></td>
            <td>
                <a href="/admin/commentaire/update?id=<?= $com->getId() ?>" class="btn btn-warning text-light"><i class="fa fa-edit"></i></a>
                <a href="/admin/commentaire/delete?id=<?= $com->getId() ?>" class="btn btn-danger text-light"><i class="fa fa-trash"></i></a>
            </td>
        </tr>

    <?php endforeach;?>
    </tbody>
</table>
</body>
</html>
