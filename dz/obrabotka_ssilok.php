<?php
if ($_GET['id']==1){                                     // если нажата ссылка факт
    setcookie ('ssilk','Fakt');                          // записываем какая ссылка была нажата
   // echo "нажата ссылка Факт";
    header('Location: '."https://fact.digital/"); // переадресация
} elseif ($_GET['id']==2) {                             // если нажата ссылка битрикс
    setcookie ('ssilk','Bitrix');                       // записываем какая ссылка была нажата
    // echo "нажата ссылка Битрикс";
    header('Location: '."https://www.bitrix24.ru/"); // переадресация
}
?>


