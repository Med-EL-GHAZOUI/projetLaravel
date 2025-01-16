<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Gestion Devoir V3

## Introduction

Bienvenue dans le projet Gestion Devoir V3. Ce projet est une application Laravel conçue pour gérer les devoirs des étudiants. Elle permet aux enseignants de créer, distribuer et évaluer les devoirs, tandis que les étudiants peuvent soumettre leurs travaux et recevoir des commentaires.

L'application offre les fonctionnalités suivantes :
- Création et gestion des devoirs
- Soumission des devoirs par les étudiants
- Évaluation et notation des devoirs par les enseignants
- Notifications et rappels pour les échéances

Nous espérons que cette application facilitera la gestion des devoirs et améliorera l'expérience éducative pour les enseignants et les étudiants.

## Cahier des Charges

### Objectif

Le projet Gestion Devoir V3 a pour objectif de fournir une plateforme en ligne pour la gestion des devoirs des étudiants. Cette application permettra aux enseignants de créer, distribuer et évaluer les devoirs, et aux étudiants de soumettre leurs travaux et recevoir des commentaires.

### Fonctionnalités

1. **Gestion des Devoirs**
   - Création de devoirs avec des instructions détaillées et des dates d'échéance.
   - Modification et suppression des devoirs existants.
   - Attribution des devoirs à des classes ou groupes spécifiques.

2. **Soumission des Devoirs**
   - Interface pour les étudiants pour soumettre leurs devoirs en ligne.
   - Possibilité de télécharger des fichiers en tant que soumission.
   - Confirmation de la soumission avec un accusé de réception.

3. **Évaluation et Notation**
   - Interface pour les enseignants pour évaluer et noter les devoirs soumis.
   - Ajout de commentaires et de feedback pour chaque soumission.
   - Notification des étudiants une fois les devoirs évalués.

4. **Notifications et Rappels**
   - Envoi de notifications aux étudiants pour les dates d'échéance des devoirs.
   - Rappels automatiques pour les devoirs non soumis avant la date limite.
   - Notifications aux enseignants pour les devoirs soumis en attente d'évaluation.

### Technologies Utilisées

- **Backend**: Laravel Framework
- **Frontend**: Blade Templates, Vue.js
- **Base de Données**: MySQL
- **Serveur**: Apache (XAMPP)

### Exigences Non Fonctionnelles

- **Sécurité**: Authentification et autorisation des utilisateurs.
- **Performance**: Temps de réponse rapide pour les opérations courantes.
- **Scalabilité**: Capacité à gérer un grand nombre d'utilisateurs simultanés.
- **Accessibilité**: Interface utilisateur accessible et facile à utiliser.

### Déploiement

- **Environnement de Développement**: XAMPP sur Windows
- **Environnement de Production**: Serveur Linux avec Apache, MySQL, et PHP

### Maintenance

- **Documentation**: Documentation complète du code et des fonctionnalités.
- **Support**: Support technique pour les utilisateurs finaux.
- **Mises à Jour**: Mises à jour régulières pour corriger les bugs et ajouter de nouvelles fonctionnalités.

## Conception

### Architecture

L'application Gestion Devoir V3 est basée sur une architecture MVC (Modèle-Vue-Contrôleur) fournie par le framework Laravel. Cette architecture permet de séparer les préoccupations et de faciliter la maintenance et l'évolution de l'application.

### Modèle

Les modèles représentent les entités de l'application et sont responsables de l'interaction avec la base de données. Les principaux modèles de l'application sont :

- **User** : représente les utilisateurs de l'application (enseignants et étudiants).
- **Devoir** : représente les devoirs créés par les enseignants.
- **Soumission** : représente les soumissions de devoirs par les étudiants.
- **Evaluation** : représente les évaluations et les notes attribuées par les enseignants.

### Vue

Les vues sont responsables de l'affichage des données à l'utilisateur. L'application utilise les Blade Templates de Laravel pour générer les vues. Les principales vues de l'application sont :

- **Dashboard** : tableau de bord pour les enseignants et les étudiants.
- **Devoirs** : liste des devoirs créés par les enseignants.
- **Soumissions** : interface pour les étudiants pour soumettre leurs devoirs.
- **Evaluations** : interface pour les enseignants pour évaluer les devoirs soumis.

### Contrôleur

Les contrôleurs gèrent la logique de l'application et les interactions entre les modèles et les vues. Les principaux contrôleurs de l'application sont :

- **UserController** : gère les opérations liées aux utilisateurs.
- **DevoirController** : gère les opérations liées aux devoirs.
- **SoumissionController** : gère les opérations liées aux soumissions de devoirs.
- **EvaluationController** : gère les opérations liées aux évaluations et aux notes.

### Base de Données

La base de données de l'application est conçue pour stocker les informations relatives aux utilisateurs, aux devoirs, aux soumissions et aux évaluations. Les principales tables de la base de données sont :

- **users** : stocke les informations des utilisateurs.
- **devoirs** : stocke les informations des devoirs.
- **soumissions** : stocke les informations des soumissions de devoirs.
- **evaluations** : stocke les informations des évaluations et des notes.

### Diagramme de Classe

Voici un diagramme de classe simplifié pour l'application :

```
+----------------+       +----------------+       +----------------+
|     User       |       |    Devoir      |       |  Soumission    |
+----------------+       +----------------+       +----------------+
| - id           |       | - id           |       | - id           |
| - name         |       | - titre        |       | - devoir_id    |
| - email        |       | - description  |       | - user_id      |
| - password     |       | - date_echeance|       | - fichier      |
+----------------+       +----------------+       +----------------+
        |                        |                        |
        |                        |                        |
        |                        |                        |
        +------------------------+------------------------+
                                 |
                                 |
                                 |
                         +----------------+
                         |   Evaluation   |
                         +----------------+
                         | - id           |
                         | - soumission_id|
                         | - note         |
                         | - commentaire  |
                         +----------------+
```

### Sécurité

L'application utilise les fonctionnalités d'authentification et d'autorisation de Laravel pour sécuriser l'accès aux différentes parties de l'application. Les utilisateurs doivent se connecter pour accéder à leurs tableaux de bord respectifs et effectuer des actions spécifiques en fonction de leurs rôles (enseignant ou étudiant).

### Tests

Des tests unitaires et fonctionnels sont mis en place pour garantir la qualité et la fiabilité de l'application. Laravel fournit des outils de test intégrés qui facilitent l'écriture et l'exécution des tests.

### Déploiement

L'application est déployée sur un serveur Linux avec Apache, MySQL et PHP. Le processus de déploiement inclut la configuration du serveur, le déploiement du code, la migration de la base de données et la configuration des tâches planifiées pour les notifications et les rappels.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
