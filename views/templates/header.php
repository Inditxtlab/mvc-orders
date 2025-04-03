<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des commandes clients</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        /* Couleur beige pour la navbar */
        .navbar {
            background-color: beige !important; /* Définit la couleur beige */
        }
        .navbar .nav-link {
            color: #000 !important; /* Liens en noir */
        }
        .navbar .nav-link:hover {
            color: #555 !important; /* Couleur au survol */
        }
        .table thead {
            background-color: beige !important; /* Définit la couleur beige */
        }
        .table thead th {
            color: #000 !important; /* Texte noir pour l'en-tête */
        }
         /* Couleur des lignes */
         .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9; /* Couleur claire pour les lignes impaires */
        }
        .table-striped tbody tr:nth-of-type(even) {
            background-color: #fff; /* Couleur blanche pour les lignes paires */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="?">Gestionnaire de commandes clients</a>
            <div class="" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="?">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=create"> Nouvelle commandes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5"></div>