<?php require_once __DIR__ . '/templates/header.php'; ?>


<h2 class="mb-4">Liste des clients</h2>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Créé le</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($clients as $client): ?>

            <tr>

                <td><?= $client->getId(); ?></td>
                <td><a href="?action=view_client&id=<?= $client->getId() ?>"><?= $client->getName(); ?></a></td>
                <td><?= $client->getEmail(); ?></td>
                <td><?= $client->getTelephone(); ?></td>
                <td><?= $client->getDate_creation() ?></td>
                <td>
                    <a href="?action=view_client&id=<?= $client->getId() ?>" class="btn btn-primary btn-sm" style="border-radius: 5px; font-weight: bold;">Voir</a>
                    <a href="?action=edit_client&id=<?= $client->getId() ?>" class="btn btn-warning btn-sm" style="border-radius: 5px; font-weight: bold;">Modifier</a>
                    <a onclick="return confirm('Tu es en train de supprimer');" href="?action=delete_client&id=<?= $client->getId() ?>" class="btn btn-dark btn-sm" style="border-radius: 5px; font-weight: bold; color: #fff;">Supprimer</a>

                </td>

            </tr>

        <?php endforeach; ?>

    </tbody>
</table>

<hr>

<h2 class="mb-4">Liste de Commandes</h2>
<br>
<table class="table table-striped table-bordered">
    <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Status</th>
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

<?php require_once __DIR__ . '/templates/footer.php';
