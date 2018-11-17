# Sprint 2

## Tasks

Les tasks sont catégoriées en deux types (Design et Implementation). Le coût est donné en jours-homme nécessaires à la réalisation d'une task spécifique. Les dépendances référencent l'ensemble des tasks nécessaires à la réalisation d'une task spécifique; par exemple, une dépendence à **Ad** signifie que la task en question ne peut être réalisée qu'une fois la task de Design de A ait été faite.

| ID | Type | Description | Cost | Dependence | Issue |
|----|------|-------------|------|------------|-------|
| **General** |             |      |            |       |
|  B | Implementation | Implémenter le fichier **query.php** permettant de réaliser l’ensemble des requêtes relatives à la gestion d'issues : création, modification, suppression d'une issue.| 2 | Ad Bd | |
|  C | Implementation | Implémenter le formulaire **issue-form.php** permattant d'ajouter une nouvelle issue à un backlog . | 1.5 | Bd Cd | |
|  D | Implementation | Implémenter la page **backlog.php** permettant de visualiser la liste des issues existantes d’un backlog + offrant la possibilité de modifier/supprimer une issue à l'aide de deux boutons distincs. | 2 | Bd Cd Dd | |
| **Tests** |             |      |            |       |
| 1 | Design | Design du test : visualisation d’un backlog. | 0.5 | | 8 |
| 1 | Implementation | Implémentation du test : visualisation d’un backlog | 0.5 | Di 1d | 8 |
| 2 | Design | Design du test : modification d’une issue. | 0.5 | | 10 |
| 2 | Implementation | Implémentation du test : modification d’une issue. | 0.5 | Ai Bi Ci Di 2d | 10 |
| 3 | Design | Design du test : suppression d’une issue. | 0.5 | | 10 |
| 3 | Implementation | Implémentation du test : suppression d’une issue. | 0.5 | Ai Bi Ci Di 3d | 10 |
| 4 | Design | Design du test : ajouter une issue. | 0.5 | | 9 |
| 4 | Implementation | Implémentation du test : ajouter une issue. | 0.5 | Ai Bi Ci Di 4d | 9 |

# Kanban

| ID | TODO | DOING | DONE |
|----|------|-------|------|
| Ad |      |       |    x |
| Ai |      |       |    x |
| Bd |      |       |    x |
| Bi |      |     x |      |
| Cd |      |       |    x |
| Ci |      |     x |      |
| Dd |      |       |    x |
| Di |      |     x |      |
| 1d |    x |       |      |
| 1i |    x |       |      |
| 2d |    x |       |      |
| 2i |    x |       |      |
| 3d |    x |       |      |
| 3i |    x |       |      |
| 4d |    x |       |      |
| 4i |    x |       |      |
