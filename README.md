# Gammelle connectee

Le projet a pour but de détecter quand la gamelle d'eau  d'un animal est presque vide et pouvoir actionner une fontaine pour la  remplir.  
Seul la partie détection est traité ici.  
On utilise API Plateform comme base du projet.  

- [Gammelle connectee](#gammelle-connectee)
  - [Installation de l'environnement de travail](#installation-de-l'environnement-de-travail)
  - [Configuration](#configuration)
    - [XBEE](#xbee)
    - [Docker](#docker)
    - [Database](#database)
    - [Socket Node.Js](#socket-nodejs)
    - [Generation Client](#generation-client)

## Installation de l'environnement de travail

Installer  

- Docker,  
- XCTU,  
- Visual Studio Code ou tout autre ide web,  

Et clone le projet en local  
ATTENTION : Docker for Windows seulement pour Windows 10 Pro, pour Windows 10 Family il faut utiliser Docker Tool Box  

## Configuration

### XBEE

On utilise XCTU pour configurer les XBEE (connecté en USB) qui transmette les infos du capteur  

PROBLEMES :  

- Les Xbee ne pouvaient pas être configurées pour certain PC, il fallait télécharger le Driver (CP210x USB to UART Bridge VCP Drivers) manuellement  
- Changement de carte Xbee car défaillante  
- Difficultés à transmettre les informations du router vers le contrôleur car
  - Difficultés à configurer les cartes (/!\ METTRE A JOUR LE DRIVER)
  - Faux contacts créés par la connectique des cartes

### Docker

Lors du lancement de Docker, il faut entrer dans les parametres du logiciel et partager les dossiers C : et D : pour l’authentification : entrer le login et le mdp de la session du PC

Lancement des containers :  

``` docker
docker-compose build
docker-compose up
```

### Database

Dans le fichier docker-compose.yml verifié la ligne de volume de la database.

Changement d'un volume Linux en volume Windows :
Pas de permissions sur des fichiers dans le volume créé, changer le volume en décommentant  

``` docker-compose.yml
db-data:/var/lib/postgresql/data:rw
```

et en commentant

``` docker-compose.yml
dsq./api/docker/db/data:/var/lib/postgresql/data:rw 
```

Pour generer les tables depuis le code php il faut se connecter au container php et executer les commandes :  

``` terminal
docker-compose exec php sh
bin/console make :entity
bin/console doctrine :schema :update --force
```

bin/console make :entity : créer des models en php

### Socket Node.JS

Attention le port COM ne doit pas être utilisé pour pouvoir lancer le socket.  
Il faut se deplacer dans le dossier socket et lancer les commande suivantes (le socket ne fonctionne pas dans les containers)

``` terminal
cd .\socket\
npm install
npm start
```

### Generation Client

Le client peut etre generer et de divers type, ici nous avons pris un client React.  
Le client a deja été genere et se trouve dnas le dossier Client.  

```terminal
docker-compose exec client generate-api-platform-client
```

Dasn le container pour voir les modif il faut redemarrer a chaque fois le container client ou le lancer en local pour pouvoir profiter du hot reload.  
