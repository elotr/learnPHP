<?php

// muutujad algavad $ märgiga

// const HELLO_WORLD = 1;
// $num = 1;   //int
// $bar = 4.1; //float
// $num = 'HELLO_WORLD'; //string
// $num = HELLO_WORLD; //constant
// $num = true; //boolean
// $num = [1, 2, 3, 4, 5]; //array
// $num = 'world'; // ühekordsed jutumärgid - puhas string
// echo "hello \n $num"; // topeltjutumärgid - funktsioone, muutujaid, special characters ei muuuda tavaliseks tekstiks.
// $num = ['red' => 1,
//         'blue' => 2,
//         'green' => 3
//     ];
// $num = ['red' => 1,
//         100 => 2, 3,
//         200 => 4, 5,
//         'foo' => 'bar'
//     ];
// $num = 1;
// $num = 1 + 1;
// $num = 1 - 1;
// $num = 1 * 1;
// $num = 1 / 1;
// $num = 4 % 2;
// $num += 1;
// $num -= 1;
// $num *= 1;
// $num /= 1;
// $num %= 1;
// $num++;
// $num--;
// $num = $num**2; //astendamine exponent
// $num**=2;
// $num = true && false;
// $num = true || false;
// $num = 10 > 1;
// $num = 10 == 10;
// $num = '10' == 10;
// $num = '10' === 10;
// $num = '10' != 10;
// $num = '10' !== 10;
// $num = 'hello' . 'world'; //stringide liitmine
// $num .= 'World';
// var_dump($num);





// $num = 10;
// if($num > 10){
//     echo 'suurem';
// }
// elseif ($num < 10) {
//     echo 'väiksem';
// }
// else {
//     echo 'võrdne';
// }

// switch($num) {
//     case 1:
//         echo 'üks';
//     case 2:
//         echo 'kaks';
//         break;
//     default:
//         echo 'default';
//         break;
// }

// for($i=0; $i<10; $i++) {
//     echo "kordus $i\n";
// }

// // kuni tingimus täidetud, tee seda
// while ($num<10) {
//     echo "while loop";
// }

// // tee seda, kuni tingimus on täidetud
// do {
//     echo "do while";
// }
// while($num<10);



// /**
// * @param string $name Lisakommentaar
// * @return string
// */

// function hello(string $name):string {  // :string - kontrollib ka väljundit. tüüpi siiski ei pea määrama enam
//     return "hello $name";
// }

// $text = hello('minunimi');
// echo $text;

// // rekursiiv - funktsioon kutsub välja/käivitab iseenda
// function recursive($i) {
//     if($i>0) {
//         recursive($i-1);
//     }
//     echo $i;
// }
// recursive(10);


// KLASSID

class Box {
    private $width;     // private - ei saa kasutada klassist väljaspool
    protected $height;  // protected - 
    public $length;
    public $color;
    public $material;
    static $count;      // klassi muutuja - kõik objectid jagavad sama väärtust

    static function something() {
        echo self::$count;
    }

    public function open() {
        echo 'box is open';
    }
    public function close() {
        echo 'box is closed';
    }

    // private muutujaid saab kätte getter ja setter funktsioonidega
    public function setWidth($width) {
        if($width > 0) {
            $this -> width = $width;
        }
    }
    public function getWidth($width) {
            $this -> $width;
    }
}

$box_1 = new Box();
Box::$count = 1; // staatilised muutujad märgitakse kooloniga
var_dump($box_1 -> length);
//$box_1 -> width = 10;
//$box_1 -> height = 10;
$box_1 -> length = 10;
$box_1 -> color = 'red';
$box_1 -> material = 'wood';

var_dump($box_1);
$box_1 -> open();


$box_2 = new Box();
Box::$count = 2;
//$box_2 -> width = 20;
//$box_2 -> height = 20;
$box_2 -> length = 30;
$box_2 -> color = 'green';
$box_2 -> material = 'metal';

var_dump($box_2);
$box_2 -> open();


class MetalBox extends Box {
    public $material = 'metal';
    public $conductivity;

    public function electrify() {
        $this -> height = 10;
        //$this -> width = 10;    // ei saa kätte, sest width on klassis "Box" määratud private
        echo 'woosh';
    }

    public function open() {
        echo 'something else opened';
    }
}

$box_3 = new MetalBox();
Box::$count = 3;
$box_3 -> electrify();
$box_3 -> open();
var_dump($box_3);

var_dump($box_1::$count);
var_dump($box_2::$count);
var_dump($box_3::$count);
Box::something();