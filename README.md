## Installation

1. Cloner le dépôt : 
2. Se déplacer dans le répertoire du projet : `cd nom-du-répertoire`
3. Installer les dépendances : `composer install`
4. Copier le fichier `.env.example` et le renommer en `.env`
5. Générer une clé d'application Laravel : `php artisan key:generate`
6. Configurer la base de données dans le fichier `.env`
7. Définir Redis comme pilote de diffusion dans le fichier `.env`, si ce n'est pas déjà le cas
8. Effectuer les migrations : `php artisan migrate`
9. Effectuer un seeding pour enregistrer des données fictives dans la base de données avec la commande : `php artisan db:seed`

## Configuration du projet

1. Installer `laravel-echo-server` avec la commande : `npm install laravel-echo-server`
2. Initialiser `laravel-echo-server` avec la commande : `laravel-echo-server init`
3. Lancer le serveur `laravel-echo-server` en utilisant la commande : `laravel-echo-server start`

4. Lancer le serveur Redis sur votre machine
5. Lancer le serveur de développement avec la commande : `php artisan serve`
6. Lancer `npm run dev`

## Utilisation

1. **Authentification**: Se connecter simplement en cliquant sur le nom de l'utilisateur.
2. **Notifier groupe**: Notifiez les membres du groupe dans lequel vous êtes en cliquant sur le bouton "Notifier groupe" une fois connecté.
3. **Envoyer une notification à un utilisateur**: Utilisez le bouton "Notifier" juste en dessous du nom d'un utilisateur pour lui envoyer une notification en temps réel.
