<?php
    calendar_default();
    _prepare_timelabels();
    $temp_login = _get_login($id);
    $headers_list = _get_headers($temp_login);
    $calendar_data = _prepare_headers($headers_list);