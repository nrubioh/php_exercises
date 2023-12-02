/* 
How to add:
ADD CONSTRAINT `trains_line_id_foreign` 
FOREIGN KEY (`line_id`) REFERENCES `lines`(`id`)
to see the changes: DESCRIBE `table`

BEFORE THE TABLE STATIONS IT WAS:
CREATE TABLE `stations`(
    `id` BIGINT (20),
    `name` VARCHAR (10) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
*/

USE database_ex1;

ALTER TABLE `stations`
MODIFY `id` BIGINT (20) UNSIGNED NOT NULL AUTO_INCREMENT,
ADD PRIMARY KEY(`id`);

ALTER TABLE `stations`
MODIFY `name` VARCHAR (100) NOT NULL;