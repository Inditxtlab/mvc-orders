<?php require_once __DIR__ . '/../templates/header.php'; ?>

<h2 class="mb-4">information de client</h2>

<p><strong>Nom : </strong> <?= $client->getName() ?></p>
<p><strong>Email : </strong> <?= $client->getEmail() ?></p>
<p><strong>Telephone : </strong> <?= $client->getTelephone() ?></p>
<p><strong>Créée le : </strong> <?= $client->getDate_creation() ?></p>
<p><strong>Dernière mise à jour : </strong> <?= $client->getDate_modif() ?></p>

<?php if (!empty($orders)): ?>

<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Statut</th>
            <th>Créé le</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($orders as $order): ?>

        <tr>

            <td><?= $order->getId(); ?></td>
            <td><a href="?action=view_order&id=<?= $order->getId() ?>"><?= $order->getTitle(); ?></a></td>
            <td><?= $order->getStatus(); ?></td>
            <td><?= $order->getCreatedAt() ?></td>
            <td>
                <a href="?action=view_order&id=<?= $order->getId() ?>" class="btn btn-primary btn-sm" style="border-radius: 5px; font-weight: bold;">Voir</a>
                <a href="?action=edit_order&id=<?= $order->getId() ?>" class="btn btn-warning btn-sm" style="border-radius: 5px; font-weight: bold;">Modifier</a>
                <a onclick="return confirm('T’es sûr ?');" href="?action=delete_order&id=<?= $order->getId() ?>" class="btn btn-dark btn-sm" style="border-radius: 5px; font-weight: bold; color: #fff;">supprimer</a>
            </td>

        </tr>

        <?php endforeach; ?>
    </tbody>
</table>
<?php else: ?>

    <p><strong>Aucune commande pour ce client</strong></p>

<?php endif; ?>

<a href="?action=edit_client&id=<?= $client->getId() ?>" class="btn btn-warning">Modifier les information</a>
<a href="?" class="btn btn-secondary">Retour à l'accueil</a>

<?php require_once __DIR__ . '/../templates/footer.php'; 