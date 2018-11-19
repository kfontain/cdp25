# Sprint 2

## Tasks

Les tasks sont catégoriées en deux types (Design et Implementation). Le coût est donné en jours-homme nécessaires à la réalisation d'une task spécifique. Les dépendances référencent l'ensemble des tasks nécessaires à la réalisation d'une task spécifique; par exemple, une dépendence à **Ad** signifie que la task en question ne peut être réalisée qu'une fois la task de Design de A ait été faite.

| ID | Description | Cost | Dependence | Issue |
|----|-------------|------|------------|-------|
| **General**      |      |            |       |
|  B | Implémenter le fichier **query.php** permettant de se connecter à la base de données MySQL *scrum.issues* réaliser l’ensemble des requêtes relatives à la gestion d'issues : récuperation de l'ensemble des issues (getIssues()), création (fonction : createIssue(id, description, cost, prio)), modification (modifyIssue(id, description, cost, prio)), suppression d'une issue (deleteIssue(id)).| 2 | Ad Bd | |
|  C | Implémenter le formulaire **issue-form.php** permettant d'ajouter une nouvelle issue à un backlog ou de modifier une issue du backlog. Ce fomulaire comprend différents champs : Description qui est un champ de texte **obligatoire**, Cout de réalisation qui est un champ pouvant uniquement contenir des nombres positifs par pas de 0,5, Priorité qui est un champ qui peut contenir uniquement 4 valeurs différentes ( None, low, medium, high) qui correspond à la priorité de l'issue. Le formulaire comprend 2 boutons : le premier (Submit) qui doit vérifier si le champ *desciription* a été remplie et appelle la fonction *createIssue* du fichier **query.php** dans le cas où il faut ajouter une nouvelle issue (si l'appel à la page n'avais pas de parametre de requete). Appelle la fonction *modifyIssue* du fichier **query.php** dans le cas où l'appel à la page s'est fait avec le paramétre *id=X* où X corresponds à l'id de l'issue à modifier. Le deuxième bouton (*reset*) permets de vider tout les champs. | 1.5 | Bd Cd |  9 |
|  D | Implémenter la page **backlog.php** permettant de visualiser la liste des issues existantes d’un backlog sous forme d'un tableau avec pour entête : ID, Description, Cout de réalisation, priorité. Chaque ligne de ce tableau corresponds à une issue. Offrant la possibilité de modifier/supprimer une issue à l'aide de deux boutons distincts (*modifiy*, *delete*) qui se trouve au bout de chaque ligne pour pouvoir : modifier en appelant **issue-form.php?id=X** où X corresponds à l'id de l'issue, supprimer l'issue correspondant à la ligne en appelant la fonction *deleteIssue(id)* de **query.php**. En bas du tableau, un bouton permettant ajouter une issue (appel **issue-form.php**) | 2 | Bd Cd Dd | 8, 10 |
|  E | Déterminer le nom du fichier php ainsi que les noms de fonctions assurant la gestion des comptes développeurs utilisant l'application. Ajouter ces noms dans le fichier de spécifications. Un visiteur peut créer un compte développeur à partir d'une adresse mail, nom d'utilisateur et un mot de passe. Implémenter ce fichier. | 2 | | 1 |
|  F | Déterminer le nom de la fonction permettant à un développeur de se déconnecter de l'application. Spécifier ces noms dans le fichier de spécifications. Cette fonction se trouvera dans le même fichier que le fichier assurant la gestion des utilisateur (Task E). Implémenter ce fichier ainsi que ces fonctions. | 2 |  | 2 |
|  G | Déterminer le nom du fichier php ainsi que des fonctions permettant à un développeur de créer un nouveau projet à son nom. Spécifier ces noms dans le fichier de spécification. Implémenter ce fichier et ces fonctions. | 2 | | 4 |
| **Tests** |             |      |            |       |
| 1 | Design du test : visualisation d’un backlog. | 0.5 | | 8 |
| 1 | Implémentation du test : visualisation d’un backlog | 0.5 | Di 1d | 8 |
| 2 | Design du test : modification d’une issue. | 0.5 | | 10 |
| 2 | Implémentation du test : modification d’une issue. | 0.5 | Ai Bi Ci Di 2d | 10 |
| 3 | Design du test : suppression d’une issue. | 0.5 | | 10 |
| 3 | Implémentation du test : suppression d’une issue. | 0.5 | Ai Bi Ci Di 3d | 10 |
| 4 | Design du test : ajouter une issue. | 0.5 | | 9 |
| 4 | Implémentation du test : ajouter une issue. | 0.5 | Ai Bi Ci Di 4d | 9 |

# Kanban

| ID | TODO | DOING | DONE |
|----|------|-------|------|
| B  |      |     x |      |
| C  |      |     x |      |
| D  |      |     x |      |
| E  |    x |       |      |
| F  |    x |       |      |
| G  |    x |       |      |
| 1d |    x |       |      |
| 1i |    x |       |      |
| 2d |    x |       |      |
| 2i |    x |       |      |
| 3d |    x |       |      |
| 3i |    x |       |      |
| 4d |    x |       |      |
| 4i |    x |       |      |
