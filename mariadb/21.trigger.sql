USE database_ex1;

CREATE TRIGGER update_updated_at_field
BEFORE UPDATE
ON `lines`
FOR EACH ROW
SET NEW.updated_at = NOW();

/* SELECT * FROM `lines` WHERE id = 1;
+----+-------+-------+---------------------+---------------------+
| id | name  | color | created_at          | updated_at          |
+----+-------+-------+---------------------+---------------------+
|  1 | Line1 | Pink  | 2023-05-27 21:01:13 | 2023-05-27 21:01:13 |
+----+-------+-------+---------------------+---------------------+

UPDATE `lines` SET name = "Linea69" WHERE id = 1;

SELECT * FROM `lines` WHERE id = 1;
+----+---------+-------+---------------------+---------------------+
| id | name    | color | created_at          | updated_at          |
+----+---------+-------+---------------------+---------------------+
|  1 | Linea69 | Pink  | 2023-05-27 21:01:13 | 2023-06-10 17:27:11 |
+----+---------+-------+---------------------+---------------------+
*/
