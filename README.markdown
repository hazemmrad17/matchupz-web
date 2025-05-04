# Matchupz

![Project Logo](logo.png)

Matchupz est une application web complète conçue pour enrichir l'expérience des passionnés de football avec une capacité de navigation hors ligne. Construite avec le framework Symfony, elle offre une plateforme robuste pour gérer les clubs, les joueurs, les matchs et plus encore, avec un tableau de bord intuitif et des templates personnalisables.

## Fonctionnalités

- **Expérience de Navigation Hors Ligne** : Permet aux utilisateurs de naviguer dans l'application sans connexion internet.
- **Gestion des Clubs** : Gère efficacement les clubs de football et leurs données associées.
- **Gestion des Joueurs** : Suit les profils des joueurs, leurs performances et leurs formations.
- **Système d'Abonnement** : Gère les abonnements et adhésions des utilisateurs de manière fluide.
- **Gestion des Matchs** : Planifie et examine les matchs avec des insights détaillés.
- **Templates Personnalisables** : Utilise les templates Twig pour adapter l'apparence de l'application.
- **Analyse des Performances** : Affiche des métriques détaillées sur les performances et les évaluations de la condition physique.
- **Sections Utilisateurs et Staff** : Espaces dédiés à la gestion des utilisateurs et aux opérations du personnel technique.

## Structure du Projet

### Répertoires Clés

- **`.idea`** : Contient les fichiers de configuration d'IntelliJ IDEA.
- **`.vscode`** : Stocke les paramètres de Visual Studio Code.
- **`assets`** : Contient les ressources statiques comme les images, les fichiers CSS et JavaScript.
- **`bin`** : Inclut les binaires exécutables pour les commandes Symfony.
- **`config`** : Contient les fichiers de configuration de l'application Symfony.
- **`data`** : Stocke les fichiers de données, potentiellement incluant des données d'exemple ou des téléchargements.
- **`fonts`** : Gère les fichiers de polices personnalisés utilisés dans l'application.
- **`football_analysis-master`** : Répertoire pour les outils ou scripts d'analyse de football.
- **`front`** : Contient les fichiers et configurations liés au frontend.
- **`html`** : Stocke les fichiers HTML bruts ou les templates.
- **`js`** : Fichiers JavaScript pour la fonctionnalité dynamique.
- **`libs`** : Bibliothèques tierces intégrées au projet.
- **`migrations`** : Scripts de migration Doctrine pour les modifications de la base de données.
- **`node_modules`** : Dépendances Node.js gérées par npm ou yarn.
- **`public`** : Fichiers accessibles publiquement, incluant le point d'entrée (index.php).
- **`scripts`** : Scripts personnalisés pour l'automatisation ou le déploiement.
- **`scss`** : Fichiers Sass pour le style de l'application.
- **`src`** : Logique principale de l'application, incluant les contrôleurs, entités et services.
- **`tasks`** : Fichiers ou configurations spécifiques aux tâches.
- **`templates`** : Templates Twig pour le rendu du frontend.
- **`test-mailer`** : Fichiers liés aux tests ou à la configuration des e-mails.
- **`tests`** : Tests unitaires et fonctionnels de l'application.
- **`translations`** : Fichiers de traduction pour le support multi-langues.
- **`var`** : Fichiers temporaires, cache et logs.
- **`vendor`** : Dépendances PHP gérées par Composer.
- **`venv`** : Environnement virtuel pour les dépendances Python.

### Fichiers Notables

- **`.env`** : Variables d'environnement pour la configuration.
- **`composer.json` et `composer.lock`** : Définissent et verrouillent les dépendances PHP.
- **`importmap.php`** : Gère les imports de modules JavaScript.
- **`index.html`** : Point d'entrée HTML principal de l'application web.
- **`package.json` et `package-lock.json`** : Définissent et verrouillent les dépendances JavaScript.
- **`symfony.lock`** : Verrouille les dépendances spécifiques à Symfony.
- **`webpack.config.js`** : Configuration pour le bundling Webpack.

## Installation

1. Clonez le dépôt :
   ```bash
   git clone https://github.com/votre-utilisateur/matchupz.git
   cd matchupz
   ```

2. Installez les dépendances PHP avec Composer :
   ```bash
   composer install
   ```

3. Installez les dépendances JavaScript avec npm ou yarn :
   ```bash
   npm install
   # ou
   yarn install
   ```

4. Configurez la base de données :
   ```bash
   php bin/console doctrine:database:create
   php bin/console doctrine:migrations:migrate
   ```

5. Démarrez le serveur de développement :
   ```bash
   php bin/console server:run
   ```

   Accédez à l'application dans votre navigateur à l'adresse `http://localhost:8000`.

## Utilisation

- Personnalisez l'apparence en modifiant les templates dans le répertoire `templates/`.
- Gérez l'application avec les commandes CLI Symfony :
  - Exécuter les tests : `php bin/phpunit`
  - Vider le cache : `php bin/console cache:clear`