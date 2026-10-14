# Mini Site Builder

Génère, à partir d'un formulaire, une **carte de visite** numérique pour une entreprise, exportée en site statique déployable sur n'importe quel hébergeur.

C'est un *lead magnet* : l'entreprise qui remplit le formulaire (le **lead**) ne crée pas de compte et ne peut pas éditer sa carte elle-même — toute modification passe par un contact direct avec vous. Le but est d'inciter le lead à faire appel à vos services, pas de vendre un palier payant du produit.

Pour le vocabulaire précis du projet (carte de visite, cible du QR code, site statique, lead), voir [`CONTEXT.md`](CONTEXT.md).

## Parcours fonctionnel

1. Le lead remplit le formulaire public (`/`) : entreprise ou prénom/nom, coordonnées, réseaux sociaux, logo, couleur d'accent, cible du QR code (vCard ou site web).
2. Un captcha Altcha (auto-hébergé, sans service tiers) protège le formulaire contre les soumissions automatiques.
3. La carte est créée en statut **en attente**. Deux emails partent : un à l'admin (nouvelle carte à valider) et un au lead (confirmation de la demande).
4. Depuis l'espace admin (`/admin`, authentification requise), vous **approuvez** la carte : ça génère les fichiers statiques (`public/c/{slug}/index.html`, `contact.vcf`, QR code, logo) et envoie un email de publication au lead avec un export zip des fichiers.
5. La carte est accessible publiquement à `votredomaine.com/c/{slug}`.
6. Le lead peut demander la suppression de sa carte à tout moment (`/supprimer-ma-carte`), via un lien signé envoyé par email.

## Stack technique

- **Laravel 13** (PHP 8.3+), déployé avec **FrankenPHP** (Caddy intégré, pas de HTTPS géré par le conteneur).
- **MariaDB** en local (conteneur Docker), **OVH Web Cloud Databases** (MySQL/MariaDB managé, connexion TLS) en production.
- **Tailwind CSS** + **Vite** pour les assets.
- **Altcha** (`grantholle/laravel-altcha`) pour le captcha du formulaire public, sans dépendance à un service externe.
- **BaconQrCode** pour la génération des QR codes (SVG).
- **Mailjet** (SMTP) pour l'envoi des emails transactionnels.

## Démarrage local

Prérequis : Docker et Docker Compose.

```bash
cp .env.example .env
# compléter .env : DB_ROOT_PASSWORD, DB_USERNAME, DB_PASSWORD, ALTCHA_HMAC_KEY, MAIL_*, ADMIN_EMAIL
docker compose -f docker-compose.yml -f docker-compose.dev.yml up --build
```

L'application est disponible sur **http://localhost:8090**. Les migrations tournent automatiquement au démarrage (service `migrate`).

Pour créer un compte admin de test :

```bash
docker compose -f docker-compose.yml -f docker-compose.dev.yml exec app php artisan db:seed --class=UserSeeder
```

Identifiants créés : `admin@exempl.es` / `password` — à usage local uniquement, ne jamais lancer ce seeder en production sans changer le mot de passe aussitôt après.

Si vous modifiez le code pendant que la stack tourne, il faut reconstruire l'image pour que le changement soit pris en compte (le `Dockerfile` copie le code au build, pas de montage en direct) :

```bash
docker compose -f docker-compose.yml -f docker-compose.dev.yml up -d --build
```

## Déploiement production

Le conteneur ne gère pas le HTTPS : un reverse proxy (Apache + Certbot sur le VPS) le fait en amont et transmet les requêtes à `127.0.0.1:8090`.

```bash
docker compose up -d --build
```

Seuls `migrate`, `app` et `scheduler` sont lancés — pas de conteneur base de données, celle-ci est hébergée chez OVH. Le `.env` du serveur doit renseigner `DB_HOST`, `DB_PORT`, `DB_*` et `MYSQL_ATTR_SSL_CA` (chemin vers `docker/certs/ovh-ca.pem`, déjà présent dans l'image). Voir `.env.example` pour le détail des deux configurations (dev/prod).

## Variables d'environnement à connaître

En plus des variables Laravel standard, ce projet ajoute :

| Variable | Rôle |
|---|---|
| `ADMIN_EMAIL` | Destinataire des notifications « nouvelle carte à valider ». |
| `MAIL_FROM_ADDRESS` / `MAIL_FROM_NAME` | Expéditeur unique des emails transactionnels (confirmation, publication, suppression). |
| `ALTCHA_HMAC_KEY` | Clé de signature du captcha Altcha (générer une valeur aléatoire, ne jamais commiter la vraie clé). |
| `DB_ROOT_PASSWORD` | Mot de passe root du conteneur MariaDB de dev uniquement (`docker-compose.dev.yml`). |
| `MYSQL_ATTR_SSL_CA` | Chemin du certificat CA pour la connexion TLS à la base en production ; vide en local. |

## Sauvegardes et nettoyage automatique

- Les cartes **en attente** non approuvées depuis 30 jours sont supprimées automatiquement (`BusinessCard::prunable()`, via `model:prune` planifié dans le `scheduler`).
- Les volumes `cartes` (fichiers publiés) et `logos` ne sont pas encore sauvegardés automatiquement — à mettre en place avant une mise en production durable.
