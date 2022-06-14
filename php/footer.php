<?php
function clear_text($text){
    while(str_contains($text, "  ")){
        $text = str_replace("  ", " ", $text);
    }
    return str_replace(['"', "'", '.', ',', '!', '?'], "", $text);
}
function word_count($text): int
{
    return substr_count(clear_text($text), ' ') + 1;
}
function vowel_count($text): int
{
    $vowel_chars = ['а','у','о','ы','и','э','я','ю','ё','е'];
    $vowel_count = 0;
    foreach (mb_str_split(clear_text($text), 1) as $value){
        if (in_array($value, $vowel_chars)){
            $vowel_count++;
        }
    }
    return $vowel_count;
}
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
$vowel_count = vowel_count($text);
$words_count = word_count($text);
?>
<footer class="footer__flex_container">
    <div class="footer__flex_item">
        <form>
            <label>
                Цвет фона:
                <input type="color" name="color" value=<?php echo $color?>>
            </label>
            <input type="submit" value="Изменить">
        </form>
    </div>
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