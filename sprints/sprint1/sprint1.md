# Sprint 1

Les tasks sont catégoriées en deux types (Design et Implementation). Le coût est donné en jours-homme nécessaires à la réalisation d'une task spécifique. Les dépendances référencent l'ensemble des tasks nécessaires à la réalisation d'une task spécifique; par exemple, une dépendence à **Ad** signifie que la task en question ne peut être réalisée qu'une fois la task de Design de A ait été faite.

| ID | Type | Description | Cost | Dependence | Issue |
|----|------|-------------|------|------------|-------|
| Tasks |------|-------------|------|------------|-------|
|  A | Design | Design de la base de données permettant de stocker un backlog (plusieurs Issues). | 0.5 | | |
|  A | Implementation | Réaliser la base de données permettant de stocker un backlog (plusieurs Issues). | 1.5 | Ad | |
|  B | Design | Design de l’ensemble des requêtes permettant l'utilisation de la base de données. | 0.5 | | |
|  B | Implementation | Implémenter l’ensemble des requêtes permettant l'utilisation de la base de données. | 2 | Ad Bd | |
|  C | Design | Design du formulaire permettant d’ajouter une nouvelle issue (ID, Description, priorité, difficulté) à un backlog | 0.5 | | |
|  C | Implementation | Implémentation du formulaire permattant d'ajouter une nouvelle issue. | 1.5 | Bd Cd | |
|  D | Design | Design de la page permettant de visualiser la liste des issues existantes d’un backlog + modifier une issue + supprimer une issue. | 0.5 | | |
|  D | Implementation | Implémenter la page permettant de visualiser la liste des issues existantes d’un backlog + modifier/supprimer une issue | 2 | Bd Cd Dd | |
| Tests |------|-------------|------|------------|-------|
| 1 | Design | Design du test : visualisation d’un backlog. | 0.5 | | 8 |
| 1 | Implementation | Implémentation du test : visualisation d’un backlog | 0.5 | Di 1d | 8 |
| 2 | Design | Design du test : modification d’une issue. | 0.5 | | 8 |
| 2 | Implementation | Implémentation du test : modification d’une issue. | 0.5 | Ai Bi Ci Di 2d | 8 |
| 3 | Design | Design du test : suppression d’une issue. | 0.5 | | 8 |
| 3 | Implementation | Implémentation du test : suppression d’une issue. | 0.5 | Ai Bi Ci Di 3d | 8 |
| 4 | Design | Design du test : ajouter une issue. | 0.5 | | 8 |
| 4 | Implementation | Implémentation du test : ajouter une issue. | 0.5 | Ai Bi Ci Di 4d | 8 |

# Kanban

| ID | TODO | DOING | DONE |
|----|------|-------|------|
| Ad |    x |       |      |
| Ai |    x |       |      |
| Bd |    x |       |      |
| Bi |    x |       |      |
| Cd |    x |       |      |
| Ci |    x |       |      |
| Dd |    x |       |      |
| Di |    x |       |      |
| 1d |    x |       |      |
| 1i |    x |       |      |
| 2d |    x |       |      |
| 2i |    x |       |      |
| 3d |    x |       |      |
| 3i |    x |       |      |
| 4d |    x |       |      |
| 4i |    x |       |      |
