CREATE DATABASE `project2_2`;
USE `project2_2`;
CREATE TABLE `project2_2`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` CHAR(64) NOT NULL,
  `user_hash` CHAR(64) NOT NULL,
  `type` TINYINT NOT NULL DEFAULT 0,
  `request` BOOLEAN NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`));
