    <footer class="footer">
        <div style="height: 100%">
                <?
                    if($_SERVER['REQUEST_URI'] == '/index.php') $str = $text_about_me.implode(' ',$text_review);
                    else $str = file_get_contents($_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI']);
                    $str = strip_tags($str);
                    $arr_str = explode(' ',$str);
                    $arr_str = array_diff($arr_str, ['',"\r\n", 0, false, NULL]);
                    $strlen = mb_strlen(implode('',$arr_str));
                    $str = str_replace(['а','А','е','Е','ё',"Ё","и","И","о",'О','у','У','ы','Ы','э','Э','ю','Ю','я','Я'],'',implode('',$arr_str));
                ?>
            <p> На странице <? echo $strlen - mb_strlen($str); ?> гласных букв и <? echo count($arr_str); ?> слов </p>
            <p> (Но это не точно)</p>   
            <a href="https://vk.com/gangstaarean19" target="_blank"><img class="soc_net_img" src="/img/vk.png"></a>
            <a href="https://t.me/Zikkich" target="_blank"><img class="soc_net_img" src="/img/tg.png"></a>
        </div>
    </footer>
    </body>
</html>