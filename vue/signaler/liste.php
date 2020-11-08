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
            <td><?php echo $com->getId() ?></td>
            <td><?php echo $com->getText() ?></td>
            <td><?php echo $com->getBillet()->getName() ?></td>
            <td>
                <a href="/admin/commentaire/update?id=<?php echo $com->getId() ?>" class="btn btn-warning text-light"><i class="fa fa-edit"></i></a>
                <a href="/admin/commentaire/delete?id=<?php echo $com->getId() ?>" class="btn btn-danger text-light"><i class="fa fa-trash"></i></a>
            </td>
        </tr>

    <?php endforeach;?>
    </tbody>
</table>
</body>
</html>
