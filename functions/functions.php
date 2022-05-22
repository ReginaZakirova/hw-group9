<? require_once($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
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
    <p>Создать функцию, которая сравнивает два числа и возвращает наибольшее. </p>
    <p>Ответ (10 и 15): 
        <?  
            function diffrense($a, $b){
                echo ($a>$b)? $a : $b;
            }
            diffrense(10, 15);
        ?>
    </div><br>
    <div>
    <p>Задание 2</p>
    <p>Создать функцию, которая принимает длину двух катетов и возвращает значение гипотенузы прямоугольного треугольника.</p>
    <p>Ответ (3 и 4): 
        <?  
            function gippotenuza($a, $b){
                echo sqrt($a*$a+$b*$b);
            }
            gippotenuza(3,4);
        ?>
    </div><br>
    <div>
    <p>Задание 3</p>
    <p>Создать функцию, которая принимает одно число (10). В функции создать цикл, который будет увеличивать число в 10 раз и выводить его на экран.<br>
        Когда число будет больше 1 000 000, на экране должно появляться сообщение, что вы достигли предела.</p>
    <p>Ответ:<br> 
        <?  
            function f10($a=10){
                while($a<=1000000){
                    $a*=10;
                    echo "$a <br>";
                }
                echo "Вы достигли предела";
            }
            f10();
        ?>
    </div><br>
    <div>
    <p>Задание 4</p>
    <p>Создать функцию, в которой объявляется массив и случайными элементами.</p>
    <p>Ответ:<br> 
        <?  
            function arrayFill($N){
                $arr=[];
                for($i=1; $i<=$N; $i++){
                    $arr[] = mt_rand(-100,100);
                }
                pre($arr);
            }
            arrayFill(10);
        ?>
    </div><br>
    <div>
    <p>Задание 5</p>
    <p>Создать функцию, которая принимает массив и возвращает среднеарифметическое значение массива.</p>
    <p>Ответ:<br> 
        <?  
            function sredArray($arr){
                echo "Исходный массив: <br>";
                pre($arr);
                $count = 0;
                $sum = 0;
                foreach($arr as $num){
                    $count++;
                    $sum+=$num;
                }
                echo "Среднеарифметическое = ".$sum/$count;
            }
            echo "Исходный массив: <br>";
            $arr=[];
            for($i=1; $i<=10; $i++){
                $arr[] = mt_rand(-100,100);
            }
            sredArray($arr);
        ?>
    </div><br>9
    <div>
    <p>Задание 6</p>
    <p>Создать функцию, которая принимает строку. Вернуть количество слов с строке.</p>
    <p>Ответ ("Создать функцию, которая принимает строку") :<br> 
        <?  
            function lengt_str($str){
                $arr_str = explode(' ',$str);
                $arr_str = array_diff($arr_str, ['',"\r\n", 0, false, NULL]);
                $count=0;
                foreach($arr_str as $value){
                    $count++;
                }
                echo $count;
            }
            lengt_str("Создать функцию, которая принимает строку");
        ?>
    </div><br>
    <div>
    <p>Задание 7</p>
    <p>*Написать функцию, которая рассчитывает последовательность чисел Фибоначчи.</p>
    <p>Ответ (10 чисел): 
        <?  
            function fibo($N, $a=1,$b=1){
                if($N>0){
                    $N-=1;
                    echo "$b ";
                    fibo($N, $b, $a+$b);
                }
            }
            fibo(10);
        ?>
    </div><br>
    <div>
    <p>Задание 8</p>
    <p>Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами. </p>
    <p>Ответ:<br> 
        <?  
            function arr_fill_rand_num(array $arr, int $N){
                for(;$N>0;$N--){
                    $arr[] = mt_rand(0,1000);
                }
                return $arr;
            }
            pre(arr_fill_rand_num([], 10));
        ?>
    </div><br>
    <div>
    <p>Задание 9</p>
    <p>Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая посчитает количество слов строке.</p>
    <p>Ответ:<br> 
        <?  
            function str_lenght_9($str = 'HTML, CSS, PHP, BITRIX'){
                $str = explode(' ',$str);
                $str = array_diff($str, ['',"\r\n", 0, false, NULL]);
                $count=0;
                foreach($str as $value){
                    $count++;
                }
                echo $count;
            }
            str_lenght_9();
        ?>
    </div><br>
    <div>
    <p>Задание 10</p>
    <p>Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »).</p>
    <p>Ответ:<br> 
        <?  
            function reverse_str($str = 'HTML, CSS, PHP, BITRIX'){
                $new_str = '';
                foreach(str_split($str) as $char){
                    $new_str = $char.$new_str;
                }
                echo $new_str;
            }
            reverse_str();
        ?>
    </div><br>
    <div>
    <p>Задание 11</p>
    <p>Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет на экран длину строки.</p>
    <p>Ответ:<br> 
        <?  
            function lenght_str_chars($str = 'HTML, CSS, PHP, BITRIX'){
                $count=0;
                foreach(str_split($str) as $char){
                    $count++;
                }
                echo $count;
            }
            lenght_str_chars();
        ?>
    </div><br>
    <div>
    <p>Задание 12</p>
    <p>Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет каждую букву на новую строку</p>
    <p>Ответ:<br> 
        <?  
            function chars_br($str = 'HTML, CSS, PHP, BITRIX'){
                foreach(str_split($str) as $char){
                    if($char!=' ' && $char!=',' && $char!='.'){
                        echo "$char <br>";
                    }
                }
            }
            chars_br();
        ?>
    </div><br>
    <div>
    <p>Задание 13</p>
    <p>Посчитать сколько слов встречается в тексте (text.txt) и их количество</p>
    <p>Ответ:<br> 
        <?  
            $str = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/functions/text.txt');
            function count_words_in_str($str){
                $exep = [',', '.', '!', '?',':',';','"',"'",'(',')','\n','\r\n'];
                $str = str_replace($exep, ' ', $str);
                $str = explode(' ',$str);
                $str = array_diff($str, ['',"\r\n", 0, false, NULL]);
                $array_words = [];
                foreach($str as $word){
                    $word = trim($word);
                    if(array_key_exists($word,$array_words)){
                        $array_words[$word] = $array_words[$word]+1;
                    }
                    else $array_words[$word]=0;
                }
                pre($array_words);
            }
            count_words_in_str($str);
        ?>
    </div><br>
    <div>
    <p>Задание 14</p>
    <p>Волшебный мост</p>
    <p>Ответ: 
        <?  
            $num=mt_rand(1000,9999);
            echo "X = $num <br>";
            $max = [0,0];
            for($i=0;$num!= "0129" && $num%2929!=0 && $num>29; $i++){
                if($max[0]==$num) break;
                if($max[0]<$num){
                    $max[0] = $num;
                    $max[1] = $i;
                }
                $num-=29;
                if($num<=999){
                    while(strlen($num)!=4){
                        $num = '0'.$num;
                    }
                }
                $num = substr($num,2).substr($num,0,2);
            }
            echo "$max[0] $max[1]";
        ?>
    </div><br>



<? require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>