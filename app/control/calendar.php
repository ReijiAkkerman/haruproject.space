<?php
    $months_array = [];                                 // массив дней в месяце
    $current_year = (int)date('o', time());             // текущий год
    $current_days_of_week = (int)date('w', time());     // текущий день недели
    $current_day = (int)date('j', time());              // текущий день
    $current_month = (int)date('n', time());            // текущий месяц
    $inactive_days_before = $current_days_of_week;      // количество неактивных дней для отображения

    for($i = 0; $i < 12; $i++) 
        $months_array[$i] = (int)date('t', mktime(1, 1, 1, $i + 1, 1, $current_year));

    $active_month = 2;                                  // количество активных месяцев для отображения
    $target_year = $current_year;                       // год окончания календаря
    $target_month = $current_month;                     // месяц окончания календаря

    for($i = 0; $i < 12; $i++) 
        $target_month_array = (int)date('t', mktime(1, 1, 1, $i + 1, 1, $target_year));

    if(($current_month + $active_month) > 12) {
        $target_year++;
        $target_month = 0 + $active_month;
    }

    $last_active_day_of_week = (int)date('w', mktime(0, 0, 0, $current_month + $active_month, date('t', mktime(0, 0, 0, $current_month + $active_month, 1, $target_year)), $target_year));      // последний отображаемый день календаря(день недели)
    $active_days = (($months_array[$current_month] - ($current_day - 1)) + $months_array[$current_month + 1] + $months_array[$current_month + 2]) + 1;      // количество активных дней 
    $inactive_days_after = 6 - $last_active_day_of_week;        // количество неактивных дней после отображения активной зоны календаря
    $day = $current_day;        // день месяца используется для правильного отображения дней календаря
    $month = $current_month;    // значение месяца используется для правильного отображения месяцев на календаре