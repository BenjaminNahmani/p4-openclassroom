<?=$header?>

    <div class="container container_login">
        <form method="POST">
            <input type="text" class="form-control" name="user" placeholder="identifiant" required>
            <input type="password" class="form-control" name="pwd" placeholder="Mot de passe" required>
            <input type="submit" name="submit" value="Valider" class="btn btn-success">
        </form>
    </div>

<?= $footer?>

