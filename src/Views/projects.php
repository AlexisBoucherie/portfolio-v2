<!-- HEAD + NAV -->
<?php $pageTitle = 'Réalisations' ?>

<?php
include 'includes/header.php';
require '../src/Models/Project.php';
?>

<!-- PAGE CONTENT -->
<?php
// Pour générer du contenu
$projectArray = [
    $project1 = new Project(
        'CV en ligne',
        '/assets/img/cv-rpg.png',
        "Ce projet de CV décalé m'a permis d'allier deux passions : le jeu de rôle et le codage. Il s'agit ici d'un CV qui s'inspire du design des feuilles de personnage, style Donjons & Dragons. Il présente un design plutôt simple construit avec grid et flexbox.",
        'https://alexis-boucherie-cv.herokuapp.com/'),
    $project2 = new Project(
        'Wizards - JS Dice Game',
        '/assets/img/js-dice-game.png',
        "Ce jeu de dés, réalisé en JavaSript Vanilla et pensé mobile first, fait s'affronter deux joueurs qui incarnent des mages. Le premier qui élimine son adversaire a gagné ! Ce projet m'a -entre autres- permis de m'entraîner à maîtriser le DOM.",
        'http://js-dice-game-wizard-battle.herokuapp.com/'),
    $project3 = new Project(
        'Random Map generator',
        '/assets/img/random-map.png',
        "Ce projet réalisé essentiellement en PHP est un générateur aléatoire de cartes. L'utilisateur choisit les dimensions de la carte, les types de terrains voulus, et le tour est joué !",
        'https://random-map-gen.herokuapp.com/')
]
?>

<main>
    <div class="achievements" id="achievements">
        <h3>Mes réalisations</h3>
        <p class="aster">* cliquez sur l'image d'un projet pour y accéder directement</p>
        <div class="container">
            <?php foreach ($projectArray as $project): ?>
                <div class="project box">
                    <h4><?= $project->getProjectName(); ?></h4>
                    <a href="<?= $project->getProjectURL() ?>">
                        <img src="<?= $project->getProjectImg(); ?>" class="project-pic pic1" alt="Project picture">
                    </a>
                    <p><?= $project->getProjectDescription(); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<!-- FOOTER -->
<?php include 'includes/footer.php'; ?>