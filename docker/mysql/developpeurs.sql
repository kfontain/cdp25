CREATE TABLE IF NOT EXISTS `scrum`.`Developpeurs` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
    `username` TINYTEXT NOT NULL ,
    `email` TEXT(64) NOT NULL ,
    `password` TINYTEXT NOT NULL ,
    PRIMARY KEY(id),
    UNIQUE `ind_username` (`username`(32)),
    UNIQUE `ind_email` (`email`(64))
);
