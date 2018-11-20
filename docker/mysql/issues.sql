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
