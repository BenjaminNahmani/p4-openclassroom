<?php
include_once "vue/menu/menu.php";
?>

<form method="post">

    <textarea id="htmlEditor" name="text" placeholder="Contenu"><?php echo $com->getText()?></textarea>

    <input type="hidden" name="id" value="<?php echo $_GET["id"]?>">

    <input type="hidden" name="billet" value="<?php echo $com->getBillet()?>">

    <input type="submit" name="submit" class="btn btn-success"/>

</form>
</body>
</html>