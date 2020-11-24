<?= $headerAdmin?>


<form method="post">
<p class="text-danger"><?= $error?></p>
    <input type="text" name="name" class="form-control" placeholder="Nom" max="255" value='<?= $billet->getName(); ?>'/>

    <textarea id="htmlEditor" name="text" placeholder="Contenu" ><?= $billet->getText()?></textarea>

    <input type='hidden' name='id' value='<?= $billet->getId(); ?>'/>

    <input type="submit" name="submit" class="btn btn-success"/>

</form>

<?= $footer?>
</body>
</html>