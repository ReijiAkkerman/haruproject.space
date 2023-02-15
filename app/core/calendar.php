<?php
    $year_start;
    $month_start;
    $day_start;
    $year_end;
    $month_end;
    $day_end;
    
    $current_year;
    $current_month;
    $current_day;
    $current_hour;
    $current_minute;
    
    $active_year;
    $active_month;
    $active_days;
    
    $months_of_leap_year = [];
    $months_of_normal_year = [];
    
    $inactive_days_before;
    $inactive_days_after;

    $start_timelabel;
    $end_timelabel;
    
    function calendar_default() {
        global $year_start;
        global $month_start;
        global $day_start;
        global $year_end;
        global $month_end;
        global $day_end;
        
        if(isset($_POST['year_start']))
            $year_start = (int)$_POST['year_start'];
        else
            $year_start = (int)date('o', time());
        if(isset($_POST['month_start']))
            $month_start = (int)$_POST['month_start'];
        else
            $month_start = (int)date('n', time());
        if(isset($_POST['day_start']))
            $day_start = (int)$_POST['day_start'];
        else
            $day_start = (int)date('j', time());
        if(isset($_POST['year_end'])) 
            $year_end = (int)$_POST['year_end'];
        else {
            $year_end = (int)date('o', time());
        }
        if(isset($_POST['month_end'])) 
            $month_end = (int)$_POST['month_end'];
        else {
            $m_e = (int)date('n', time());
            $m_e += 2;
            if($m_e > 12) {
                $month_end = $m_e % 12;
                $year_end++;
            }
            else
                $month_end = $m_e;
        }
        if(isset($_POST['day_end']))
            $day_end = (int)$_POST['day_end'];
        else {
            $day_end = (int)date('t', mktime(1, 1, 1, $month_end, 1, $year_end));
        }
        
        global $current_year;
        global $current_month;
        global $current_day;
        global $current_hour;
        global $current_minute;
        
        global $active_year;
        global $active_month;
        global $active_days;
        
        global $months_of_leap_year;
        global $months_of_normal_year;
        
        global $inactive_days_before;
        global $inactive_days_after;
        
        $temp_month = $month_start;
        $temp_year = $year_start;
        
        $active_year = $year_end - $year_start;
        $active_month = ($active_year * 12) + $month_end - $month_start;
        
        for($i = 0; $i < 12; $i++) {
            $months_of_leap_year[$i] = (int)date('t', mktime(1, 1, 1, $i + 1, 1, 2024));
            $months_of_normal_year[$i] = (int)date('t', mktime(1, 1, 1, $i + 1, 1, 2023));
        }

        $current_year = (int)date('o', time());
        $current_month = (int)date('n', time());
        $current_day = (int)date('j', time());
        
        $inactive_days_before = (int)date('w', mktime(1, 1, 1, $month_start, $day_start, $year_start));
        $inactive_days_after = (6 - (int)date('w', mktime(1, 1, 1, $month_end, $day_end, $year_end)));

        $current_hour = (int)date('G', time());
        $current_minute = (int)date('i', time());
        
        for($i = 0; $i <= $active_month; $i++) {
            if($temp_month > 12) {
                $temp_month = 1;
                $temp_year++;
            }
            $year_label = (int)date('L', mktime(1, 1, 1, $temp_month, 1, $temp_year));
            if(($year_start == $year_end) && ($month_start == $month_end))
            $active_days += ($day_end - $day_start + 1);
            else {
                if(($temp_year == $year_start) && ($temp_month == $month_start))
                    $active_days += ((int)date('t', mktime(1, 1, 1, $month_start, 1, $year_start)) - $day_start + 1);
                else if(($temp_year == $year_end) && ($temp_month == $month_end))
                    $active_days += $day_end;
                else {
                    if($year_label) {
                        $active_days += $months_of_leap_year[$temp_month - 1];
                    }
                    else {
                        $active_days += $months_of_normal_year[$temp_month - 1];
                    }
                }
            }
            $temp_month++;
        }
    }

    function _add_entry($header, $description, $start_timelabel, $end_timelabel, $creation_timelabel, $checkbox):bool {
        $connection = mysqli_connect('localhost', 'root', 'KisaragiEki4', 'NATSU');
        mysqli_query($connection, "INSERT INTO ReijiAkkerman_calendar (header, content, start_timelabel, end_timelabel, creation_timelabel, done, during_day) VALUES ('$header', '$description', '$start_timelabel', '$end_timelabel', '$creation_timelabel', 0, $checkbox)");
        mysqli_close($connection);
    }

    function _view_data($login): object {
        global $start_timelabel;
        global $end_timelabel;

        $connection = mysqli_connect('localhost', 'root', 'KisaragiEki4', 'NATSU');
        $result = mysqli_query($connection, 'SELECT header FROM ' . $login . "_calendar WHERE start_timelabel>=$start_timelabel AND end_timelabel<=$end_timelabel");
        return $result;
    }

    function _prepare_timelabels($day_start, $month_start, $year_start, $day_end, $month_end, $year_end) {
        global $start_timelabel;
        global $end_timelabel;

        $start_timelabel = mktime(0, 0, 0, $month_start, $day_start, $year_start);
        $end_timelabel = mktime(23, 59, 59, $month_end, $day_end, $year_end);
    }