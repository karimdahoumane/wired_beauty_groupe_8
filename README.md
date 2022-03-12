# Hackathon GES Groupe 8 : Wired Beauty

Ce projet a été réalisé dans le cadre du hackaton du groupe GES en mars 2022.
## Requirements

- Docker (~> 20.10): <https://docs.docker.com/engine/install/>
- Docker Compose (>= 3.5): <https://docs.docker.com/compose/install/>
- Git (~> 2.31): <https://git-scm.com/downloads>
- GNU Make: <https://www.gnu.org/software/make/>

## Installation 

In the ``api/`` & ``client/`` directories, you'll notice there are files called `.env.example`.
For each directory, copy that file into another one called ``.env``.

Once that is done, open a terminal and run ``make init``.
This will initialize your development environment and install everything you need to make the project work.

The project will be up and running. Refer to the following endpoints to know which one is associated to which tech stack.
Don't forget to create an admin user and a regular user by going to the Strapi endpoint.

Very important: you'll want to enable the access to articles to unauthenticated users: to do so, go to ```http://localhost:1337/admin/settings/users-permissions/roles```, go to the Public role and check the `find` and `findone` permissions on Articles and Categories, and save. Repeat the same step for the Authenticated role.

## Tech Stack (français)

Pour ce projet, nous avons choisi la tech stack suivante:

- [Laravel](https://laravel.com/)
  - Endpoint: http://localhost:8000/api
  - Description: Le framework utilisé pour des opérations lourdes telles que le traitement des fichiers Excel & l'inscription à la newsletter.
- [Strapi](https://strapi.io) 
  - Endpoint : http://locahost:1337/admin
  - Description: Un CMS entièrement personnalisable et user-friendly, permettant aux admins de Wired Beauty de créer des ressources personnalisées, comme des articles, des pages ou des comptes clients qui auront la permission d'accéder au back-office.
- [NuxtJS](https://nuxtjs.org/) 
  - Endpoint : http://localhost
  - Description: Le côté client de l'application, imbriquant le site vitrine et le back-office.

Cette stack est très orientée micro-service et peut être très facilement étendue avec de nouvelles features ou services. De plus, l'application mobile peut également facilement interroger les autres services pour gagner en fonctionnalité.

## Comment reprendre le projet ?
Ce projet n'est clairement pas terminé (et ne le sera jamais), mais il est tout à fait possible de reprendre le projet afin de le terminer.

### Newsletter

Remplissez dans le ```.env``` les valeurs de `MAILCHIMP_LIST_ID` et `MAILCHIMP_APIKEY`.

Pour plus d'infos: 
- https://us10.admin.mailchimp.com/account/api-key-popup/.
- http://kb.mailchimp.com/lists/managing-subscribers/find-your-list-id

D'ici là il est possible de jeter un œil au début de notre implémentation dans le dossier `api/app/Http/Controllers/NewsletterController.php` et la route qui lui est associée dans `api/routes/api.php`.

### Pages

Le modèle a été implémenté côté Strapi mais non côté Nuxt. Il suffit de créer dynamiquement des routes en se basant sur le résultat de ``this.$strapi.find('pages')``.

### Blog

Une partie blog a été débutée côté Strapi et client, mais pour le moment, une simple liste d'articles apparait sur une page.
Des changements côté layout et logique d'interaction seraient à prévoir

### Google analytics

La création d'un id Google analytics est nécessaire. Cet id est à renseigner dans le ```.env```.

### Déploiement

L'application fonctionnant en microservices, et le client souhaitant cibler le marché asiatique, nous vous conseillons de déployer sur Alibaba Cloud. Voici quelques suggestions concernant le déploiement en production de l'application:

1. Pour la base de données, utiliser [ApsaraDB RDS for Postgres](https://www.alibabacloud.com/product/apsaradb-for-rds-postgresql)
2. Pour Strapi, Nuxt.JS et Laravel, utiliser chacune une instance de [ECS](https://www.alibabacloud.com/product/ecs), un serveur distant avec accès administrateur pour le configurer à votre guise.

Pour le côté ECS, afin d'héberger et de rendre disponible au monde entier chaque service nous recommandons d'utiliser [NGINX](https://nginx.org/), un serveur web optimisé pour prendre en charge un grand nombre concurrent d'utilisateurs.

Des ébauches de configuration NGINX sont disponibles dans le dossier `.docker`, dans les dossiers `node`, `php` et `strapi` respectivement.

## Parcours utilisateur

On assume que le client a rempli un formulaire de contact.
Une fois le contact établi, le super-administrateur créé l'utilisateur dans la base de donnée à partir des données fournies par le client.
Le client s'authentifie. Il arrive sur le dashboard où il pourra visualiser toutes les dataviz stockées.

En tant que client, une fois authentifié, je peux déposer un fichier de données. (cependant, la partie upload n'a pas été implémentée côté client.)
Après importation et traitement du fichier par le serveur, celui-ci génère une dataviz qui nous permet de visualiser les données.
Dans notre exemple (fichier Excel utilisé), le graphe représente l'efficacité du produit SKC (basé sur le score Anti-oxydant) testé sur 50 personnes sur une période de temps donnée.
Deux courbes y sont tracées, l'une représente les mesures sur la zone où le produit a été appliqué, l'autre sur la zone où le produit n'aurait pas été appliqué.

