<?php
include_once "vue/menu/menu.php";
?>

<form method="post">
    <input type="text" name="name" class="form-control" placeholder="Nom" value='<?php echo $data["billet"]->getName(); ?>'/>

    <textarea id="htmlEditor" name="text" placeholder="Contenu"><?php echo $data["billet"]->getText(); ?></textarea>

    <input type='hidden' name='id' value='<?php echo $data["billet"]->getId(); ?>'/>

    <input type="submit" name="submit" class="btn btn-success"/>

</form>
</body>
</html>