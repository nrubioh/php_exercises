USE database_ex1;

CREATE TABLE `geo_table` (

    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,

    `stations_id` BIGINT (20) UNSIGNED NOT NULL,  --you should to know which station are you saving...?
    `location` POINT NOT NULL,

    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY (`id`),

    CONSTRAINT `stations_location_id_foreign`
    FOREIGN KEY (`stations_id`) REFERENCES `stations`(`id`) --line 7 will have relation with station table (id)

) DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;