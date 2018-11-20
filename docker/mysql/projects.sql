CREATE TABLE IF NOT EXISTS `scrum`.`Projects` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` TEXT(64) NOT NULL ,
    `sprintLenght` INT NOT NULL,
    `description` TEXT NOT NULL ,
    `backlog` INT NOT NULL ,
    PRIMARY KEY(`id`),
    UNIQUE `ind_email` (`name`(64))
);
