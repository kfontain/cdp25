<?php include 'query.php';
    $bdd = new PDO('mysql:host=mysql:3306;dbname=scrum', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Projects (name, sprintLenght, description)
    VALUES ('test', '8', 'description test')";
    $bdd->query($sql);
?>
<?php include 'backlog.php'; ?>
