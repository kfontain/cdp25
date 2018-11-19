# Spécifications

## Arborescence

```
cdp25
│   README.md
│   README-INSTALL.md  
|   releases.md
│   Makefile
|   .travis.yml
|   docker-compose.yml
|
└───app
│   │   backlog.php
│   │   index.php
│   │   issue-form.php
|   |   query.php
|   |
│   └───tests
|   
└───sprints
|   └───sprint1
|   |   |   issues1.md
|   |   └───tasks1.md
|   |
|   └───sprint2
|       |   issues1.md
|       └───tasks1.md
|
└───documents
|   └───specs.md
|
└───docker
    |   mysql
    └───php-apache
```
## Architecture

L'application est développée en utilisant les technologies suivantes :
- HTML, CSS, PHP pour le front.
- PHP, mySQL pour le back.

## Definition of Done

Une task est considérée comme étant finie lorsque le procédé de développement ainsi que l'ensemble des tests unitaires pour chacune des fonctionnalités décrites par la task sont réalisés et passants.

## SQL Tables

**Name of database :** scrum

|    | **General** |            |          |        |
| ID | Description | Difficulty | Priority | Sprint |
|----|-------------|------------|----------|--------|
