<?php require_once __DIR__ . '/../templates/header.php'; ?>

<h2 class="mb-4">Modifier une commande</h2>

<form action="?action=update_order" method="POST">
    <input type="hidden" name="id" value="<?= $order->getId() ?>">
    <div class="mb-3">
        <label for="title" class="form-label">Titre :</label>
        <input type="text" class="form-control" id="title" name="title" value="<?= $order->getTitle() ?>" required>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Statut (en cours / expédiée / livrée) :</label>
        <input type="text" class="form-control" id="status" name="status" value="<?= $order->getStatus() ?>" required>
    </div>
    <div class="mb-3">
        <label for="client_id" class="form-label">Client :</label>
        <select class="form-control" name="client_id" id="client_id">
            <option value="-">- Sélectionnez le client</option>
        <?php foreach ($clients as $client): ?>
            <option <?= $client->getId() === $order->getClientId() ? 'selected' : '' ?> value="<?= $client->getId() ?>"><?= $client->getName() ?></option>
        <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>

<a href="?action=list_order" class="btn btn-secondary">Retour à la liste</a>


<?php require_once __DIR__ . '/../templates/footer.php'; 