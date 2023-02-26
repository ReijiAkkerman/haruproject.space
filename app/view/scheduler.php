<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once "often/head.php" ?>
        <title>Планировщик</title>
    </head>
    <body>
        <header>
            <ul class="commonInfo">
                <li>Уровень: 0</li>
                <li>Самореализация: %</li>
            </ul>
            <ul class="commonMoney">
                <li id="Finances">Финансы: rub</li>
                <li id="Debts">Долги: rub</li>
            </ul>
            <ul class="commonTasks">
                <li>Здесь что-то будет</li>
            </ul>
            <ul class="commonSkills">
                <li>Здесь тоже</li>
            </ul>
        </header>
        <nav class="Menu">
            <ul>
                <?php if($is_admin) { ?>
                <a href="sort"><li>Английский язык</li></a>
                <?php } ?>
                <a href="quit"><li>Выйти</li></a>
            </ul>
        </nav>
        <main class="mainWindow">
            <section class="Detailes">
                <div class="DetailesToolbar">
                    <button class="DetailesToolbarItem" onclick="_day_contents()">
                        <svg viewBox="0 0 29.237 29.237">
                            <path d="M7.685,24.819H8.28v-2.131h3.688v2.131h0.596v-2.131h3.862v2.131h0.597v-2.131h4.109v2.131h0.595
                                v-2.131h3.417v-0.594h-3.417v-3.861h3.417v-0.596h-3.417v-3.519h3.417v-0.594h-3.417v-2.377h-0.595v2.377h-4.109v-2.377h-0.597
                                v2.377h-3.862v-2.377h-0.596v2.377H8.279v-2.377H7.685v2.377H3.747v0.594h3.938v3.519H3.747v0.596h3.938v3.861H3.747v0.594h3.938
                                V24.819z M12.563,22.094v-3.861h3.862v3.861H12.563z M21.132,22.094h-4.109v-3.861h4.109V22.094z M21.132,14.118v3.519h-4.109
                                v-3.519C17.023,14.119,21.132,14.119,21.132,14.118z M16.426,14.118v3.519h-3.862v-3.519
                                C12.564,14.119,16.426,14.119,16.426,14.118z M8.279,14.118h3.688v3.519H8.279V14.118z M8.279,18.233h3.688v3.861H8.279V18.233z"/>
                            <path d="M29.207,2.504l-4.129,0.004L24.475,2.51v2.448c0,0.653-0.534,1.187-1.188,1.187h-1.388
                            c-0.656,0-1.188-0.533-1.188-1.187V2.514l-1.583,0.002v2.442c0,0.653-0.535,1.187-1.191,1.187h-1.388
                                c-0.655,0-1.188-0.533-1.188-1.187V2.517l-1.682,0.004v2.438c0,0.653-0.534,1.187-1.189,1.187h-1.389
                                c-0.653,0-1.188-0.533-1.188-1.187V2.525H8.181v2.434c0,0.653-0.533,1.187-1.188,1.187H5.605c-0.656,0-1.189-0.533-1.189-1.187
                                V2.53L0,2.534v26.153h2.09h25.06l2.087-0.006L29.207,2.504z M27.15,26.606H2.09V9.897h25.06V26.606z"/>
                            <path d="M5.605,5.303h1.388c0.163,0,0.296-0.133,0.296-0.297v-4.16c0-0.165-0.133-0.297-0.296-0.297H5.605
                                c-0.165,0-0.298,0.132-0.298,0.297v4.16C5.307,5.17,5.44,5.303,5.605,5.303z"/>
                            <path d="M11.101,5.303h1.389c0.164,0,0.297-0.133,0.297-0.297v-4.16c-0.001-0.165-0.134-0.297-0.298-0.297
                                H11.1c-0.163,0-0.296,0.132-0.296,0.297v4.16C10.805,5.17,10.938,5.303,11.101,5.303z"/>
                                <path d="M16.549,5.303h1.388c0.166,0,0.299-0.133,0.299-0.297v-4.16c-0.001-0.165-0.133-0.297-0.299-0.297
                                h-1.388c-0.164,0-0.297,0.132-0.297,0.297v4.16C16.252,5.17,16.385,5.303,16.549,5.303z"/>
                            <path d="M21.899,5.303h1.388c0.164,0,0.296-0.133,0.296-0.297v-4.16c0-0.165-0.132-0.297-0.296-0.297
                                h-1.388c-0.164,0-0.297,0.132-0.297,0.297v4.16C21.603,5.17,21.735,5.303,21.899,5.303z"/>
                        </svg>
                    </button>
                    <button class="DetailesToolbarItem" id="calendar_settings" onclick="_settings()">
                        <svg viewBox="0 0 56 56">
                            <path d="M 28.0000 50.8281 C 28.6094 50.8281 29.1719 50.7578 29.8047 50.7110 L 31.1641 53.2891 C 31.4219 53.8047 31.9375 54.0859 32.5704 53.9922 C 33.1563 53.8750 33.5782 53.4532 33.6485 52.8203 L 34.0704 49.9844 C 35.2188 49.6797 36.3672 49.2344 37.4922 48.7422 L 39.6016 50.6406 C 40.0469 51.0625 40.6094 51.1563 41.1953 50.8281 C 41.7110 50.5469 41.9219 49.9844 41.8047 49.3750 L 41.2188 46.5625 C 42.1797 45.8828 43.1407 45.1094 44.0078 44.2422 L 46.6328 45.3438 C 47.2189 45.5781 47.7579 45.4610 48.2034 44.9219 C 48.6018 44.5000 48.6483 43.8906 48.3205 43.3750 L 46.7970 40.9375 C 47.5002 39.9532 48.0627 38.8984 48.6018 37.7735 L 51.4611 37.9141 C 52.0703 37.9375 52.5858 37.6094 52.7970 37.0235 C 52.9842 36.4375 52.7970 35.8750 52.3045 35.5 L 50.0783 33.7188 C 50.3831 32.5937 50.6173 31.3750 50.7109 30.1094 L 53.4296 29.2657 C 54.0157 29.0547 54.3906 28.6094 54.3906 27.9766 C 54.3906 27.3672 54.0157 26.9219 53.4296 26.7110 L 50.7109 25.8437 C 50.6173 24.5781 50.3831 23.4063 50.0783 22.2578 L 52.3045 20.4532 C 52.7970 20.1016 52.9842 19.5625 52.7970 18.9766 C 52.5858 18.3906 52.0703 18.0625 51.4611 18.0859 L 48.6018 18.2032 C 48.0627 17.0781 47.5002 16.0235 46.7970 15.0391 L 48.3205 12.6016 C 48.6483 12.1094 48.6018 11.5000 48.2034 11.0781 C 47.7579 10.5391 47.2189 10.3984 46.6328 10.6563 L 44.0078 11.7110 C 43.1407 10.8906 42.1797 10.0937 41.2188 9.4141 L 41.8047 6.6250 C 41.9219 5.9922 41.7110 5.4297 41.1953 5.1484 C 40.6094 4.8437 40.0469 4.8906 39.6016 5.3594 L 37.4922 7.2110 C 36.3672 6.7188 35.2188 6.3203 34.0704 5.9922 L 33.6485 3.1563 C 33.5782 2.5469 33.1563 2.1016 32.5704 2.0078 C 31.9375 1.9141 31.4219 2.1719 31.1641 2.6875 L 29.8047 5.2657 C 29.1719 5.2188 28.6094 5.1719 28.0000 5.1719 C 27.3672 5.1719 26.8047 5.2188 26.1485 5.2657 L 24.8126 2.6875 C 24.5547 2.1719 24.0391 1.9141 23.3829 2.0078 C 22.7969 2.1016 22.3985 2.5469 22.3047 3.1563 L 21.9063 5.9688 C 20.7344 6.3203 19.5860 6.7188 18.4844 7.2110 L 16.3751 5.3594 C 15.9063 4.8906 15.3438 4.8437 14.7813 5.1484 C 14.2657 5.4297 14.0547 5.9922 14.1719 6.6250 L 14.7578 9.4141 C 13.7735 10.0937 12.8126 10.8906 11.9453 11.7110 L 9.3438 10.6563 C 8.7578 10.3984 8.1953 10.5391 7.7500 11.0781 C 7.3751 11.5000 7.3282 12.1094 7.6329 12.5781 L 9.1797 15.0391 C 8.4766 16.0235 7.9141 17.0781 7.3751 18.2032 L 4.4922 18.0859 C 3.8829 18.0625 3.3672 18.3906 3.1797 18.9766 C 2.9922 19.5625 3.1563 20.1016 3.6485 20.4532 L 5.8985 22.2578 C 5.5938 23.4063 5.3360 24.5781 5.2657 25.8437 L 2.5469 26.7110 C 1.9375 26.8984 1.6094 27.3437 1.6094 27.9766 C 1.6094 28.6094 1.9375 29.0547 2.5469 29.2657 L 5.2657 30.1328 C 5.3360 31.3750 5.5938 32.5937 5.8985 33.7188 L 3.6485 35.5 C 3.1563 35.8750 2.9922 36.4375 3.1797 37.0235 C 3.3672 37.6094 3.8829 37.9375 4.4922 37.9141 L 7.3751 37.7735 C 7.9141 38.8984 8.4766 39.9532 9.1563 40.9375 L 7.6563 43.3750 C 7.3047 43.8906 7.3516 44.5000 7.7500 44.9219 C 8.1953 45.4610 8.7578 45.5781 9.3438 45.3438 L 11.9453 44.2422 C 12.8126 45.1094 13.7735 45.8828 14.7578 46.5625 L 14.1719 49.3750 C 14.0547 49.9844 14.2657 50.5469 14.7813 50.8281 C 15.3672 51.1563 15.9297 51.0625 16.3751 50.6406 L 18.4610 48.7422 C 19.5860 49.2344 20.7344 49.6797 21.9063 49.9844 L 22.3047 52.8203 C 22.3985 53.4532 22.7969 53.8750 23.3829 53.9922 C 24.0391 54.0859 24.5547 53.8047 24.8126 53.2891 L 26.1485 50.7110 C 26.7813 50.7578 27.3672 50.8281 28.0000 50.8281 Z M 33.8829 26.5000 C 32.7813 23.5469 30.6251 21.9297 27.9297 21.9297 C 27.5313 21.9297 27.0626 21.9766 26.3126 22.1406 L 19.5860 10.6563 C 22.0938 9.4141 24.9531 8.7344 28.0000 8.7344 C 38.2188 8.7344 46.2344 16.4922 46.9611 26.5000 Z M 8.9688 28.0000 C 8.9688 21.4844 12.0391 15.7422 16.8907 12.2735 L 23.6641 23.8281 C 22.3985 25.1406 21.8126 26.5703 21.8126 28.0937 C 21.8126 29.5703 22.3751 30.9297 23.6641 32.2891 L 16.7266 43.6328 C 11.9922 40.1406 8.9688 34.4688 8.9688 28.0000 Z M 25.1172 28.0703 C 25.1172 26.4766 26.4766 25.2344 27.9766 25.2344 C 29.5704 25.2344 30.8829 26.4766 30.8829 28.0703 C 30.8829 29.6406 29.5704 30.9297 27.9766 30.9297 C 26.4766 30.9297 25.1172 29.6406 25.1172 28.0703 Z M 28.0000 47.2656 C 24.8829 47.2656 21.9766 46.5391 19.4219 45.2735 L 26.3126 34 C 27.0391 34.1875 27.5313 34.2344 27.9297 34.2344 C 30.6485 34.2344 32.8047 32.5703 33.8829 29.5469 L 46.9611 29.5469 C 46.2109 39.5078 38.1953 47.2656 28.0000 47.2656 Z"/>
                        </svg>
                    </button>
                    <button class="DetailesToolbarItem" onclick="_add_entry()">
                        <svg viewBox="0 0 512 512">
                            <rect y="228" width="512" height="56"/>
                            <rect x="228" width="56" height="512"/>
                        </svg>
                    </button>
                </div>
                <div class="DetailesSettings">
                    <form action="scheduler" method="POST" class="DetailesSettingsDate">
                        <h5 class="calendar_label">Начало</h5>
                        <div class="DetailesSettingsDateItem">
                            <div class="DetailesSettingsDateItem_block">
                                <label for="year">Год</label>
                                <ul>
                                    <li><input type="text" class="DetailesSettingsDateItem_block__input" name="year_start" value="<?= $year_start ?>"></li>
                                </ul>
                            </div>
                            <div class="DetailesSettingsDateItem_block">
                                <label for="month">Месяц</label>
                                <ul>
                                    <li><input type="text" class="DetailesSettingsDateItem_block__input" name="month_start" value="<?= $month_start ?>"></li>
                                </ul>
                            </div>
                            <div class="DetailesSettingsDateItem_block">
                                <label for="day">День</label>
                                <ul>
                                    <li><input type="text" class="DetailesSettingsDateItem_block__input" name="day_start" value="<?= $day_start ?>"></li>
                                </ul>
                            </div>
                        </div>
                        <h5 class="calendar_label">Конец</h5>
                        <div class="DetailesSettingsDateItem">
                            <div class="DetailesSettingsDateItem_block">
                                <label for="year">Год</label>
                                <ul>
                                    <li><input type="text" class="DetailesSettingsDateItem_block__input" name="year_end" value="<?= $year_end ?>"></li>
                                </ul>
                            </div>
                            <div class="DetailesSettingsDateItem_block">
                                <label for="month">Месяц</label>
                                <ul>
                                    <li><input type="text" class="DetailesSettingsDateItem_block__input" name="month_end" value="<?= $month_end ?>"></li>
                                </ul>
                            </div>
                            <div class="DetailesSettingsDateItem_block">
                                <label for="day">День</label>
                                <ul>
                                    <li><input type="text" class="DetailesSettingsDateItem_block__input" name="day_end" value="<?= $day_end ?>"></li>
                                </ul>
                            </div>
                        </div>
                        <button class="date_button">Отобразить</button>
                    </form>
                </div>
                <div class="DetailesAdd">
                    <form action="handle" method="POST" id="send_entry">
                        <div class="DetailesAddContents">
                            <div class="DetailesAdd_block">
                                <label for="header">Заголовок</label>
                                <input type="text" name="header" id="add_header" autocomplete="off">
                            </div>
                            <div class="DetailesAdd_block">
                                <label for="description">Описание</label>
                                <textarea name="description" id="add_description"></textarea>
                            </div>
                        </div>
                        <div class="DetailesAddTime">
                            <div class="DetailesAddTimeItem">
                                <label for="total_day">В течение дня</label>
                                <input type="checkbox" name="checkbox" class="checkbox" checked>
                            </div>
                            <h5 class="calendar_label">Начало</h5>
                            <div class="DetailesAddTimeItem_date">
                                <div class="DetailesAddTimeItem_block">
                                    <label for="year">Год</label>
                                    <input type="text" name="year_start" class="DetailesAddTimeItem_block__input" id="year_start" value="<?= $current_year ?>">
                                </div>
                                <div class="DetailesAddTimeItem_block">
                                    <label for="month">Месяц</label>
                                    <input type="text" name="month_start" class="DetailesAddTimeItem_block__input" id="month_start" value="<?= $current_month ?>">
                                </div>
                                <div class="DetailesAddTimeItem_block">
                                    <label for="day">День</label>
                                    <input type="text" name="day_start" class="DetailesAddTimeItem_block__input" id="day_start" value="<?= $current_day ?>">
                                </div>
                            </div>
                            <div class="DetailesAddTimeItem_time" id="time_start">
                                <div class="DetailesAddTimeItem_block">
                                    <label for="hour">Час</label>
                                    <input type="text" name="hour_start" class="DetailesAddTimeItem_block__input" id="hour_start" value="<?= $current_hour ?>">
                                </div>
                                <div class="DetailesAddTimeItem_block">
                                    <label for="minute">Минута</label>
                                    <input type="text" name="minute_start" class="DetailesAddTimeItem_block__input" id="minute_start" value="<?= $current_minute ?>">
                                </div>
                            </div>
                            <h5 class="calendar_label">Конец</h5>
                            <div class="DetailesAddTimeItem_date">
                                <div class="DetailesAddTimeItem_block">
                                    <label for="year">Год</label>
                                    <input type="text" name="year_end" class="DetailesAddTimeItem_block__input" id="year_end" value="<?= $current_year ?>" readonly>
                                </div>
                                <div class="DetailesAddTimeItem_block">
                                    <label for="month">Месяц</label>
                                    <input type="text" name="month_end" class="DetailesAddTimeItem_block__input" id="month_end" value="<?= $current_month ?>" readonly>
                                </div>
                                <div class="DetailesAddTimeItem_block">
                                    <label for="day">День</label>
                                    <input type="text" name="day_end" class="DetailesAddTimeItem_block__input" id="day_end" value="<?= $current_day ?>" readonly>
                                </div>
                            </div>
                            <div class="DetailesAddTimeItem_time" id="time_end">
                                <div class="DetailesAddTimeItem_block">
                                    <label for="hour">Час</label>
                                    <input type="text" name="hour_end" class="DetailesAddTimeItem_block__input" id="hour_end" value="<?= $current_hour ?>">
                                </div>
                                <div class="DetailesAddTimeItem_block">
                                    <label for="minute">Минута</label>
                                    <input type="text" name="minute_end" class="DetailesAddTimeItem_block__input" id="minute_end" value="<?= $current_minute ?>">
                                </div>
                            </div>
                        </div>
                        <button onclick="_send_entry(event)" class="date_button">Сохранить</button>
                    </form>
                </div>
                <div class="DetailesCalendar">
                    <div class="w_DetailesCalendarDate">
                        <div class="DetailesCalendarDate">
                            <button onclick="back()">
                                <svg viewBox="0 0 1920 1920">
                                    <path d="m1394.006 0 92.299 92.168-867.636 867.767 867.636 867.636-92.299 92.429-959.935-960.065z"/>
                                </svg>
                            </button>
                            <div>
                                <span class="behind_values" id="DateBar_year"><?= $current_year ?></span>
                            </div>
                            <div>
                                <span class="front_values" id="DateBar_day"><?= $current_day ?></span>
                            </div>
                            <div>
                                <span class="behind_values" id="DateBar_month"><?= $current_month ?></span>
                            </div>
                            <button onclick="next()">
                                <svg viewBox="0 0 1920 1920">
                                    <path d="M526.299 0 434 92.168l867.636 867.767L434 1827.57l92.299 92.43 959.935-960.065z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="DetailesCalendarContents">
                        <button class="DetailesCalendarContentsEntry"><pre>Кнопка и мноооооооооого текста</pre></button>
                    </div>
                </div>
            </section>
            <section class="b_Calendar">
                <div class="b_CalendarBar">
                    <span>Вс</span>
                    <span>Пн</span>
                    <span>Вт</span>
                    <span>Ср</span>
                    <span>Чт</span>
                    <span>Пт</span>
                    <span>Сб</span>
                </div>
                <div class="Calendar">
                    <?php for($i = 0; $i < $inactive_days_before; $i++) { ?>
                        <button class="CalendarButton_inactive">
                            <div class="CalendarItem">
                                <div class="CalendarItemDate_inactive">N/A</div>
                                <div class="CalendarItemContents"></div>
                            </div>
                        </button>
                        <?php } ?>
                        <?php
                            $temp_year = $year_start;
                            $temp_month = $month_start;
                            $temp_day = $day_start;
                            for($i = 0; $i < $active_days; $i++) {
                                // $counter = 0;
                                $year_label = (int)date('L', mktime(1, 1, 1, $temp_month, $temp_day, $temp_year));
                                if($year_label) {
                                    if($temp_day > $months_of_leap_year[$temp_month - 1]) {
                                        $temp_day = 1;
                                        $temp_month++;
                                    }
                                    if($temp_month > 12) {
                                        $temp_month = 1;
                                        $temp_year++;
                                    }
                                }
                                else {
                                    if($temp_day > $months_of_normal_year[$temp_month - 1]) {
                                        $temp_day = 1;
                                        $temp_month++;
                                    }
                                    if($temp_month > 12) {
                                        $temp_month = 1;
                                        $temp_year++;
                                    }
                                }
                        ?>
                    <button class="CalendarButton <?php if(($temp_year == $current_year) && ($temp_month == $current_month) && ($temp_day == $current_day)) echo 'today' ?> <?= 'b' . $i ?>" onclick="_selected(this.id)" id="<?= 'b_' . $temp_year . '_' . $temp_month . '_' . $temp_day ?>">
                        <div class="CalendarItem">
                            <div class="CalendarItemDate"
                            <?php
                                if(($temp_year == $current_year) && ($temp_month == $current_month) && ($temp_day == $current_day)) echo 'id="current_day"'
                            ?>
                            >
                            <?php
                                if(($temp_month == 1) && ($temp_day == 1))
                                    echo "$temp_day/$temp_month/$temp_year";
                                else if(($temp_day == 1) && ($temp_month != 1))
                                    echo "$temp_day/$temp_month";
                                else
                                    echo $temp_day;
                                ?></div>
                            <div class="CalendarItemContents">
                                <div class="CalendarItemContentsBlock">
                                <?php
                                // while(($temp_day === $calendar_data[$counter]->day) && ($temp_month === $calendar_data[$counter]->month) && ($temp_year === $calendar_data[$counter]->year)) {
                                foreach($calendar_data as $key => $value) {
                                    if($temp_day === $value->day)
                                        if($temp_month === $value->month)
                                            if($temp_year === $value->year)
                                                echo '<pre>' . $value->header . '</pre>';
                                    // $counter++;
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </button>
                <?php
                $temp_day++;
                }
                ?>
                <?php for($i = 0; $i < $inactive_days_after; $i++) { ?>
                    <button class="CalendarButton_inactive">
                        <div class="CalendarItem">
                            <div class="CalendarItemDate_inactive">N/A</div>
                            <div class="CalendarItemContents"></div>
                        </div>
                    </button>
                    <?php } ?>
                </div>
            </section>
            </main>


            <nav class="Menu_mobile">
                <ul>
                    <li>
                        <svg viewBox="0 0 24 24" >
                            <path d="M22 11H10v-1h12zm0-8H9v1h13zM8 20H6v2h2zM6 6H2V2h4zM5 3H3v2h2zm3 7H6v2h2zm0 5H6v2h2zm14 0H10v1h12zm-12 6h12v-1H10z"/>
                            <path fill="none" d="M0 0h24v24H0z"/>
                        </svg>
                    </li>
                    <li>
                        <svg viewBox="0 0 124 124" >
                            <path d="M112,6H12C5.4,6,0,11.4,0,18s5.4,12,12,12h100c6.6,0,12-5.4,12-12S118.6,6,112,6z"/>
                            <path d="M112,50H12C5.4,50,0,55.4,0,62c0,6.6,5.4,12,12,12h100c6.6,0,12-5.4,12-12C124,55.4,118.6,50,112,50z"/>
                            <path d="M112,94H12c-6.6,0-12,5.4-12,12s5.4,12,12,12h100c6.6,0,12-5.4,12-12S118.6,94,112,94z"/>
                        </svg>
                    </li>
                    <li>
                        <svg viewBox="0 0 29.237 29.237">
                            <path d="M7.685,24.819H8.28v-2.131h3.688v2.131h0.596v-2.131h3.862v2.131h0.597v-2.131h4.109v2.131h0.595
                                v-2.131h3.417v-0.594h-3.417v-3.861h3.417v-0.596h-3.417v-3.519h3.417v-0.594h-3.417v-2.377h-0.595v2.377h-4.109v-2.377h-0.597
                                v2.377h-3.862v-2.377h-0.596v2.377H8.279v-2.377H7.685v2.377H3.747v0.594h3.938v3.519H3.747v0.596h3.938v3.861H3.747v0.594h3.938
                                V24.819z M12.563,22.094v-3.861h3.862v3.861H12.563z M21.132,22.094h-4.109v-3.861h4.109V22.094z M21.132,14.118v3.519h-4.109
                                v-3.519C17.023,14.119,21.132,14.119,21.132,14.118z M16.426,14.118v3.519h-3.862v-3.519
                                C12.564,14.119,16.426,14.119,16.426,14.118z M8.279,14.118h3.688v3.519H8.279V14.118z M8.279,18.233h3.688v3.861H8.279V18.233z"/>
                            <path d="M29.207,2.504l-4.129,0.004L24.475,2.51v2.448c0,0.653-0.534,1.187-1.188,1.187h-1.388
                                c-0.656,0-1.188-0.533-1.188-1.187V2.514l-1.583,0.002v2.442c0,0.653-0.535,1.187-1.191,1.187h-1.388
                                c-0.655,0-1.188-0.533-1.188-1.187V2.517l-1.682,0.004v2.438c0,0.653-0.534,1.187-1.189,1.187h-1.389
                                c-0.653,0-1.188-0.533-1.188-1.187V2.525H8.181v2.434c0,0.653-0.533,1.187-1.188,1.187H5.605c-0.656,0-1.189-0.533-1.189-1.187
                                V2.53L0,2.534v26.153h2.09h25.06l2.087-0.006L29.207,2.504z M27.15,26.606H2.09V9.897h25.06V26.606z"/>
                            <path d="M5.605,5.303h1.388c0.163,0,0.296-0.133,0.296-0.297v-4.16c0-0.165-0.133-0.297-0.296-0.297H5.605
                                c-0.165,0-0.298,0.132-0.298,0.297v4.16C5.307,5.17,5.44,5.303,5.605,5.303z"/>
                            <path d="M11.101,5.303h1.389c0.164,0,0.297-0.133,0.297-0.297v-4.16c-0.001-0.165-0.134-0.297-0.298-0.297
                                H11.1c-0.163,0-0.296,0.132-0.296,0.297v4.16C10.805,5.17,10.938,5.303,11.101,5.303z"/>
                            <path d="M16.549,5.303h1.388c0.166,0,0.299-0.133,0.299-0.297v-4.16c-0.001-0.165-0.133-0.297-0.299-0.297
                                h-1.388c-0.164,0-0.297,0.132-0.297,0.297v4.16C16.252,5.17,16.385,5.303,16.549,5.303z"/>
                            <path d="M21.899,5.303h1.388c0.164,0,0.296-0.133,0.296-0.297v-4.16c0-0.165-0.132-0.297-0.296-0.297
                                h-1.388c-0.164,0-0.297,0.132-0.297,0.297v4.16C21.603,5.17,21.735,5.303,21.899,5.303z"/>
                        </svg>
                    </li>
                    <li>
                        <svg viewBox="0 0 56 56">
                            <path d="M 28.0000 50.8281 C 28.6094 50.8281 29.1719 50.7578 29.8047 50.7110 L 31.1641 53.2891 C 31.4219 53.8047 31.9375 54.0859 32.5704 53.9922 C 33.1563 53.8750 33.5782 53.4532 33.6485 52.8203 L 34.0704 49.9844 C 35.2188 49.6797 36.3672 49.2344 37.4922 48.7422 L 39.6016 50.6406 C 40.0469 51.0625 40.6094 51.1563 41.1953 50.8281 C 41.7110 50.5469 41.9219 49.9844 41.8047 49.3750 L 41.2188 46.5625 C 42.1797 45.8828 43.1407 45.1094 44.0078 44.2422 L 46.6328 45.3438 C 47.2189 45.5781 47.7579 45.4610 48.2034 44.9219 C 48.6018 44.5000 48.6483 43.8906 48.3205 43.3750 L 46.7970 40.9375 C 47.5002 39.9532 48.0627 38.8984 48.6018 37.7735 L 51.4611 37.9141 C 52.0703 37.9375 52.5858 37.6094 52.7970 37.0235 C 52.9842 36.4375 52.7970 35.8750 52.3045 35.5 L 50.0783 33.7188 C 50.3831 32.5937 50.6173 31.3750 50.7109 30.1094 L 53.4296 29.2657 C 54.0157 29.0547 54.3906 28.6094 54.3906 27.9766 C 54.3906 27.3672 54.0157 26.9219 53.4296 26.7110 L 50.7109 25.8437 C 50.6173 24.5781 50.3831 23.4063 50.0783 22.2578 L 52.3045 20.4532 C 52.7970 20.1016 52.9842 19.5625 52.7970 18.9766 C 52.5858 18.3906 52.0703 18.0625 51.4611 18.0859 L 48.6018 18.2032 C 48.0627 17.0781 47.5002 16.0235 46.7970 15.0391 L 48.3205 12.6016 C 48.6483 12.1094 48.6018 11.5000 48.2034 11.0781 C 47.7579 10.5391 47.2189 10.3984 46.6328 10.6563 L 44.0078 11.7110 C 43.1407 10.8906 42.1797 10.0937 41.2188 9.4141 L 41.8047 6.6250 C 41.9219 5.9922 41.7110 5.4297 41.1953 5.1484 C 40.6094 4.8437 40.0469 4.8906 39.6016 5.3594 L 37.4922 7.2110 C 36.3672 6.7188 35.2188 6.3203 34.0704 5.9922 L 33.6485 3.1563 C 33.5782 2.5469 33.1563 2.1016 32.5704 2.0078 C 31.9375 1.9141 31.4219 2.1719 31.1641 2.6875 L 29.8047 5.2657 C 29.1719 5.2188 28.6094 5.1719 28.0000 5.1719 C 27.3672 5.1719 26.8047 5.2188 26.1485 5.2657 L 24.8126 2.6875 C 24.5547 2.1719 24.0391 1.9141 23.3829 2.0078 C 22.7969 2.1016 22.3985 2.5469 22.3047 3.1563 L 21.9063 5.9688 C 20.7344 6.3203 19.5860 6.7188 18.4844 7.2110 L 16.3751 5.3594 C 15.9063 4.8906 15.3438 4.8437 14.7813 5.1484 C 14.2657 5.4297 14.0547 5.9922 14.1719 6.6250 L 14.7578 9.4141 C 13.7735 10.0937 12.8126 10.8906 11.9453 11.7110 L 9.3438 10.6563 C 8.7578 10.3984 8.1953 10.5391 7.7500 11.0781 C 7.3751 11.5000 7.3282 12.1094 7.6329 12.5781 L 9.1797 15.0391 C 8.4766 16.0235 7.9141 17.0781 7.3751 18.2032 L 4.4922 18.0859 C 3.8829 18.0625 3.3672 18.3906 3.1797 18.9766 C 2.9922 19.5625 3.1563 20.1016 3.6485 20.4532 L 5.8985 22.2578 C 5.5938 23.4063 5.3360 24.5781 5.2657 25.8437 L 2.5469 26.7110 C 1.9375 26.8984 1.6094 27.3437 1.6094 27.9766 C 1.6094 28.6094 1.9375 29.0547 2.5469 29.2657 L 5.2657 30.1328 C 5.3360 31.3750 5.5938 32.5937 5.8985 33.7188 L 3.6485 35.5 C 3.1563 35.8750 2.9922 36.4375 3.1797 37.0235 C 3.3672 37.6094 3.8829 37.9375 4.4922 37.9141 L 7.3751 37.7735 C 7.9141 38.8984 8.4766 39.9532 9.1563 40.9375 L 7.6563 43.3750 C 7.3047 43.8906 7.3516 44.5000 7.7500 44.9219 C 8.1953 45.4610 8.7578 45.5781 9.3438 45.3438 L 11.9453 44.2422 C 12.8126 45.1094 13.7735 45.8828 14.7578 46.5625 L 14.1719 49.3750 C 14.0547 49.9844 14.2657 50.5469 14.7813 50.8281 C 15.3672 51.1563 15.9297 51.0625 16.3751 50.6406 L 18.4610 48.7422 C 19.5860 49.2344 20.7344 49.6797 21.9063 49.9844 L 22.3047 52.8203 C 22.3985 53.4532 22.7969 53.8750 23.3829 53.9922 C 24.0391 54.0859 24.5547 53.8047 24.8126 53.2891 L 26.1485 50.7110 C 26.7813 50.7578 27.3672 50.8281 28.0000 50.8281 Z M 33.8829 26.5000 C 32.7813 23.5469 30.6251 21.9297 27.9297 21.9297 C 27.5313 21.9297 27.0626 21.9766 26.3126 22.1406 L 19.5860 10.6563 C 22.0938 9.4141 24.9531 8.7344 28.0000 8.7344 C 38.2188 8.7344 46.2344 16.4922 46.9611 26.5000 Z M 8.9688 28.0000 C 8.9688 21.4844 12.0391 15.7422 16.8907 12.2735 L 23.6641 23.8281 C 22.3985 25.1406 21.8126 26.5703 21.8126 28.0937 C 21.8126 29.5703 22.3751 30.9297 23.6641 32.2891 L 16.7266 43.6328 C 11.9922 40.1406 8.9688 34.4688 8.9688 28.0000 Z M 25.1172 28.0703 C 25.1172 26.4766 26.4766 25.2344 27.9766 25.2344 C 29.5704 25.2344 30.8829 26.4766 30.8829 28.0703 C 30.8829 29.6406 29.5704 30.9297 27.9766 30.9297 C 26.4766 30.9297 25.1172 29.6406 25.1172 28.0703 Z M 28.0000 47.2656 C 24.8829 47.2656 21.9766 46.5391 19.4219 45.2735 L 26.3126 34 C 27.0391 34.1875 27.5313 34.2344 27.9297 34.2344 C 30.6485 34.2344 32.8047 32.5703 33.8829 29.5469 L 46.9611 29.5469 C 46.2109 39.5078 38.1953 47.2656 28.0000 47.2656 Z"/>
                        </svg>
                    </li>
                    <li>
                        <svg viewBox="0 0 512 512">
                            <rect y="228" width="512" height="56"/>
                            <rect x="228" width="56" height="512"/>
                        </svg>
                    </li>
                </ul>
            </nav>


        <footer>

        </footer>
        <script src="js/mouse.js"></script>
        <script src="js/buttons.js"></script>
        <script src="js/run.js"></script>
    </body>
</html>