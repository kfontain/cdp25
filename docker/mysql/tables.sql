CREATE TABLE IF NOT EXISTS `scrum`.`Projects` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` TEXT(64) NOT NULL ,
    `sprintLenght` INT NOT NULL,
    `description` TEXT,
    PRIMARY KEY(`id`),
    UNIQUE `ind_email` (`name`(64))
);

CREATE TABLE IF NOT EXISTS `scrum`.`Developpeurs` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
    `username` TINYTEXT NOT NULL ,
    `email` TEXT(64) NOT NULL ,
    `password` TINYTEXT NOT NULL ,
    PRIMARY KEY(id),
    UNIQUE `ind_username` (`username`(32)),
    UNIQUE `ind_email` (`email`(64))
);

CREATE TABLE IF NOT EXISTS `scrum`.`Issues` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `description` TEXT NOT NULL,
    `cost` INT,
    `priority` INT,
    `project` INT UNSIGNED NOT NULL,
    PRIMARY KEY (`id`),
    CONSTRAINT fk_backlog
        FOREIGN KEY (project)
        REFERENCES Projects(id)
);

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
