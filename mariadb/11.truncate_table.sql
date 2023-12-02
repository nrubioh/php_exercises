USE database_ex1;

TRUNCATE TABLE `stations_delete`;

INSERT INTO `stations_delete` (name) VALUE
("Lázaro Cárdens"), -- Lázaro Cárdenas
("Ferería"), -- Ferrería 
("Pnttlán"), -- Pantitlán
("Tauga"), -- Tacuba
("MartínCrrera"); -- Martín Carrera

/* MariaDB [database_ex1]> SELECT * FROM `stations_delete`;
+----+------------------+---------------------+---------------------+
| id | name             | created_at          | updated_at          |
+----+------------------+---------------------+---------------------+
|  1 | L??zaro C??rdens | 2023-05-28 23:17:34 | 2023-05-28 23:17:34 |
|  2 | Ferer??a         | 2023-05-28 23:17:34 | 2023-05-28 23:17:34 |
|  3 | Pnttl??n         | 2023-05-28 23:17:34 | 2023-05-28 23:17:34 |
|  4 | Tauga            | 2023-05-28 23:17:34 | 2023-05-28 23:17:34 |
|  5 | Mart??nCrrera    | 2023-05-28 23:17:34 | 2023-05-28 23:17:34 |
+----+------------------+---------------------+---------------------+ */