<?php
interface A{
    public function hello();
    public function bye();
}

class B implements A{
    public function hello(){
        echo "hello";
    }
    public function bye(){
        echo "bye";
    }
}

?>

<?php
    /*interface Geo{
        public $lenght;
        public function perimetr();
        public function ploshad();
    }

    class triangle implements Geo{
        public $lenght;
        public function __construct($lenght){
            $this->lenght = $length;
        }
        public function perimetr(){
            return $this->lenght * 3;
        }
        public function ploshad(){
            return $this->lenght * $this->lenght * sqrt(3)/4;
        }
    }

    class square implements Geo{
        public $lenght;
        public function __construct($lenght){
            $this->lenght = $length;
        }
        public function perimetr(){
            return $this->lenght * 4;
        }
        public function ploshad(){
            return $this->lenght * $this->lenght;
        }
    }

    class fiveangle implements Geo{
        public $lenght;
        public function __construct($lenght){
            $this->lenght = $length;
        }
        public function perimetr(){
            return $this->lenght * 5;
        }
        public function ploshad(){
            return $this->lenght * $this->lenght * 5 * sqrt(3)/4;
        }
    }*/ 
?>

<?php
class Session{
    public function __constract(){
        session_start();
    }

    public function add($key , $value){
        $_SESSION[$key] = $value;
    }

    public function get($key){
        if($_SESSION[$key]){
            return $_SESSION[$key];
        }
    }
    public function delete($key){
        if($_SESSION[$key]){
            unset($_SESSION[$key]);
        }
    }

    public function check(){
        if(empty($_SESSION)){
            return 'пусто';
        }
        else return 'объявлен';
    }
}
?>


<?php
    class arrays{
        public $array=[];
        public $index;
        public $lenght;
        public function __construct($index=0, $lenght=10){
            $this->index = $index;
            $this->lenght = $lenght;
            for( ; $lenght!=0; $lenght--){
                $this->array[$index] = mt_rand(0,100);
                $index++;
            }
            echo '<pre>';
            print_r($this->array);
            echo '</pre>';
        }

        public function find($k){
            foreach($this->array as $key=>$value){
                if($value == $k){
                    return $key;
                }
            }
        }

        public function sort(){
            $k = false;
            while(!$k){
                $k = true;
                for($key=$this->index; $key<=$this->index + $this->lenght ; $key++){
                    if(isset($this->array[$key+1])){
                        $value = $this->array[$key];
                        if($value>$this->array[$key+1]){
                            $this->array[$key] = $this->array[$key+1];
                            $this->array[$key+1] = $value;
                            $k = false;
                        }
                    }
                }
            }
            echo '<pre>';
            print_r($this->array);
            echo '</pre>';
        }
    }

    $arr = new arrays(0,10);
    $arr->sort();
?>

<?php
class Date_Time{
    public $year;
    public $month;
    public $day;
    public $hour;
    public $minutes;
    public $seconds;
    public function __construct($date_time){ //Y-m-d H:i:s
        $this->year = mb_substr($date_time,0,4);
        $this->month = mb_substr($date_time,5,2);
        $this->day = mb_substr($date_time,8,2);
        $this->hour = mb_substr($date_time,11,2);
        $this->minutes = mb_substr($date_time,14,2);
        $this->seconds = mb_substr($date_time,17,2);
    }

    public function format($format){
        if($this->month<10){
            $this->month = "0".$this->month;
        }
        if($this->day<10){
            $this->day = "0".$this->day;
        }
        if($this->hour<10){
            $this->hour = "0".$this->hour;
        }
        if($this->minutes<10){
            $this->minutes = "0".$this->minutes;
        }
        if($this->seconds<10){
            $this->seconds = "0".$this->seconds;
        }
        $format = str_replace('Y', $this->year, $format);
        $format = str_replace('m', $this->month, $format);
        $format = str_replace('d', $this->day, $format);
        $format = str_replace('H', $this->hour, $format);
        $format = str_replace('i', $this->minutes, $format);
        $format = str_replace('s', $this->seconds, $format);
        return $format;
    }

    public function addDay($count){
        if($count>=31){
            $count = $count%31;
            $this->month = $this->month+floor($count/31);
        }
        $this->day = $this->day+$count;
        if($this->day>31){
            $this->day -=31;
            $this->month = $this->month+1;
        }
        if($this->month>12){
            $this->year = $this->year+1;
            $this->month -=12;
        }
    }

    public function diff($another){
        $year = $this->year - $another->year;
        $month = $this->month - $another->month;
        $day = $this->day - $another->day;
        $hour = $this->hour - $another->hour;
        $minutes = $this->minutes - $another->minutes;
        $seconds = $this->seconds - $another->seconds;
        if($seconds<0){
            $seconds +=60;
            $minutes -=1;
        }
        if($minutes<0){
            $minutes +=60;
            $hour -=1;
        }
        if($hour<0){
            $hour +=24;
            $day -=1;
        }
        if($day<0){
            $day +=31;
            $month -=1;
        }
        if($month<0){
            $month +=12;
            $year -=1;
        }
        echo "$year $month $day $hour $minutes $seconds";
    }

    public function who($another){
        if($this->year>$another->year) return "Превая больше";
        elseif($another->year>$this->year) return "Вторая больше";

        if($this->month>$another->month) return "Превая больше";
        elseif($another->month>$this->month) return "Вторая больше";

        if($this->day>$another->day) return "Превая больше";
        elseif($another->day>$this->day) return "Вторая больше";

        if($this->hour>$another->hour) return "Превая больше";
        elseif($another->hour>$this->hour) return "Вторая больше";

        if($this->minutes>$another->minutes) return "Превая больше";
        elseif($another->minutes>$this->minutes) return "Вторая больше";

        if($this->seconds>$another->seconds) return "Превая больше";
        elseif($another->seconds>$this->seconds) return "Вторая больше";

        echo 'Равны';
    }

}
$n = new Date_time('2022-12-26 12:14:52');
$n1 = new Date_time('2022-01-25 18:14:53');
//$n->addDay(13);
echo $n->format('d.m.Y H:i:s').'<br>';
$n->diff($n1);
?>