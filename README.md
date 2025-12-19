# BlaBlApp
Application de chat sur télephone

# BlaBlApp API
Environnement de développement backend utilisant Docker, PHP 8.x et PostgreSQL.

## Installation et Lancement

### Lancer l'environnement
A la racine du repo :
```bash
docker compose up -d
```
Pour actualiser le container :
```bash
docker compose up -d --build
```

Si composer.json manquant
```bash
docker compose exec backend composer init
```

Commande composer
```bash
docker compose exec backend composer require <nom-du-package>
docker compose exec backend composer update
docker compose exec backend composer install
```

Url de l'api :
>http://localhost:6004/

Url de Adminer pour gérer la BDD :
>http://localhost:8978/
