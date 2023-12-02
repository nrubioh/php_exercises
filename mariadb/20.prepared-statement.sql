USE database_ex1;

DELIMITER //
    CREATE PROCEDURE get_station_from_line(
        IN name_line VARCHAR(15)
    )
BEGIN
    DECLARE id_line BIGINT(20);

    SELECT id
    INTO id_line
    FROM `lines`
    WHERE name = name_line
    COLLATE utf8mb4_unicode_ci;

    SET @var_1 = CONCAT("
        SELECT
            `lines_stations`.`idLS` AS relation_id,  
            `lines`.`name` AS name_line,
            `stations`.`name` AS name_station

        FROM `lines_stations`

        INNER JOIN `stations`
        ON `stations`.`id` = `lines_stations`.`stations_id`

        INNER JOIN `lines`
        ON `lines`.`id` = `lines_stations`.`lines_id`

        WHERE `lines_stations`.`lines_id` =", id_line);

    PREPARE stmt FROM @var_1;
    EXECUTE stmt;
    DEALLOCATE PREPARE stmt;
END //
DELIMITER;