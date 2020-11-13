<?php
include_once "vue/menu/menu.php";
?>

<h2>Liste des Commmentaire pour le billet <?= $billet->getName() ?></h2>

<!--<a class="btn btn-success" href="create?id=<?= $billet->getId() ?>">créer un Commentaire</a>-->

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Contenu</th>
        <th scope="col">Signalé</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($coms as $com):?>

        <tr>
            <td><?= $com->getId() ?></td>
            <td><?= $com->getNom() ?></td>
            <td><?= $com->getPrenom() ?></td>
            <td><?= $com->getText() ?></td>
            <td><?= $com->getSignaler()==true?"Oui":"Non"; ?></td>
            <td>
                <a href="update?id=<?= $com->getId() ?>" class="btn btn-warning text-light"><i class="fa fa-edit"></i></a>
                <a href="delete?id=<?= $com->getId() ?>&billet=<?= $billet->getId() ?>" class="btn btn-danger text-light"><i class="fa fa-trash"></i></a>
            </td>
        </tr>

    <?php endforeach;?>
    </tbody>
</table>
</body>
</html>
