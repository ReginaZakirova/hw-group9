<?
class Stringg{
    public $string;

    public function __construct($string){
        $this->string = $string;
    }

    public function find($needle){
        $chek = 0;
        $stack = false;
        $needle = mb_str_split($needle);
        foreach(mb_str_split($this->string) as $symbol){
            if($symbol == $needle[$chek]) {
                if($chek==count($needle)-1){
                    $stack = true;
                    return $stack;
                }
                $chek++;
            }
            else{
                $chek = 0;
            }    
        }
        return $stack;
    }

    public function copy($start, $end){
        $string='';
        foreach(mb_str_split($this->string) as $key=>$symbol){
            if($key>=$start && $key<=$end ){
                $string.=$symbol;
            }
        }
        return $string;
    }

    public function replace($needle, $stack){
        return $string=str_replace($needle, $stack, $this->string);
    }

    public function delete($needle){
        return $string=str_replace($needle, '', $this->string);
    }

    public function len(){
        $len = 0;
        $string = mb_str_split($this->string);
        foreach($string as $symbol){
            $len++;
        }
        return $len;
    }
}









class Car{
    public $model;
    public $type;
    public $color;

    public function __construct($model, $type, $color){
        $this->model = $model;
        $this->type = $type;
        $this->color = $color;
    }
    public function go(){
        echo 'go';
    }
    public function stop(){
        echo 'stop';
    }
    public function engine(){
        echo 'engine';
    }
}

class Animal{
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    public function go(){
        echo 'go';
    }
    public function eat(){
        echo 'eat';
    }
}

class Sova extends Animal{
    public $isFly = true;

    public function fly(){
        echo 'fly';
    }

}

class Lenivec extends Animal{
    public $speed;

    public function __construct($name, $color,$speed){
        parent::__construct($name, $color);
        $this->speed = $speed;
    }
    public function sleep(){
        echo 'sleep';
    }
}

class Lion extends Animal{
    public $roar;

    public function __construct($name, $color,$roar){
        parent::__construct($name, $color);
        $this->roar = $roar;
    }
    public function roar(){
        echo $this->roar;
    }
}
?>