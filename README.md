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

Cette stack est très orientée micro-service et peut être très facilement étendue avec de nouvelles features ou services, afin de faciliter le 

## Comment reprendre le projet ?
Ce projet n'est clairement pas terminé (et ne le sera jamais), mais il est tout à fait possible de reprendre le projet afin de le terminer.

### Newsletter

Remplissez dans le ```.env``` les valeurs de `MAILCHIMP_LIST_ID` et `MAILCHIMP_APIKEY`.

Pour plus d'infos: 
- https://us10.admin.mailchimp.com/account/api-key-popup/.
- http://kb.mailchimp.com/lists/managing-subscribers/find-your-list-id

D'ici là il est possible de jeter un œil au début de notre implémentation dans le dossier `api/app/Http/Controllers/NewsletterController.php` et la route qui lui est associée dans `api/routes/api.php`.

### Articles et Pages

Les deux modèles ont été créés côté Strapi mais n'ont pas été implémentés côté Nuxt. Il suffit de récupérer les modèles en utilisant `$strapi.find('nom_modele')`.
Il existe également un système de rôles qui a déjà été implémenté et customizable en tant que super admin.


