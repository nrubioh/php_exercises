USE database_ex1;

CREATE TABLE `active_driver`(
    `id` BIGINT (20) UNSIGNED NOT NULL AUTO_INCREMENT,

    `driver_id` BIGINT (20) UNSIGNED NOT NULL,

    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY (id)
) DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

