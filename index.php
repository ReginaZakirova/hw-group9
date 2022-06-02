<? require_once('header.php'); ?>
    <main>
        <div class="lesson1">
            <div class="left">
                <img class='photo' src="img/IM.jpg">
            </div>
            <div class="right">
                <div class="fio"><h1> Максим Дорохов </h1></div>
                <div class="info">
                    <div class="infoAboutYourself"> 
                        <div class="textInfo">
                            <? 
                            $text_about_me = "В общем и целом, я довольно скучный. <br> 
                            Пришел на курсы подтянуть знания по битриксу и гит. <br>
                            Хобби нет, точно так же как и свободного времени для этого хобби. <br>
                            Работаю специалистом по штатным возможностям Б24.";
                            echo $text_about_me = '<span style="color: #2a04fb">'.substr($text_about_me,0,strpos($text_about_me,'.'))."</span>". substr($text_about_me,strpos($text_about_me,'.'));
                            ?> <br>
                        </div>
                    </div>
                    <div class="review">
                        <div class="textInfo">
                        <?
                        $text_review ="Все супер, пока предложений нет.";
                        $text_review = explode(' ', $text_review);
                        foreach($text_review as $key=>$word){
                            if($key%2 == 0){
                                echo (substr($word,-1)=='.' || substr($word,-1)==',')? "<span style='color: #2a04fb'>".substr($word,0,-1)."</span>".substr($word,-1) : "<span style='color: #2a04fb'> $word </span>";
                            }
                            else echo (substr($word,-1)=='.' || substr($word,-1)==',')? "<span style='color: #ef388d'>".substr($word,0,-1)."</span>".substr($word,-1) : "<span style='color: #ef388d'> $word </span>";
                        }
                        ?> <br> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<? require_once('footer.php'); ?>