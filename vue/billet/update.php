<?= $headerAdmin?>

<form method="post">
    <input type="text" name="name" class="form-control" placeholder="Nom" value='<?= $billet->getName(); ?>'/>

    <textarea id="htmlEditor" name="text" placeholder="Contenu"><?= $billet->getText()?></textarea>

    <input type='hidden' name='id' value='<?= $billet->getId(); ?>'/>

    <input type="submit" name="submit" class="btn btn-success"/>

</form>

<?= $footer?>
</body>
</html>