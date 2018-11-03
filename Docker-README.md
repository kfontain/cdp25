# Commandes de Docker

## Construire l'image Docker
```
docker-compose build
```

## Exécuter l'application
```
docker-compose up [-d]
```
On peut utiliser l'option `-d` pour l'exécuter en arrière-plan.

## Arrêter l'application
```
docker-compose stop
```
Si l'application s'exécute en premier plan, on peut également l'arrêter en
utilisant `Ctrl-C`.

## Détruire l'image Docker
```
docker-compose down
```
Dans quelques cas, cette commande ne détruit pas la volume utilisée par MariaDB.
Pour l'instant, il faut la détruire manuellement.
