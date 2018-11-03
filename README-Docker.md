# Commandes de Docker

## Exécuter l'application
```
docker-compose up [-d]
```
On peut utiliser l'option `-d` pour l'exécuter en arrière-plan.

## Arrêter l'application
```
docker-compose down
```
Si l'application s'exécute en premier plan, on peut également l'arrêter en
utilisant `Ctrl-C`.

## Détruire les données de l'application
```
docker-compose down -v
```
