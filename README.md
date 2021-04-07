<h1 align="center">Chicken RUN</h1>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## Installation

<ol>
    <li>git clone le repo dans un fichier</li>
    <li>paramétrer les lignes DB_DATABASE="Votre Base De Donnée", DB_USERNAME="votre username de Gestionnaire De Base De Donnée" et DB_PASSWORD="MDP de votre gestionnaire" dans le fichier .env.exemple</li>
    <li>Renommez le fichier ".env"</li>
    <li>faire la commande 'npm install'</li>
    <li>faire 'composer install'</li>
    <li>faire 'npm install node-sass sass-loader --save-dev' pour éviter les erreurs avec SASS</li>
    <li>Faire 'php artisan migrate:fresh --seed' si vous voulez remplir votre base de donnée</li>
    <li>Faire 'php artisan migrate:fresh' si vous voulez une base de donnée vierge</li>
    <li>Créer un compte</li>
</ol>


## A propos

Ce site est réalisé avec le framework Laravel et la librairie Inertial afin d'allier Laravel et VueJS. 

Le site est réalisé en utilisant les fonctionnalité de Laravel, Controllers, Models, Routes etc, ce qui permet un dialogue simple et intuitif avec la base de donnée. Il utilise également le système de vue et de components de VueJS, et emploi pas mal de ses fonctionnalité en AJAX afin de faire marcher le CRUD POST, GET, PUT et DELETE. 

En cliquant sur jouer si vous avez un compte, vous serez amené à une page simple avec une liste. En cliquant sur un des élément de la liste on peut lui ajouter +1 au compteur "steps" si la variable IsRunning est réglée sur true. 

Il est également possible de modifier un élément et de le supprimer. 

Un seeder est également disponible afin de vous permettres de peupler la base de données.