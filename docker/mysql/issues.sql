CREATE TABLE `scrum`.`issues` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `description` TEXT NOT NULL,
    `cost` INT,
    `priority` INT,

    PRIMARY KEY (`id`)
);
