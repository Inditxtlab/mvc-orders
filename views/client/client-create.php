<?php require_once __DIR__ . '/../templates/header.php'; ?>

<h2 class="mb-4">Ajouter un nouveau client</h2>

<form action="?action=store_client" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Nom :</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email :</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="telephone" class="form-label">Telephone:</label>
        <input type="text" class="form-control" id="telephone" name="telephone" required>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

<a href="?action=list_client" class="btn btn-secondary">Retour à la liste</a>

<?php require_once __DIR__ . '/../templates/footer.php'; 