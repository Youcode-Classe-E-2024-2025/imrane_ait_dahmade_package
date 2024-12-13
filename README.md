
Gestion des Packages
Description du projet
Ce projet est une application web permettant la gestion de packages et leurs auteurs. Les utilisateurs peuvent :

Ajouter, lister et lire les détails des packages.
Rechercher des packages par différents critères.
Structure des fichiers
Le projet est organisé comme suit :

graphql
Copier le code
_config/
    config.php          # Configuration pour la base de données
    mysql.sql           # Script SQL pour créer et initialiser la base de données
_docs/
    README.md           # Documentation du projet
actions/
    add_package.php     # Script pour ajouter un package
    list_package.php    # Script pour lister les packages
    read_package.php    # Script pour lire les détails d'un package
pages/
    detail.php          # Page de détail d'un package
    home.php            # Page d'accueil
    index.php           # Point d'entrée principal
README.md               # Documentation du projet
Prérequis
Avant de commencer, assurez-vous d’avoir installé :

Serveur local : XAMPP ou WAMP.
Navigateur web : Google Chrome, Firefox, etc.
Éditeur de code : Visual Studio Code ou autre.
Installation
Étape 1 : Cloner le projet
Téléchargez ou clonez ce dépôt dans le répertoire racine du serveur local (par exemple, htdocs pour XAMPP) :

bash
Copier le code
git clone <url_du_projet>
Étape 2 : Configurer la base de données
Ouvrez phpMyAdmin à l’adresse http://localhost/phpmyadmin.
Créez une base de données nommée gestion_packages :
sql
Copier le code
CREATE DATABASE gestion_packages;
Importez le fichier SQL :
Accédez à l’onglet Importer.
Sélectionnez _config/mysql.sql.
Cliquez sur Exécuter.
Étape 3 : Configurer les paramètres
Ouvrez le fichier _config/config.php.
Modifiez les paramètres de connexion à la base de données si nécessaire :
php
Copier le code
$host = 'localhost';
$username = 'root';
$password = ''; // Par défaut pour XAMPP
$dbname = 'gestion_packages';
Lancer le projet
Démarrez le serveur Apache et MySQL via XAMPP.
Ouvrez votre navigateur et accédez au projet :
url
Copier le code
http://localhost/<nom_du_dossier>/pages/index.php
Fonctionnalités principales
Ajouter un package : Accessible via actions/add_package.php.
Lister les packages : Accessible via actions/list_package.php.
Lire les détails d'un package : Accessible via pages/detail.php.
Prochaines étapes
Ajouter des formulaires pour modifier ou supprimer des packages.
Intégrer un moteur de recherche par mots-clés.

