<?php
    include "app/core/calendar.php";
    _prepare_timelabels(1, 2, 2023, 30, 5, 2023);
    $result = _view_data('ReijiAkkerman');
    foreach($result as $row) {
        echo $row['header'] . "\n";
    }

    // echo date("d:m:o", 1682850420);