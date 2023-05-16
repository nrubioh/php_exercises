<?php
require("dates.php");

    echo get_date_from_timestamp("2023-05-23")."\n";
    echo get_short_date_from_timestamp("2024-12-16")."\n";
    echo get_time_from_timestamp("20:43:36")."\n";
    echo translate_time("2 years", true)."\n";
    echo add_time("2021-06-14 18:25:16", "3 semanas + 5 horas + 1 mes")."\n";
    echo get_full_date("2023-09-14 18:25:30")."\n";
