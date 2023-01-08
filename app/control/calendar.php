<?php
    $months_array = [];                                 // массив дней в месяце
    $current_year = date('o', time());                  // текущий год
    $current_days_of_week = date('w', time());          // текущий день недели
    $current_day = date('j', time());                   // текущий день
    $current_month = date('n', time());                 // текущий месяц
    $inactive_days_before = $current_days_of_week;      // количество неактивных дней для отображения

    for($i = 0; $i < 12; $i++) 
        $months_array[$i] = date('t', mktime(1, 1, 1, $i + 1, 1, $current_year));

    $active_month = 2;                                  // количество активных месяцев для отображения
    $target_year = $current_year;                       // год окончания календаря

    if(($current_month + $current_day) > 12) $target_year++;

    $last_active_day_of_week = (int)date('w', mktime(0, 0, 0, $current_month + $active_month, date('t', mktime(0, 0, 0, $current_month + $active_month, 1, $target_year)), $target_year));      // последний отображаемый день календаря(день недели)
    $active_days = (($months_array[$current_month] - ($current_day - 1)) + $months_array[$current_month + 1] + $months_array[$current_month + 2]) + 1;      // количество активных дней 
    $inactive_days_after = 6 - $last_active_day_of_week;        // количество неактивных дней после отображения активной зоны календаря
    $day = $current_day;        // день месяца используется для правильного отображения дней календаря
    $month = $current_month;    // значение месяца используется для правильного отображения месяцев на календаре