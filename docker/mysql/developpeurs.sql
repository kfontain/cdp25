CREATE TABLE `scrum`.`developpeurs` (
    `username` TINYTEXT NOT NULL ,
    `email` TEXT(64) NOT NULL ,
    `password` TINYTEXT NOT NULL ,
    PRIMARY KEY(`username`(32)),
    UNIQUE `ind_email` (`email`(64))
);
