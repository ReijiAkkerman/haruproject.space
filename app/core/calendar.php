<?php
    $months_array = [];                                     // массив дней в месяце
    $current_year;
    $current_days_of_week;
    $current_day;
    $current_month;
    $inactive_days_before;
    $active_month;
    $target_year;
    $target_month;
    $last_active_day_of_week;
    $active_days;
    $inactive_days_after;
    $day;
    $month;
    $months_array_of_leap_year = [];
    $months_array_of_normal_year = [];
    
    
    $year_start;
    $month_start;
    $day_start;
    $year_end;
    $month_end;
    $day_end;
    
    
    
    // function calendar_default() {
    //     global $months_array, $current_year, $current_days_of_week, $current_day, $current_month, $inactive_days_before;
    //     global $active_month, $target_year, $target_month, $last_active_day_of_week, $active_days, $inactive_days_after, $day, $month;
        
    //     $current_year = (int)date('o', time());             // текущий год
    //     $current_days_of_week = (int)date('w', time());     // текущий день недели
    //     $current_day = (int)date('j', time());              // текущий день
    //     $current_month = (int)date('n', time());            // текущий месяц
    //     $inactive_days_before = $current_days_of_week;      // количество неактивных дней для отображения
        
    //     for($i = 0; $i < 12; $i++) 
    //     $months_array[$i] = (int)date('t', mktime(1, 1, 1, $i + 1, 1, $current_year));
        
    //     $active_month = 2;                                  // количество активных месяцев для отображения
    //     $target_year = $current_year;                       // год окончания календаря
    //     $target_month = $current_month;                     // месяц окончания календаря
        
    //     if(($current_month + $active_month) > 12) {
    //         $target_year++;
    //         $target_month = 0 + $active_month;
    //     }
        
    //     $last_active_day_of_week = (int)date('w', mktime(0, 0, 0, $current_month + $active_month, date('t', mktime(0, 0, 0, $current_month + $active_month, 1, $target_year)), $target_year));      // последний отображаемый день календаря(день недели)
    //     $active_days = (($months_array[$current_month] - ($current_day - 1)) + $months_array[$current_month + 1] + $months_array[$current_month + 2]) + 1;      // количество активных дней 
    //     $inactive_days_after = 6 - $last_active_day_of_week;        // количество неактивных дней после отображения активной зоны календаря
    //     $day = $current_day;        // день месяца используется для правильного отображения дней календаря
    //     $month = $current_month;    // значение месяца используется для правильного отображения месяцев на календаре
    // }
    
    function calendar_target() {
        global $months_array, $current_year, $current_days_of_week, $current_day, $current_month, $inactive_days_before;
        global $active_month, $target_year, $target_month, $last_active_day_of_week, $active_days, $inactive_days_after, $day, $month;
        global $year_start;
        global $month_start;
        global $day_start;
        global $year_end;
        global $month_end;
        global $day_end;
        global $months_array_of_leap_year;
        global $months_array_of_normal_year;

        for($i = 0; $i < 12; $i++) {
            $months_array_of_leap_year[$i] = (int)date('t', mktime(1, 1, 1, $i, 1, 2024));
            $months_array_of_normal_year[$i] = (int)date('t', mktime(1, 1, 1, $i, 1, 2023));
        }
        
        $year_start = 2023;
        $month_start = 1;
        $day_start = 21;
        $year_end = 2023;
        $month_end = 1;
        $day_end = 23;
        
        // $year_start = $_POST['year_start'];
        // $month_start = $_POST['month_start'];
        // $day_start = $_POST['day_start'];
        // $year_end = $_POST['year_end'];
        // $month_end = $_POST['month_end'];

        // if($_POST['day_end'])
            $day_end = $_POST['day_end'];
        
        $months_array = [];
        $current_year = (int)date('o', time());
        $current_days_of_week = (int)date('w', time());
        $current_day = (int)date('j', time());
        $current_month = (int)date('n', time());
        $inactive_days_before = $current_days_of_week;
        
        $active_months = get_active_months($year_start, $month_start, $year_end, $month_end);
        $target_year = $year_end;
        $target_month = $month_end;

        $last_active_day_of_week = (int)date('w', mktime(1, 1, 1, $month_end, $day_end, $year_end));
        
        $temp_month = $month_start;
        $temp_year = $year_start;
        $active_days = 0;


        $delta_year = $year_end - $year_start;
        $delta_month = $month_end - $month_start;
        while($temp_month <= $month_end) {
            $year_label = (int)date('L', mktime(1, 1, 1, $temp_month, 1, $temp_year));
            if($year_label)
                if($temp_month == $month_start)
                    $active_days += ($months_array_of_leap_year[$temp_month - 1] - $day_start);
                else if($temp_month == $month_end)
                    $active_days += $day_end;
                else
                    $active_days += $months_array_of_leap_year[$temp_month - 1];
            else
                if($temp_month == $month_start)
                    $active_days += ($months_array_of_normal_year[$temp_month - 1] - $day_start);
                else if($temp_month == $month_end)
                    $active_days += $day_end;
                else
                    $active_days += $months_array_of_normal_year[$temp_month - 1];
            $temp_month++;
            if($temp_month > 12) {
                $temp_month = 1;
                $temp_year++;
            }
        }

        $inactive_days_after = 6 - $last_active_day_of_week;
        $day = $day_start;
        $month = $month_start;
    }

    function get_active_months($year_start, $month_start, $year_end, $month_end):int {
        $array_ = [];
        $array_['year_delta'] = $year_end - $year_start;
        $array_['months'] = ($array['year_delta'] * 12) - $month_start + $month_end;
        return $array_['months'];
    }