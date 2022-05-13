<style>
<?php
$cur_hour = date('H');
//$cur_hour = 12;
if ($cur_hour >= 8 && $cur_hour < 20)
    include "css/day.css";
else
    include "css/night.css";
?>
</style>