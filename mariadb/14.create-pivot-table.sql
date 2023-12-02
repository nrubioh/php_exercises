USE database_ex1;

CREATE TABLE `lines_stations`(
    `idLS` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,

    `lines_id` BIGINT (20) UNSIGNED NOT NULL,
    `stations_id` BIGINT (20) UNSIGNED NOT NULL,

    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY (`idLS`),

    CONSTRAINT `lines_stations_lines_id_foreign`
    FOREIGN KEY (`lines_id`) REFERENCES `lines`(`id`),

    CONSTRAINT `lines_stations_stations_id_foreign`
    FOREIGN KEY (`stations_id`) REFERENCES `stations`(`id`)

) DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;