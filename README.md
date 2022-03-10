# Hackathon GES Groupe 8 : Wired Beauty

## Requirements

- Docker (~> 20.10): <https://docs.docker.com/engine/install/>
- Docker Compose (>= 3.5): <https://docs.docker.com/compose/install/>
- Git (~> 2.31): <https://git-scm.com/downloads>
- GNU Make: <https://www.gnu.org/software/make/>

## Installation

In the ``api/`` & ``client/`` directories, you'll notice there are files called `.env.example`.
For each directory, copy that file into another one called ``.env``.

Once that is done, open a terminal and run ``make init``.
This will init your development environment and install everything you need to run the project.

## Tech Stack (français)

Pour ce projet, nous avons choisi la tech stack suivante:

- [Laravel](https://laravel.com/) : Le framework utilisé pour des opérations lourdes telles que le traitement des fichiers Excel & l'inscription à la newsletter.
- [Strapi](https://strapi.io) : Un CMS entièrement personnalisable et user-friendly, permettant aux admins de Wired Beauty de créer des ressources personnalisées, comme des articles, des pages ou des comptes clients, leur permettant d'accéder au back-office.
- [NuxtJS](https://nuxtjs.org/) : Le côté client de l'application, imbriquant le site vitrine et le back-office.

Cette stack est très orientée micro-service et peut être très facilement étendue avec de nouvelles features ou services.

Ce projet n'est clairement pas terminé (et ne le sera jamais), mais il est tout à fait possible de reprendre le projet afin de le terminer.

### Newsletter

Remplissez dans le ```.env``` les valeurs de `MAILCHIMP_LIST_ID` et `MAILCHIMP_APIKEY`.

Pour plus d'infos: https://us10.admin.mailchimp.com/account/api-key-popup/.

http://kb.mailchimp.com/lists/managing-subscribers/find-your-list-id

