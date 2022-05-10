<?php
$cur_hour = date('H');
//$cur_hour = 0;
if ($cur_hour >= 8 && $cur_hour < 20)
    $day_night_style="day";
else
    $day_night_style="night";