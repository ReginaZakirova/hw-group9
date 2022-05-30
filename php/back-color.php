<?php
if (isset($_GET['color'])){
    $color = urldecode($_GET['color']);
}
elseif (isset($_COOKIE['color'])){
    $color = urldecode($_COOKIE['color']);
}
else{
    $color = '#bbcbe5';
}
setcookie('color', $color , time() + 3600 * 24 * 7);
?>
<style>
    body{
        background-color: <?php echo $color;?>;
    }
</style>
