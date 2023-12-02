USE database_ex1;

DELETE FROM `stations_delete`;

INSERT INTO `stations_delete` (name) VALUE
("Lázaro Cárdens"), -- Lázaro Cárdenas
("Ferería"), -- Ferrería 
("Pnttlán"), -- Pantitlán
("Tauga"), -- Tacuba
("MartínCrrera"); -- Martín Carrera

/* MariaDB [database_ex1]> SELECT * FROM `stations_delete`;
the record continue in id 167..... 
+-----+------------------+---------------------+---------------------+
| id  | name             | created_at          | updated_at          |
+-----+------------------+---------------------+---------------------+
| 167 | L??zaro C??rdens | 2023-05-28 22:54:40 | 2023-05-28 22:54:40 |
| 168 | Ferer??a         | 2023-05-28 22:54:40 | 2023-05-28 22:54:40 |
| 169 | Pnttl??n         | 2023-05-28 22:54:40 | 2023-05-28 22:54:40 |
| 170 | Tauga            | 2023-05-28 22:54:40 | 2023-05-28 22:54:40 |
| 171 | Mart??nCrrera    | 2023-05-28 22:54:40 | 2023-05-28 22:54:40 |
+-----+------------------+---------------------+---------------------+ */