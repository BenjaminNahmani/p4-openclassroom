<?= $headerAdmin?>

<form method="post">
<p class="text-danger"><?= $error?></p>
    <input type="text" name="name" class="form-control" placeholder="Nom" required/>

    <textarea id="htmlEditor" name="text" placeholder="Contenu" ></textarea>

    <input type="submit" name="submit" class="btn btn-success" />

</form>
<?= $footer?>
</body>
</html>