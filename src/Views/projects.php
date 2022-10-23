<!-- HEAD + NAV -->
<?php include 'includes/header.php'; ?>

<!-- PAGE CONTENT -->
<main>
    <div class="achievements" id="achievements">
        <h3>Mes réalisations</h3>
        <p class="aster">* cliquez sur la photo d'un projet pour y accéder</p>
        <div class="container">
            <div class="project box">
                <h4>CV - Feuille de Personnage</h4>
                <a href="https://alexis-boucherie-cv.herokuapp.com/">
                    <div class="project-pic pic1"></div>
                </a>
                <p>Ce projet réalisé de manière libre était un moyen pour moi d'allier mes deux passions : l'informatique et le jeu de rôle. J'ai alors entrepris de confectionner un Curriculum Vitae qui prendrait la forme d'une feuille de personnage inspirée du jeu Donjons et Dragons.</p>
                <h5>Langages et outils utilisés :</h5>
                <ul>
                    <li>Figma (wireframe et mockup)</li>
                    <li>HTML5</li>
                    <li>CSS3 (grid, flexbox)</li>
                    <li>Media queries</li>
                    <li>Intégration Google Fonts</li>
                    <li>Déploiement : Heroku</li>
                </ul>
            </div>
            <div class="project box">
                <h4>Les Krokettes du Youki</h4>
                <a href="https://leskrokettesduyouki.netlify.app/index.html">
                    <div class="project-pic pic2"></div>
                </a>
                <p>Réalisé dans le cadre d'une toute première évaluation de diplôme, ce projet présente le site d'une association fictive au choix. La consigne ici était de réaliser un site mobile first statique et qui comprenait plusieurs pages, puis de le déployer.</p>
                <h5>Langages et outils utilisés :</h5>
                <ul>
                    <li>HTML5</li>
                    <li>CSS3 (grid, flexbox)</li>
                    <li>Media queries</li>
                    <li>Page événement</li>
                    <li>Formulaire (HTML seul)</li>
                    <li>Déploiement : Netlify</li>
                </ul>
            </div>
            <div class="project box">
                <h4>Service à la Personne, Vars</h4>
                <a href="https://service-personne-16.herokuapp.com/">
                    <div class="project-pic pic3"></div>
                </a>
                <p>Ce site responsif a été réalisé en concertation avec un particulier en autoentreprise. Il s'agit d'un site vitrine qui permet de faire la promotion des services réalisés par Service Personne Vars et qui permet aux client de contacter l'entreprise.</p>
                <h5>Langages et outils utilisés :</h5>
                <ul>
                    <li>Figma (wireframe et mockup)</li>
                    <li>HTML5</li>
                    <li>CSS3 (grid, flexbox)</li>
                    <li>Media queries</li>
                    <li>Formulaire de contact</li>
                    <li>PHP ($_POST)</li>
                    <li>Déploiement : Heroku</li>
                </ul>
            </div>
            <!-- <div class="project box">
                <h4>JS Simple Calculator</h4>
                <a href="tools/js-vanilla-calculator/calculator.html"><div class="project-pic pic4"></div></a>
                <p>Cette calculatrice réalisée en Vanilla JS est un outil simple qui m'a permis de réaliser des opérations simples en terme de manipulation du DOM. Comme axes d'amélioration, on pourrait la rendre mieux responsive, ajouter une touche pour les calculs à virgules et créer des boucles pour rendre le code moins répétitif. Cependant, elle marche très bien en l'état.</p>
                <h5>Langages et outils utilisés :</h5>
                <ul>
                    <li>JavaScript :</li>
                    <ul>
                        <li>selectElementById</li>
                        <li>addEventListener</li>
                        <li>parseInt</li>
                    </ul>
                    <li>Déploiement : via mon portfolio</li>
                </ul>
            </div> -->
            <div class="project box">
                <h4>JS Dice Game</h4>
                <a href="http://js-dice-game-wizard-battle.herokuapp.com/">
                    <div class="project-pic pic5"></div>
                </a>
                <p>Ce petit jeu pour mobile fait s'affronter deux joueurs qui incarnent des magiciens. À chacun de leur tour, les joueurs lancent les dés pour charger leur sort et le lancer sur l'adversaire. Le premier qui élimine son adversaire est le vainqueur. Comme amélioration, il serait possible d'ajouter quelques petites animations, ainsi que des sons et musiques.</p>
                <h5>Langages et outils utilisés :</h5>
                <ul>
                    <li>JavaScript :</li>
                    <ul>
                        <li>getRandomInt</li>
                        <li>getElementById</li>
                        <li>add/removeEventListener</li>
                        <li>switch conditions</li>
                        <li>innerText/HTML</li>
                    </ul>
                    <li>Bootstrap Icons CDN</li>
                    <li>Déploiement : via mon portfolio</li>
                </ul>
            </div>
            <div class="project box">
                <h4>JS ToDo List</h4>
                <a href="tools/js-todo-list/todolist.html">
                    <div class="project-pic pic6"></div>
                </a>
                <p>Cette application Desktop est une todo list qui permet d'ajouter des items, de les marquer comme "checked" ou de les supprimer. Comme axe d'amélioration, il serait possible de pouvoir filtrer les tâches par catégorie et de lier le script à un fichier pour sauvegarder les tâches d'une fois sur l'autre.</p>
                <h5>Langages et outils utilisés :</h5>
                <ul>
                    <li>JavaScript :</li>
                    <ul>
                        <li>querySelector</li>
                        <li>preventDefault</li>
                        <li>add/removeEventListener</li>
                        <li>createElement</li>
                        <li>innerText/HTML</li>
                        <li>classList.add/toggle</li>
                        <li>appendChild</li>
                    </ul>
                    <li>CSS3 (transition, transform)</li>
                    <li>Bootstrap Icons CDN</li>
                    <li>Déploiement : via mon portfolio</li>
                </ul>
            </div>
        </div>
    </div>
</main>

<!-- FOOTER -->
<?php include 'includes/footer.php'; ?>