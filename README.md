# Gammelle connectee

Le projet a pour but de détecter quand la gamelle d'eau  d'un animal est presque vide et pouvoir actionner une fontaine pour la  remplir.  
Seul la partie détection est traité ici.  
On utilise API Plateform comme base du projet.  

- [Gammelle connectee](#gammelle-connectee)
  - [Installation de l'environnement de travail](#installation-de-l'environnement-de-travail)
  - [Configuration](#configuration)
    - [XBEE](#xbee)
    - [Docker](#docker)

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
