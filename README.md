# evaluation_php_poo

## 1. Initialiser GIT
- J'initialise git dans le projet pour pouvoir garder une sauvegarde de l'application et la versionner si besoin.

## 2. Initialiser Composer
- J'initialise composer dans le projet, je complète le questionnaire et n'utilise pas de dépendances pour ce cas.

- Dans le fichier de configuration de Composer: 'composer.json',
    - Je renomme la 'psr-4' en App pour donner un namespace plus court aux classes du dossier '/src'.
    - Je rajoute un 'role' dans "author"
    - Je rajoute une 'config' pour l'optimisation de l'autoloader.

- Je lutte contre les failles de sécurité en créant un dossier public dans lequel je crée un fichier index.php
    - Afin d'empecher l'utilisateur d'accéder aux autre fichier, je définie index.php comme seul point d'entrée de mon application
    - Pour cela, je crée le fichier .htaccess et j'y implemente les commandes de redirections.

- Dans le dossier '/src', je crée mes dossiers Classes et Interfaces.

- Je crée un fichier dans lequel instancier les classes (/public/index.php)
    - Je charge l'autoloader de Composer
    - Je développe mon application (création de classes, implémentation d'interface, visualisation dans le navigateur)


