CREATE TABLE IF NOT EXISTS `scrum`.`Travailler` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
    `project` INT UNSIGNED NOT NULL ,
    `developpeur` INT UNSIGNED NOT NULL ,
    PRIMARY KEY(`id`),
    CONSTRAINT fk_projet
        FOREIGN KEY (project)
        REFERENCES Projects(id) ,
    CONSTRAINT fk_dev
        FOREIGN KEY (developpeur)
        REFERENCES Developpeurs(id)
);
