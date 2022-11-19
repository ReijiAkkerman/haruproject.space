<?php
    $year = $currentYear = (int)date('o');
    $firstDay = (int)date('N', mktime(0, 0, 0, 1, 1, $currentYear));
    $activeDays = 7 - $firstDay;
    $inactiveDaysStart = 6 - $activeDays;
    $days = (int)date('z', mktime(0, 0, 0, 12, 31, $currentYear));
    $lastDay = (int)date('N', mktime(0, 0, 0, 12, 31, $currentYear));
    $yearLabel = (int)date('L', mktime(0, 0, 0, 1, 1, $currentYear));
    if($yearLabel)
        $monthArray = [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    else
        $monthArray = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    $inactiveDaysEnd = 7 - $lastDay;
    $daysCounter = 0;
    $day = 1;
    $monthIndex = 0;
    $month = date('M', mktime(0, 0, 0, 1, 1, $currentYear));
    
?>
<section class="Calendar">
<?php
    for($i = 0; $i < $inactiveDaysStart; $i++) {
?>
    <div class="inactiveCalendarElement">
        <div class="inactiveCalendarElementHeader"></div>
    </div>
<?php
    }
    for($i = 0; $i <= $days; $i++) {

?>
    <div class="CalendarElement">
        <div class="CalendarElementHeader">
            <h6><?php echo $day ?></h6>
            <h6><?php echo $month ?></h6>
            <h6><?php echo $year; ?></h6>
        </div>
    </div>
<?php
        if($day === $monthArray[$monthIndex]) {
            $day = 0;
            $monthIndex++;
            global $month;
            $month = date('M', mktime(0, 0, 0, $monthIndex + 1, 1, $currentYear));
        }
        $day++;
    }
    for($i = 0; $i < $inactiveDaysEnd; $i++) {
?>
    <div class="inactiveCalendarElement">
        <div class="inactiveCalendarElementHeader"></div>
    </div>
<?php
    }
?>
</section>