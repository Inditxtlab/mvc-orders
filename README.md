# Gestionnaire de commandes clients
## Contexte
La petite entreprise BatiExperts souhaite améliorer son suivi des commandes. Actuellement, les commandes sont gérées sur un carnet, ce qui entraîne erreurs et oublis. L'objectif de cette application est de développer un système permettant de : 
- **Gérer les clients** (nom, email, téléphone)
- **Enregistrer et suivre des commandes** (chaque commande est liée à un client et a un statut : "en attente", "expédiée", "livrée").

### Relation :
Un client peut passer plusieurs commandes
Une commande appartient à un seul client

```
/mvc-orders
|- /controllers
|  |- ClientController.php 
|  |- OrderController.php
|- /lib
|  |- database.php
|- /models
|  |- /repositories
|  |  |- ClientRepository.php
|  |  |- OrderRepository.php
|  |- Client.php
|  |- Order.php
|- /views
|  |- 404.php
|  |- /templates
|  |  |- footer.php
|  |  |- header.php
|  |-/client
|  |  |- client-create.php
|  |  |- client-edit.php
|  |  |- client-list.php
|  |  |- client-view.php
|  |-/orders
|  |  |- order-create.php
|  |  |- order-edit.php
|  |  |- order-list.php
|  |  |- order-view.php
|  |- home.php
|- index.php
|- README.md
```


### Fonctionnalités
- **Clients** : 
- CRUD (ajouter/voir/modifier/supprimer)
- Afficher les commandes pour chaque client

- **Commandes** : 
- est liée à un client
- a un statut ("en attente", "expediée", "livrée")
- un client peut avoir plusieurs commandes
- afficher le client de la commande

### Exemple d'utilisation
1. Un employé.e ajoute un nouveau client
2. Il/elle enregistre une commande pour ce client
3. La commande est affichée avec son statut
4. L'employé.e peut mettre à jour le statut de la commande
5. L'employé.e peut consulter toutes les commandes d'une client donné

### Méthodologie
1. Créer la structure de la base de données avec des données de test
2. Faire le CRUD client
3. Faire le CRUD commande
4. Faire le lien entre client et commande