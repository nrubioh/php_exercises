USE database_ex1;
/* 
MariaDB [database_ex1]> SELECT id FROM `stations` WHERE name = "Merced"; 
+-----+
| id  |
+-----+
| 163 |
| 164 |
+-----+
MariaDB [database_ex1]>  SELECT id FROM `stations` WHERE name = "L??zaro de Guerrero"; 
+-----+
| id  |
+-----+
| 165 |
+-----+
*/
DELETE FROM `stations` WHERE id = 164;
DELETE FROM `stations` WHERE id = 165;
/* to check all table -> SELECT * FROM `table_name`; 
also it can delete from name: DELETE FROM `table_name` WHERE name = "example_name";
*/
DELETE FROM `stations` WHERE name = "Benito C??rdenas";
