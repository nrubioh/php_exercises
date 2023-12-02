USE database_ex1;
/* STEPS
0.9 to add the code before than log (if you dont want step 3): 
    Get-Content name_file.sql | mysql -u nick -p --database=database_name_ex;

1. enter in mariaDB: mysql -u root -p; (nick ps:123)
2. to use database: USE database_example1;
3. to create the table: you must to put whole code if you are ready login;
4. to see tables: SHOW TABLES;
5. to drop tables: DROP TABLE `table_example`;

    UNSIGNED MEANS NO NEGATIVE VALUES
    created_at = when you created a record (REGISTRO)
    TIMESTAMP = TO SAVE A SPECIFIC STAMP(MARCA DE TIEMPO) IN US DATABASE
    DEFAULT CURRENT_TIMESTAMP = AT THE TIME WHEN YOU SAVE THE RECORD
    updated_at = when you updated the record
    charset = what kinds of characters are you able to save in the database. 
    collate is to compare the actual records versus new data that you could give to the new database.
*/

*/
CREATE TABLE `lines` (
    `id` BIGINT (20) UNSIGNED NOT NULL AUTO_INCREMENT,

    `name` VARCHAR (10) NOT NULL,
    `color` VARCHAR (15) NOT NULL,

    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) 
DEFAULT CHARSET = utf8mb4 
COLLATE = utf8mb4_unicode_ci;

CREATE TABLE `stations`(
    `id` BIGINT (20),

    `name` VARCHAR (10) NOT NULL,
    --`icon` VARCHAR(100) NOT NULL,

    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

CREATE TABLE `trains`(
    `serial_number` VARCHAR(10) NOT NULL,
    
    `line_id` BIGINT (20) UNSIGNED NOT NULL,
    `type` TINYINT UNSIGNED NOT NULL,
    `year` INT(4) UNSIGNED NOT NULL,

    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY (`serial_number`),
    CONSTRAINT `trains_lines_id_foreign`
    FOREIGN KEY (`line_id`) REFERENCES `lines`(`id`)
) DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

CREATE TABLE `stations_delete`(
    `id` BIGINT (20),

    `name` VARCHAR (10) NOT NULL,
    --`icon` VARCHAR(100) NOT NULL,

    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;