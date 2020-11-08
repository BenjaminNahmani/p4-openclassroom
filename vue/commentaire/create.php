<?php
include_once "vue/menu/menu.php";
?>

<form method="post">

    <input type="text" name="text" class="form-control" placeholder="Mon commentaire..."/>

    <input type="hidden" name="billet" value="<?php echo $_GET["id"]?>">

    <input type="submit" name="submit" class="btn btn-success"/>

</form>
</body>
</html>