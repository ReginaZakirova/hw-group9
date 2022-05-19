<style>
<?php
$cur_hour = (int)date('H') + 2;
//$cur_hour = 0;
if ($cur_hour >= 8 && $cur_hour < 20)
    include "css/day.css";
else
    include "css/night.css";
?>
</style>