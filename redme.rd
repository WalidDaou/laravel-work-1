CREATE TABLE `project_1`.`services` (`id` BIGINT NULL AUTO_INCREMENT , `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , `box` VARCHAR(255) NULL DEFAULT NULL , `text` VARCHAR(255) NULL DEFAULT NULL , `color` VARCHAR(255) NULL DEFAULT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


INSERT INTO `services` (`id`, `created_at`, `updated_at`, `box`, `text`, `color`) VALUES (NULL, current_timestamp(), current_timestamp(), 'box1', 'where the neon lights flicker like distant stars, there exists a hidden alleyway.', '#190ffb');