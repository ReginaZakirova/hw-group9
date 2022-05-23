<style>
<?php
function is_day():bool{
    $cur_hour = (int)date('H') + 2;
    //$cur_hour = 0;
    return $cur_hour >= 8 && $cur_hour < 20;
}
if (is_day())
    include "css/day.css";
else
    include "css/night.css";
?>
</style>