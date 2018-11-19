# Sprint 2

## Tasks

Les tasks sont catégoriées en deux types (Design et Implementation). Le coût est donné en jours-homme nécessaires à la réalisation d'une task spécifique. Les dépendances référencent l'ensemble des tasks nécessaires à la réalisation d'une task spécifique; par exemple, une dépendence à **Ad** signifie que la task en question ne peut être réalisée qu'une fois la task de Design de A ait été faite.

| ID | Description | Cost | Dependence | Issue |
|----|-------------|------|------------|-------|
| **General**      |      |            |       |
|  B | Implémenter le fichier **query.php** permettant de se connecter à la base de données MySQL *scrum.issues* réaliser l’ensemble des requêtes relatives à la gestion d'issues : récuperation de l'ensemble des issues (getIssues()), création (fonction : createIssue(id, description, cost, prio)), modification (modifyIssue(id, description, cost, prio)), suppression d'une issue (deleteIssue(id)).| 2 | Ad Bd | |
|  C | Implémenter le formulaire **issue-form.php** permettant d'ajouter une nouvelle issue à un backlog ou de modifier une issue du backlog. Ce fomulaire comprend différents champs : Description qui est un champ de texte **obligatoire**, Cout de réalisation qui est un champ pouvant uniquement contenir des nombres positifs par pas de 0,5, Priorité qui est un champ qui peut contenir uniquement 4 valeurs différentes ( None, low, medium, high) qui correspond à la priorité de l'issue. Le formulaire comprend 2 boutons : le premier (Submit) qui doit vérifier si le champ *desciription* a été remplie et appelle la fonction *createIssue* du fichier **query.php** dans le cas où il faut ajouter une nouvelle issue (si l'appel à la page n'avais pas de parametre de requete). Appelle la fonction *modifyIssue* du fichier **query.php** dans le cas où l'appel à la page s'est fait avec le paramétre *id=X* où X corresponds à l'id de l'issue à modifier. Le deuxième bouton (*reset*) permets de vider tout les champs. | 1.5 | Bd Cd |  9 |
|  D | Implémenter la page **backlog.php** permettant de visualiser la liste des issues existantes d’un backlog sous forme d'un tableau avec pour entête : ID, Description, Cout de réalisation, priorité. Chaque ligne de ce tableau corresponds à une issue. Offrant la possibilité de modifier/supprimer une issue à l'aide de deux boutons distincts (*modifiy*, *delete*) qui se trouve au bout de chaque ligne pour pouvoir : modifier en appelant **issue-form.php?id=X** où X corresponds à l'id de l'issue, supprimer l'issue correspondant à la ligne en appelant la fonction *deleteIssue(id)* de **query.php**. En bas du tableau, un bouton permettant ajouter une issue (appel **issue-form.php**) | 2 | Bd Cd Dd | 8, 10 |
|  E | Déterminer le nom du fichier php ainsi que les noms de fonctions assurant la gestion des comptes développeurs utilisant l'application. Ajouter ces noms dans le fichier de spécifications. Un visiteur peut créer un compte développeur à partir d'une adresse mail, nom d'utilisateur et un mot de passe. Il y a 3 fonctions différentes : une pour se connecter avec un nom d'utilisateur ainsi qu'un mot de passe, une autre fonction pour se deconnecter et enfin une fonction pour créer un compte (l'envoyer dans la base de données). Implémenter ce fichier. | 2 | | 1 |
|  F | Déterminer le nom du fichier php ainsi que des fonctions permettant à un développeur de créer un nouveau projet à son nom. Spécifier ces noms dans le fichier de spécification. Il existe 3  Implémenter ce fichier et ces fonctions. | 2 | | 4 |
|  F | Déterminer le nom du fichier php qui permettra de se connecter, cette page comportera 2 champs, le premier pour l'username(obligatoire), le deuxieme pour le mot de passe(obligatoire). Un bouton *login* afin de pouvoir se connecter. Un bouton *signup* afin de pouvoir aller sur la page de création de compte. Implémenter cette page. | ? || ? |
|  F | Déterminer le nom du fichier php qui permettra de créer un compte, cette page comportera 3 champs,le premier pour l'adresse mail(obligatoire), la deuxième pour l'username(obligatoire), le troisieme pour le mot de passe(obligatoire). Un bouton *create* afin de pouvoir creer le compte. Un bouton *login* afin de pouvoir aller sur la page de connection. | ? || ? |
|  G | Déterminer le nom de la table SQL ainsi que les champs permettant de stocker un développeur. Renseigner les champs de la table dans le fichier de spécifications. Implémenter ce fichier et ces fonctions. | 1 | | 4 |
|  H | Déterminer le nom de la table SQL ainsi que les champs permettant de stocker un projet. Renseigner les champs de la table dans le fichier de spécifications. Implémenter ce fichier et ces fonctions. | 1 | | 4 |
| **Tests** |             |      |            |       |
| 1 | Test : visualisation d’un backlog. Déterminer le nom du fichier permettant d'effectuer ce test qui se trouvera dans cdp25/app/test. Ajouter le nom de ce fichier de test au fichier de spécification. | 1 | D | 8 |
| 2 | Test : modification d’une issue. Déterminer le nom du fichier permettant d'effectuer ce test qui se trouvera dans cdp25/app/test. | 1 | A, B, C, D | 10 |
| 3 | Test : suppression d’une issue. Déterminer le nom du fichier permettant d'effectuer ce test qui se trouvera dans cdp25/app/test. Ajouter le nom de ce fichier de test au fichier de spécification. | 1 | A, B, C, D | 10 |
| 4 | Test : ajouter une issue. Déterminer le nom du fichier permettant d'effectuer ce test qui se trouvera dans cdp25/app/test. Ajouter le nom de ce fichier de test au fichier de spécification. | 1 | A, B, C, D | 9 |

# Kanban

| ID | TODO | DOING | DONE |
|----|------|-------|------|
| B  |      |     x |      |
| C  |      |     x |      |
| D  |      |     x |      |
| E  |    x |       |      |
| F  |    x |       |      |
| G  |    x |       |      |
| H  |    x |       |      |
| I  |    x |       |      |
| 1d |    x |       |      |
| 1i |    x |       |      |
| 2d |    x |       |      |
| 2i |    x |       |      |
| 3d |    x |       |      |
| 3i |    x |       |      |
| 4d |    x |       |      |
| 4i |    x |       |      |
