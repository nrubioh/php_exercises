USE database_ex1;

TRUNCATE TABLE `lines_stations`; 
INSERT INTO `lines_stations` (lines_id,stations_id) VALUE
(
    (
        SELECT `lines`.`id`
        FROM `lines`
        WHERE `lines`.`name` = "Line9"
    ),
    (
        SELECT `stations`.`id`
        FROM `stations`
        WHERE `stations`.`name` = "L??zaro C??rdenas"
    )
),
(
    (
        SELECT `lines`.`id`
        FROM `lines`
        WHERE `lines`.`name` = "Line6"
    ),
    (
        SELECT `stations`.`id`
        FROM `stations`
        WHERE `stations`.`name` = "Ferrer??a"
    )
),
(
    (
        SELECT `lines`.`id`
        FROM `lines`
        WHERE `lines`.`name` = "Line1"
    ),
    (
        SELECT `stations`.`id`
        FROM `stations`
        WHERE `stations`.`name` = "Pantitl??n"
    )
),
(
    (
        SELECT `lines`.`id`
        FROM `lines`
        WHERE `lines`.`name` = "Line5"
    ),
    (
        SELECT `stations`.`id`
        FROM `stations`
        WHERE `stations`.`name` = "Pantitl??n"
    )
),
(
    (
        SELECT `lines`.`id`
        FROM `lines`
        WHERE `lines`.`name` = "Line9"
    ),
    (
        SELECT `stations`.`id`
        FROM `stations`
        WHERE `stations`.`name` = "Pantitl??n"
    )
),
(
    (
        SELECT `lines`.`id`
        FROM `lines`
        WHERE `lines`.`name` = "LineA"
    ),
    (
        SELECT `stations`.`id`
        FROM `stations`
        WHERE `stations`.`name` = "Pantitl??n"
    )
),
(
    (
        SELECT `lines`.`id`
        FROM `lines`
        WHERE `lines`.`name` = "Line7"
    ),
    (
        SELECT `stations`.`id`
        FROM `stations`
        WHERE `stations`.`name` = "Tacuba"
    )
),
(
    (
        SELECT `lines`.`id`
        FROM `lines`
        WHERE `lines`.`name` = "Line2"
    ),
    (
        SELECT `stations`.`id`
        FROM `stations`
        WHERE `stations`.`name` = "Tacuba"
    )
),
(
    (
        SELECT `lines`.`id`
        FROM `lines`
        WHERE `lines`.`name` = "Line4"
    ),
    (
        SELECT `stations`.`id`
        FROM `stations`
        WHERE `stations`.`name` = "Mart??n Carrera"
    )
),
(
    (
        SELECT `lines`.`id`
        FROM `lines`
        WHERE `lines`.`name` = "Line6"
    ),
    (
        SELECT `stations`.`id`
        FROM `stations`
        WHERE `stations`.`name` = "Mart??n Carrera"
    )
);
/* (
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line9"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "L??zaro C??rdenas")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line6"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Ferrer??a")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineA"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Pantitl??n")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line2"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Tacuba")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line6"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Mart??n Carrera")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line4"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Santa Anita")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineB"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Villa de Arag??n")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line6"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Tezoz??moc")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineB"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Tecnol??gico")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line2"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Colegio Militar")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line1"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Chapultepec")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line12"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Calle 11")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line8"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Constituci??n de 1917")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line3"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Copilco")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line7"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Tacuba")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line4"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Talism??n")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line5"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Terminal A??rea")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineB"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Tepito")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line12"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Hospital 20 de Nov.")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line3"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Eugenia")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line12"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Lomas Estrella")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line3"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Tlatelolco")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line8"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Atlalilco")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line1"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Blvd. Puerto A??reo")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line9"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Chilpancingo")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineB"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Ciudad Azteca")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line3"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Niños H??roes")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line2"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Popotla")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line7"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "San Joaqu??n")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line3"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Universidad")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line6"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Instituto del Petr??leo")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line8"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Escuadr??n 201")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line8"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Iztacalco")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line3"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Ju??rez")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line2"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Chabacano")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line6"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Azcapotzalco")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineB"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Bosque de Arag??n")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line12"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Tlaltenco")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line4"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Jamaica")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineB"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Ocean??a")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line8"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Iztapalapa")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line9"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Mixhuca")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line3"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Centro M??dico")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line1"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Balderas")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line9"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Chabacano")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line8"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Salto del Agua")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line1"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Insurgentes")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineA"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Guelatao")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineB"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Morelos")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line1"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Moctezuma")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line2"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Normal")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line3"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Zapata")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line1"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Zaragoza")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line5"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "La Raza")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line9"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Jamaica")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line7"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Constituyentes")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineB"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Múzquiz")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineB"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Romero Rubio")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line2"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "San Cosme")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line2"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Portales")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line9"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Puebla")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineA"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Santa Marta")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line2"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Tasqueña")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line2"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Xola")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line4"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Canal del Norte")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineB"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Buenavista")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line1"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Balbuena")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line2"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Ermita")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line5"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Arag??n")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line6"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Deportivo 18 de Marzo")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line12"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Atlalilco")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line7"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Auditorio")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line12"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Culhuac??n")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line8"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Santa Anita")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line6"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Instituto del Petroleo")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line7"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "El Rosario")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line3"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Guerrero")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line3"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Hospital General")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line4"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Fray Servando")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line12"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Ermita")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line1"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Pantitl??n")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line9"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Patriotismo")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line1"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Observatorio")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineA"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "La Paz")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line5"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Valle G??mez")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line12"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Tezonco")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line8"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Chabacano")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line4"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Candelaria")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line7"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Aquiles Serd??n")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line8"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "La Viga")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineB"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Ol??mpica")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line12"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Mexicaltzingo")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line5"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Polit??cnico")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line12"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Perif??rico Ote")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineB"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "San L??zaro")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line7"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "San Antonio")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line12"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Zapotitl??n")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line12"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Tl??huac")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line3"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Hidalgo")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line2"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Hidalgo")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line3"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Etiop??a / Plaza de la Transpatencia")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineB"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Deportivo Ocean??a")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineB"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Impulsora")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line3"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Deportivo 18 de Marzo")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line4"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Consulado")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line7"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Camarones")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line2"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Allende")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line8"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "San Juan de Letr??n")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line2"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Viaducto")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line6"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Vallejo")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line9"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Pantitl??n")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line4"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Morelos")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line8"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Doctores")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineA"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Los Reyes")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line8"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Bellas Artes")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line3"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Balderas")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line5"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Autobuses del Norte")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineA"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Acatitla")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line2"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Revoluci??n")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line7"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Polanco")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line12"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "San Andr??s Tomatl??n")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineB"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Garibaldi")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line5"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Eduardo Molina")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line8"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Coyuya")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line3"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Coyoac??n")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line6"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Norte 45")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line6"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Lindavista")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line7"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Tacubaya")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line8"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Garibaldi")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line7"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Mixcoac")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line12"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Mixcoac")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line5"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Hangares")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line6"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "El Rosario")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line5"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Ocean??a")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line12"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Nopalera")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line2"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Bellas Artes")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line8"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "UAM-I")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line9"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Vel??dromo")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line1"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Cuauht??moc")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line8"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Apatlaco")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line8"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Aculco")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineA"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Agr??cola Oriental")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line12"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Eje Central")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line1"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Tacubaya")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line2"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Pino Su??rez")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineB"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "R??o de los Remedios")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line3"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Potrero")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line1"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Sevilla")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line2"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "General Anaya")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line3"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Indios Verdes")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line6"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "La Villa - Bas??lica")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line12"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Parque de los Venados")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line1"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Juanacatl??n")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line2"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Nativitas")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line5"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Misterios")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line1"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Candelaria")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line7"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Barranca del Muerto")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line3"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Miguel ??ngel de Quevedo")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineB"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Lagunilla")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line12"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Olivos")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line1"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "San L??zaro")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineA"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Tepalcates")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line2"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Z??calo")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line1"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "G??mez Far??as")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line9"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Centro M??dico")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line5"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Consulado")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line1"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Pino Su??rez")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line1"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Salto del Agua")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line7"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "San Pedro de Los Pinos")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line7"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Refiner??a")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line2"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Villa de Cort??s")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineB"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "R. Flores Mag??n")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineB"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Guerrero")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line12"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Insurgentes Sur")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line12"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Zapata")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line3"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Viveros")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line8"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Cerro de la Estrella")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line4"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Bondojito")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineA"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Canal de San Juan")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line5"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Pantitl??n")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line2"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "San Antonio Abad")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line8"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Obrera")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineB"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Plaza Arag??n")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line2"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Panteones")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineA"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Peñ??n Viejo")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line3"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Divisi??n del Norte")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line2"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Cuitl??huac")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line9"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Ciudad Deportiva")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line2"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Cuatro Caminos")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line4"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Mart??n Carrera")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line3"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "La Raza")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line1"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Isabel la Cat??lica")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "LineB"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Nezahualc??yotl")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line1"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Merced")
        ),
(
            (SELECT `lines`.`id` FROM `lines` WHERE `lines`.`name` = "Line9"),
            (SELECT `stations`.`id` FROM `stations` WHERE `stations`.`name` = "Tacubaya")
        );  */