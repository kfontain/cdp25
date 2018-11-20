CREATE TABLE `scrum`.`projects` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` TINYTEXT NOT NULL ,
    `sprintLenght` INT NOT NULL,
    `description` TEXT NOT NULL ,
    `backlog` INT NOT NULL ,
    PRIMARY KEY(`id`),
    UNIQUE `ind_email` (`email`(64))
);
