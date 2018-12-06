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

### Issues

| id | description | cost | priority | project(fk Projects(id)) |
|----|-------------|------------|-------------|----------------|
| INT UNSIGNED NOT NULL | TEXT NON NULL | INT | INT | INT UNSIGNED NOT NULL |

### Developpeurs

| id |     username      |        email      |     password      |
|----|-------------------|-------------------|-------------------|
| INT UNSIGNED NOT NULL | TINYTEXT NON NULL | TEXT(64) NOT NULL | TINYTEXT NON NULL |

### Projects

| id |     name      |        sprintLenght      |    description      |
|----|-------------------|-------------------|-------------------|
| INT UNSIGNED NOT NULL | TEXT(64) NON NULL | INT NOT NULL | TEXT |

### Travailler

| id | project(fk Projects(id)) | developpeur(fk Developpeurs(id)) |
|----|---------|-------------|
| INT UNSIGNED NOT NULL | INT UNSIGNED NOT NULL | INT UNSIGNED NOT NULL |

### Coding style

## PHP

```
<?php
/**
 * My comment.
 */
function foo()
{

}
>
```

