<?php require_once __DIR__ . '/../templates/header.php'; ?>

<h2 class="mb-4">Modifier les information</h2>

<form action="?action=update_client" method="POST">
    <input type="hidden" name="id" value="<?= $client->getId() ?>">
    <div class="mb-3">
        <label for="name" class="form-label">Nom :</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= $client->getName() ?>" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email :</label>
        <input class="form-control" id="email" name="email" value="<?= $client->getEmail() ?>" required>
    </div>
    <div class="mb-3">

        <label for="telephone" class="form-label">Telephone:</label>
        <input class="form-control" id="telephone" name="telephone" value="<?= $client->getTelephone() ?>" required>

    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>

<a href="?action=list_client" class="btn btn-secondary">Retour à la liste</a>


<?php require_once __DIR__ . '/../templates/footer.php'; 