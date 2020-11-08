<?php
include_once "vue/menu/menu.php";
?>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contenu du billet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modal-content">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermé</button>
            </div> 
        </div>
    </div>
</div>

<a class="btn btn-success" href="create">Créer un Billet</a>

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
    <?php foreach ($data["billets"] as $b):?>

        <tr>
            <td><?php echo $b->getId() ?></td>
            <td><?php echo $b->getName() ?></td>
            <td style="cursor: pointer" data-toggle="modal" data-target="#exampleModal" class="content-billet" data="<?php echo $b->getText()?>"><?php echo strip_tags($b->getText()) ?></td>
            <td>
                <a href="/admin/commentaire/liste?id=<?php echo $b->getId() ?>" class="btn btn-info text-light"><i class="fa fa-list"></i></a>
                <a href="update?id=<?php echo $b->getId() ?>" class="btn btn-warning text-light"><i class="fa fa-edit"></i></a>
                <a href="delete?id=<?php echo $b->getId() ?>" class="btn btn-danger text-light"><i class="fa fa-trash"></i></a>
            </td>
        </tr>

    <?php endforeach;?>
    </tbody>
</table>
<script src="../../vue/billet/js/liste.js"></script>
</body>
</html>

