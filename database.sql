CREATE TABLE `test`.`answers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `keywords` VARCHAR(255) NOT NULL,
  `example` TEXT NOT NULL,
  `type` VARCHAR(45) NOT NULL,
  `answer` TEXT NOT NULL,
  PRIMARY KEY (`id`));
