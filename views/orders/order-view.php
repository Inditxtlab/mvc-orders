<?php require_once __DIR__ . '/../templates/header.php'; ?>

<h2 class="mb-4">information de la commande</h2>

<h3>Commande passée par : <?= $client->getName() ?></h3>

<a href="?action=view_client&id=<?= $client->getId() ?>">Voir le client</a>

<p><strong>Titre : </strong> <?= $order->getTitle() ?></p>
<p><strong>Status : </strong> <?= $order->getStatus() ?></p>
<p><strong>Créée le : </strong> <?= $order->getCreatedAt() ?></p>
<p><strong>Dernière mise à jour : </strong> <?= $order->getUpdateAt() ?></p>

<a href="?action=edit_order&id=<?= $order->getId() ?>" class="btn btn-warning">Modifier les information</a>
<a href="?" class="btn btn-secondary">Retour à l'accueil</a>

<?php require_once __DIR__ . '/../templates/footer.php'; 