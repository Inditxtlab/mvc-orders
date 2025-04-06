
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des commandes clients</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Commandes</title>
    <style>
        /* Style personnalisé pour le titre */
        h2 {
            color: #4A4E69; /* Gris bleuté */
            font-weight: bold;
        }

    </style>
</head>
<body> 
    <h1>
        <a class="navbar-brand" href="?" style="color: #4A4E69; font-size: 2rem; text-decoration: none; font-weight: bold;">
        🏙 BatiExperts</a>
    </h1>
    <nav class="navbar navbar-expand-lg navbar-light p-3 rounded-5 shadow-sm" style="background-color: #CDB4DB;"> <!-- Lavande pastel -->
    <ul class="navbar-nav d-flex justify-content-center gap-3 w-100">
        <li class="nav-item">
            <a href="?action=index" class="nav-link rounded-5 text-center p-3" id="home-tab" style="color: #4A4E69; font-size: 0.9rem; font-weight: bold;" onmouseover="this.style.backgroundColor='#E4F9F5'" onmouseout="this.style.backgroundColor='transparent'">Accueil</a>
        </li>
        <li class="nav-item">
            <a href="?action=list_client" class="nav-link rounded-5 text-center p-3" id="profile-tab" style="color: #4A4E69; font-size: 0.9rem; font-weight: bold;" onmouseover="this.style.backgroundColor='#E4F9F5'" onmouseout="this.style.backgroundColor='transparent'">Liste de clients</a>
        </li>
        <li class="nav-item">
            <a href="?action=list_order" class="nav-link rounded-5 text-center p-3" id="list-tab" style="color: #4A4E69; font-size: 0.9rem; font-weight: bold;" onmouseover="this.style.backgroundColor='#E4F9F5'" onmouseout="this.style.backgroundColor='transparent'">Liste de commandes</a>
        </li>
        <li class="nav-item">
            <a href="?action=create_client" class="nav-link rounded-5 text-center p-3" id="client-tab" style="color: #4A4E69; font-size: 0.9rem; font-weight: bold;" onmouseover="this.style.backgroundColor='#E4F9F5'" onmouseout="this.style.backgroundColor='transparent'">Nouvel Client</a>
        </li>
        <li class="nav-item">
            <a href="?action=create_order" class="nav-link rounded-5 text-center p-3" id="commande-tab" style="color: #4A4E69; font-size: 0.9rem; font-weight: bold;" onmouseover="this.style.backgroundColor='#E4F9F5'" onmouseout="this.style.backgroundColor='transparent'">Nouvelle Commande</a>
        </li>
    </ul>
</nav>


<div class="container mt-5">