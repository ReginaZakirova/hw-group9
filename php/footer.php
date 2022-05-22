<?php
$vowel_chars = ['а','у','о','ы','и','э','я','ю','ё','е'];
$page_list = ['index.php', 'php/header.php', 'php/footer.php'];
$text = "";
foreach ($page_list as $page) {
    $arr = token_get_all(file_get_contents($page));
    foreach ($arr as $value){
        //Включаем в результирующую строку T_INLINE_HTML и T_CONSTANT_ENCAPSED_STRING и исключаем ссылки на *.php
        if (($value[0] == 318 || $value[0] == 320) && isset($value[1]) && substr($value[1], -4, 3) != "php" ){
            $text .= strip_tags($value[1]);
        }
    }
}
while(str_contains($text, "  ")){
    $text = str_replace("  ", " ", $text);
}
$vowel_count = 0;
foreach (mb_str_split($text, 1) as $value){
    if (in_array($value, $vowel_chars)){
        $vowel_count++;
    }
}
$words_count = substr_count($text, ' ') + 1;
?>
<footer class="footer__flex_container">
    <div class="footer__flex_item">
        <?php echo "На главной странице: $words_count слов и $vowel_count гласных";?>
    </div>
    <div class="footer__flex_item">
        © Константин Никитин, 2022
    </div>
    <div class="footer__telegram_button"></div>
    <div class="footer__flex_item">
        <a href="https://t-do.ru/k0nstantin_nikitin" target="_blank">
            Telegram
        </a>
    </div>
    <div class="footer__e-mail_button"></div>
    <div class="footer__flex_item">
        <a href="mailto:nikitin.auto@gmail.com">
            E-mail
        </a>
    </div>
</footer>