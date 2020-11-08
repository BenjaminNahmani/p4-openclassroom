<?php
include_once "../menu/menu.php";
?>

<form method="post">
    <input type="text" name="text" class="form-control" placeholder="Mon commentaire..." value="<?php echo $com->getText()?>"/>

    <input type="hidden" name="id" value="<?php echo $_GET["id"]?>">

    <input type="hidden" name="billet" value="<?php echo $com->getBillet()?>">

    <input type="submit" name="submit" class="btn btn-success"/>

</form>
</body>
</html>