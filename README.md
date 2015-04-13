# MovieTech

Le but de ce TP était de créer une moviethèque, en stockant des films dans une base de données ou, dans le cas où une recherche ne retourne aucun film, en 
allant cherchant sur un web service.

La recherche dans la base en fonction d'un film choisi, ainsi que l'appel au web service lorsqu'aucun résultat n'était trouvé dans la base, ont tous les deux 
été faits. 

Ce qu'il nous restait à faire, et ce qui n'a pas été fait à cause du manque de connaissances, étaient l'intégration dans la base de données des nouveaux films
trouvés sur le web service, et, le passage du PHP basique au PHP objet. La classe Movie a été créée, mais la gestion des objets à travers les différentes couches
de l'application a été bloquant pour nous.

Néanmoins, du code commenté indique ce que nous avons testé lors des phases de développement.

Les informations de la base de données étaient fourni:
Adresse: 127.0.0.1
Login: root
Mot de passe: 
Nom de base: movieepsi

Le script de création de la base se trouve dans le dossier sous le nom de "ScriptCreationBDD.sql"