<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alexis Boucherie | <?= $pageTitle ?></title>
    <!-- bootstrap icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <!-- nav mobile -->
    <div id="mySidenav" class="sidenav">
        <i id="closeBtn" class="bi bi-x-circle close"></i>
        <ul id="closeAction">
            <li><a href="home"<?php if ($activePage === 'home') { echo " class='active-page'"; } ?>><i class="bi bi-house"></i> Accueil</a></li>
            <li><a href="about"<?php if ($activePage === 'about') { echo " class='active-page'"; } ?>><i class="bi bi-file-earmark-person"></i> À propos</a></li>
            <li><a href="achievements"<?php if ($activePage === 'achievements') { echo " class='active-page'"; } ?>><i class="bi bi-card-checklist"></i> Réalisations</a></li>
            <li><a href="contacts"<?php if ($activePage === 'contacts') { echo " class='active-page'"; } ?>><i class="bi bi-envelope"></i> Contacts</a></li>
        </ul>
    </div>

    <a href="#" id="openBtn">
        <i class="bi bi-list"></i>
    </a>

    <h1><a href="home">Alexis Boucherie</a></h1>

    <!-- nav tablette et desktop -->
    <nav class="highres-nav">
        <ul>
            <li><a href="home"<?php if ($activePage === 'home') { echo " class='active-page'"; } ?>>Accueil</a></li>
            <li><a href="about"<?php if ($activePage === 'about') { echo " class='active-page'"; } ?>>À propos</a></li>
            <li><a href="achievements"<?php if ($activePage === 'achievements') { echo " class='active-page'"; } ?>>Réalisations</a></li>
            <li><a href="contacts"<?php if ($activePage === 'contacts') { echo " class='active-page'"; } ?>>Contacts</a></li>
        </ul>
    </nav>
</header>