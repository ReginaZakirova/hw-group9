<? require_once($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
<?
    function rand_string($n){
        $str_res = '';
        $str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        for($i=0;$i<$n;$i++){
            $str_res.= substr($str,mt_rand(0,strlen($str)),1);
        }
        return $str_res;
    }
?>
<style>
p{
    font-size:larger;
}
div{
    border: solid 1px;
    padding-left: 5px;
}
</style>
<main style="color: white;">
    <div>
        <p>Задание 1</p>
        <p>Дана строка «fact». Привести строку к виду «Fact».</p>
        <p>Ответ: 
            <?  
                $str = 'fact';
                echo strtoupper(mb_substr($str,0,1)).mb_substr($str,1);
            ?>
        </p>
    </div><br>
    <div>
        <p>Задание 2</p>
        <p>Дана строка, в которой содержится «фамилия, имя, отчество». Преобразовать строку к виду «имя, фамилия».<br>
            Например, исходная строка «Закирова Регина Артуровна», результирующая «Регина Закирова».</p>
        <p>Ответ: 
            <?  
                $str = 'Дорохов, Максим, Алексеевич';
                $arr = explode(", ", $str);
                echo $arr[1]." ".$arr[0];
            ?>
        </p>
    </div><br>
    <div>
        <p>Задание 3</p>
        <p>Дана строка «Привет, мир». Найти количество символа «и» в строке (регистр учитывать). </p>
        <p>Ответ: 
            <?  
                $str = 'Привет, мир';
                $counter = 0;
                $arr_str = mb_str_split($str);
                foreach($arr_str as $symb){
                    if(strtolower($symb) == "и") $counter++;
                }
                echo $counter;
            ?>
        </p>
    </div><br>
    <div>
        <p>Задание 4</p>
        <p>Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.</p>
        <p>Ответ: 
            <?  
            $str = 'html css php';
            $arr_str = explode(' ',$str);
            foreach($arr_str as $word){
                echo "$word ";
            }
            ?>
        </p>
    </div><br>
    <div>
        <p>Задание 5</p>
        <p>Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'.</p>
        <p>Ответ: 
            <?  
                $i = mt_rand(0,1);
                $str = 'hdfgsdbnfjfd'.(($i)?'.png':'');
                echo "$str <br>";
                echo (substr($str,-4)==".png") ? "Да": "Нет";
            ?>
        </p>
    </div><br>
    <div>
        <p>Задание 6</p>
        <p>Дана строка. Если в этой строке более 5-ти символов - вырежете из нее первые 5 символов, добавьте троеточие в конец и выведите на экран.<br>
            Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.</p>
        <p>Ответ: 
            <?
                echo "исходная строка <br>";
                $str = rand_string(mt_rand(1,20));
                echo "$str <br>";
                if(strlen($str)>5){
                    echo substr($str,5)."...";
                }
                else echo $str;
            ?>
        </p>
    </div><br>
    <div>
        <p>Задание 7</p>
        <p>Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.</p>
        <p>Ответ: 
            <? 
                echo "исходная строка <br>";
                $str = rand_string(mt_rand(20,50));
                echo "$str <br>";
                echo str_replace(["a",'b','c'],[1,2,3], $str);
            ?>
        </p>
    </div><br>
    <div>
        <p>Задание 8</p>
        <p>Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.</p>
        <p>Ответ: 
            <?
                $str = 'abc abc abc';
                echo strrpos($str,"b");
            ?>
        </p>
    </div><br>
    <div>
        <p>Задание 9</p>
        <p>Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.</p>
        <p>Ответ: 
            <?              
                $str = 'html css php';
                $arr_str = explode(' ',$str);
                foreach($arr_str as $word){
                    echo "$word ";
                }
            ?>
        </p>
    </div><br>
    <div>
        <p>Задание 10</p>
        <p>В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015). Определите количество дней между датами.</p>
        <p>Ответ: 
            <?  
                echo "Даты: 1996-03-22:2022-01-03 <br>";        
                $origin = new DateTime('2022-01-03');
                $target = new DateTime('1996-03-22');
                $interval = $target->diff($origin);
                echo $interval->format('%a Дней');
                echo '<br>';
                $x_origin = strtotime('2022-01-03');
                $x_target = strtotime('1996-03-22');
                echo $unterval = ($x_origin - $x_target)/86400 . " Дней";
            ?>
        </p>
    </div><br>
<? require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>