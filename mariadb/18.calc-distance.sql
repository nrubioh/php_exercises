USE database_ex1;

SELECT
ST_Distance_Sphere(
    POINT (-99.14433718, 19.40702104),
    POINT (-99.18803573, 19.45913691)
)/1000 AS distance;

SELECT
ST_Distance_Sphere( 
    (
        SELECT `geo_table`.`location`
        FROM `geo_table`
        INNER JOIN `stations`
        ON `stations`.`id` = `geo_table`.`stations_id`
        WHERE `stations`.`name` = "L??zaro C??rdenas"   
    ),
    (
        SELECT `geo_table`.`location`
        FROM `geo_table`
        INNER JOIN `stations`
        ON `stations`.`id` = `geo_table`.`stations_id`
        WHERE `stations`.`name` = "Pantitl??n"
    )
)/1000 AS distance;