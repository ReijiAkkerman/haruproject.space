<article class="content_block">
    <div class="subblock">
        <div class="content_bar">
            <div class="date_time_bar">
                <ul></ul>
                <div class="date_time_subbar">
                    <ul class="date_time_bar_second">
                        <li><?php echo $row["date"]; ?></li>
                        <li><?php echo $row["time"] ?></li>
                    </ul>
                </div>
            </div>
            <h3><?php echo $row["header"]; ?></h3>
            <p><?php echo $row["text"]; ?></p>
        </div>
    </div>
</article>