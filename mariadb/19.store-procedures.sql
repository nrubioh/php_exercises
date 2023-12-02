USE database_ex1;
/* CALL calc_distances_between_2_points (POINT (-99.14433718, 19.40702104), 
POINT(-99.173702, 19.49039233),false); or true for meters
DROP PROCEDURE calc_distances_between_2_points;
*/
DELIMITER //

CREATE PROCEDURE calc_distances_between_2_points(
    IN station_1 POINT,
    IN station_2 POINT,
    IN meters BOOLEAN
)
BEGIN
    IF meters THEN
        SELECT 
        ST_Distance_Sphere(station_1,station_2) AS distances;
    ELSE 
        SELECT 
        ST_Distance_Sphere(station_1,station_2)/1000 AS distances;
    END IF;
END // 

DELIMITER ;

