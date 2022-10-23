<!-- HEAD + NAV -->
<?php
include 'includes/header.php';
require '../src/Models/Project.php';
?>

<!-- PAGE CONTENT -->
<?php
// Pour générer du faux contenu
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
$project1 = new Project('Projet 1', 'https://loremflickr.com/320/240/work', $description);
$project2 = new Project('Projet 2', 'https://loremflickr.com/320/240/videogame', $description);
$project3 = new Project('Projet 3', 'https://loremflickr.com/320/240/computer', $description);
$projectArray = [$project1, $project2, $project3];
?>

<main>
    <div class="achievements" id="achievements">
        <h3>Mes réalisations</h3>
        <p class="aster">* cliquez sur la photo d'un projet pour y accéder</p>
        <div class="container">
            <?php foreach ($projectArray as $project): ?>
                <div class="project box">
                    <h4><?= $project->getProjectName(); ?></h4>
                    <a href="#">
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