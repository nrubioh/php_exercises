USE database_ex1;
-- SELECT is = to echo php, print phyton, console.log js, etc.
-- EX. SELECT (2/2) AS RESULT; -> 1
SELECT * FROM `table_name`;
/*+----+--------+----------------+---------------------+---------------------+
| id | name   | color          | created_at          | updated_at          |
+----+--------+----------------+---------------------+---------------------+
|  1 | Line1  | Pink           | 2023-05-27 21:01:13 | 2023-05-27 21:01:13 |
|  2 | Line2  | Blue           | 2023-05-27 21:01:13 | 2023-05-27 21:01:13 |
|  3 | Line3  | Olive Green    | 2023-05-27 21:01:13 | 2023-05-27 21:01:13 |
|  4 | Line4  | Cian           | 2023-05-27 21:01:13 | 2023-05-27 21:01:13 |
|  5 | Line5  | Yellow         | 2023-05-27 21:01:13 | 2023-05-27 21:01:13 |
|  6 | Line6  | Red            | 2023-05-27 21:01:13 | 2023-05-27 21:01:13 |
|  7 | Line7  | Orange         | 2023-05-27 21:01:13 | 2023-05-27 21:01:13 |
|  8 | Line8  | Green          | 2023-05-27 21:01:13 | 2023-05-27 21:01:13 |
|  9 | Line9  | Brown          | 2023-05-27 21:01:13 | 2023-05-27 21:01:13 |
| 10 | LineA  | Purple         | 2023-05-27 21:01:13 | 2023-05-27 21:01:13 |
| 11 | LineB  | Green and Grey | 2023-05-27 21:01:13 | 2023-05-27 21:01:13 |
| 12 | Line12 | Gold           | 2023-05-27 21:01:13 | 2023-05-27 21:01:13 |
+----+--------+----------------+---------------------+---------------------+*/
SELECT id, name, color FROM `lines`;
/* +----+--------+----------------+
| id | name   | color          |
+----+--------+----------------+
|  1 | Line1  | Pink           |
|  2 | Line2  | Blue           |
|  3 | Line3  | Olive Green    |
|  4 | Line4  | Cian           |
|  5 | Line5  | Yellow         |
|  6 | Line6  | Red            |
|  7 | Line7  | Orange         |
|  8 | Line8  | Green          |
|  9 | Line9  | Brown          |
| 10 | LineA  | Purple         |
| 11 | LineB  | Green and Grey |
| 12 | Line12 | Gold           |
+----+--------+----------------+ */
SELECT AVG(year) as average_age FROM `trains`;
/*+-------------+
| average_age |
+-------------+
|   1976.0625 |
+-------------+*/

--INNERJOINS 2 TABLES--
SELECT
`lines`.`name` AS LINES_NAME,
`trains`.`serial_number` AS TRAINS_SERIAL_NUMBER
FROM `lines`
INNER JOIN `trains`
ON `lines`.`id` = `trains`.`line_id`;
--through FOREIGN KEY (`line_id`) REFERENCES `lines`(`id`) <- 2.create-tables.sql

/* +------------+----------------------+
| LINES_NAME | TRAINS_SERIAL_NUMBER |
+------------+----------------------+
| Line1      | 0JFxafE4q8           |
| Line1      | 7csbz2qteT           |
| Line1      | B83fPCVFbH           |
| Line1      | Pazz9JGCbJ           |
| Line1      | q92m0d8aWM           |
| Line1      | S06Q7kXYrP           |
| Line1      | t8HhPpvYbU           |
| Line1      | vOv1sCgHoa           |
| Line1      | wGweNe36QH           |
| Line1      | Z5qAgGpFTj           |
| Line1      | ZbX2yY5Wyz           |
| Line1      | zpO3I3tS4e           |
| Line2      | Bv1MN0DuUm           |
| Line2      | D9m2gBhBJw           |
| Line2      | EDUumFCvJl           |
| Line2      | Huz9yGcao5           |
| Line2      | JO5UinVh7B           |
| Line2      | MPbPGQfWxT           |
| Line2      | oRyT0nwjUn           |
| Line2      | QJ22USb3ry           |
| Line2      | s0QypBy7cJ           |
| Line2      | S6R4dX4THI           |
| Line2      | zeaEgOCuYl           |
| Line2      | ZHA4kQokXG           |
| Line3      | 2e5v4FHs0T           |
| Line3      | 5xPdsZ1x9L           |
| Line3      | ejN3a4CsDC           |
| Line3      | Ge92a6hVX8           |
| Line3      | Hvhw9vxUaH           |
| Line3      | mS0SY0eScA           |
| Line3      | oCut3fDYXE           |
| Line3      | OtmhQxSRpS           |
| Line3      | pMldxCQ2sS           |
| Line3      | U9xuOQl3kh           |
| Line3      | VjPElNnH29           |
| Line3      | XE89MYo0IU           |
| Line4      | 8PwCI0CC6n           |
| Line4      | 9ilxeEwlnH           |
| Line4      | aWDpmlRsOG           |
| Line4      | ax5jrpNIWG           |
| Line4      | f49Bk0GzBi           |
| Line4      | pBnf2N5Ncc           |
| Line4      | rnpVQQPs5b           |
| Line4      | uibQ7F5VE7           |
| Line4      | Uj5G2Bodtk           |
| Line4      | VViBQInzq3           |
| Line4      | Wh09mwE4yn           |
| Line4      | zpYnPq7vmN           |
+------------+----------------------+ */
