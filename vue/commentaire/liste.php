<?php
include_once "vue/menu/menu.php";
?>

<h2>Liste des Commmentaire pour le billet <?php echo $billet->getName() ?></h2>

<a class="btn btn-success" href="create?id=<?php echo $billet->getId() ?>">créer un Commentaire</a>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Contenu</th>
        <th scope="col">Signalé</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($coms as $com):?>

        <tr>
            <td><?php echo $com->getId() ?></td>
            <td><?php echo $com->getText() ?></td>
            <td><?php echo $com->getSignaler()==true?"Oui":"Non"; ?></td>
            <td>
                <a href="update?id=<?php echo $com->getId() ?>" class="btn btn-warning text-light"><i class="fa fa-edit"></i></a>
                <a href="delete?id=<?php echo $com->getId() ?>&billet=<?php echo $billet->getId() ?>" class="btn btn-danger text-light"><i class="fa fa-trash"></i></a>
            </td>
        </tr>

    <?php endforeach;?>
    </tbody>
</table>
</body>
</html>
