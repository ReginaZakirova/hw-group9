    <div class="footer1">
	<?

        // считаем количество слов на странице
        $kol_vo_slov_na_stranitse=0;
        $kol_vo_glasnih_bukv=0;
        For ($i=-1;$i<count($massiv_soder_str);$i++){
            $massiv_slov=explode(' ',$massiv_soder_str[$i]);
            For ($j=-1;$j<count($massiv_slov);$j++) {  // тут перебераем подмассив со словами
                if ((!is_null($massiv_slov[$j])) and ($massiv_slov[$j] !=='')){
                    $kol_vo_slov_na_stranitse= $kol_vo_slov_na_stranitse+1;
                   // echo "<br> Это слово ".$j." = ".$massiv_slov[$j];
                    //  $bukvy_slova= explode("", $massiv_slov[$j]);
                    $bukvy_slova=preg_split('//u',$massiv_slov[$j],-1,PREG_SPLIT_NO_EMPTY); // только так получилось избавиться от ?  в str_split
                    // $bukvy_slova=str_split($massiv_slov[$j]);       // массив где содержатся б
                    For ($u=-1;$u<count($bukvy_slova);$u++) {  // тут перебираем буквы слов
                        //  echo "<br>".iconv("UTF-8", "windows-1251", $bukvy_slova[$u]);
                        $glsnie = array('a', 'e', 'ё', 'и', 'о', 'у', 'ы', 'э', 'ю', 'я');
                        for ($o = -1; $o < count($glsnie ); $o++) {  // для перебора ГЛАСНЫХ и проверки
                            if ($bukvy_slova[$u]===$glsnie[$o] and $bukvy_slova[$u]!==NULL){
                                $kol_vo_glasnih_bukv= $kol_vo_glasnih_bukv+1;
                                //    echo "<br> Это гласня буква " . $glsnie[$o];
                            }
                        }
                    }
                }
            }
        }
        echo "<br>В блоке main на данной странице ".$kol_vo_slov_na_stranitse." слова.";
        echo "<br>В блоке main на данной странице ".$kol_vo_glasnih_bukv." гласных букв<br>";
        // 4 задание
        $nachalo = strtotime("17-02-1993"); // моя дата рождения
        $kones = strtotime(date("d-m-Y"));
        $datediff = $kones - $nachalo;
        echo "Количество дней между текущей датой и датой рождения = " . round($datediff / (60 * 60 * 24)); //делим нк количество секунд в день

        ?>
		</div>