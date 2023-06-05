<?php
// TRAITS

// trait SomeLogic {
//     public $prop;

//     public function method() {
//         echo $this->prop;
//     }
// }

// trait SomeLogic2 {
//     public $prop;

//     public function method2() {
//         echo $this->prop;
//     }
// }

// class something {
//     use someLogic, SomeLogic2;
// }

// class something {
//     use someLogic;
// }

// $obj = new Something;
// $obj -> method();
// $obj -> method2();


// INTERFACE

// class Job {
    
//     private $logger;
//     public function __construct(Logger $logger){
//         $this->logger = $logger;
//     }
    
//     public function task() {
//         for($i=0; $i<10;$i++) {
//             $this->logger -> log($i);
//         }
//     }
// }

// interface Logger {
//     public function log($message);
// }

// class ConsoleLogger implements Logger {
//     public function log($message) {
//         echo $message . "\n";
//     }
// }

// class NothingLogger implements Logger {
//     public function log($message) {
//     }
// }

// $logger = 1;
// $logger = new ConsoleLogger();
// $logger = new NothingLogger();
// $job = new Job();
// $job -> task();

// MAGIC METHODS

// class Box {
//     public function __construct($num, $color) {
//         echo "object was created\n";
//         echo ($num . "\n");
//     }

//     public function __get($name) {
//         echo "$name is accessed\n";
//         return "hello\n";
//     }

//     public function __set($name, $value) {
//         echo "$name is given value $value\n";
//     }

//     public function __call($name, $params) {
//         echo "$name is called with\n";
//         var_dump($params);
//     }

//     public function __destruct() {
//         echo "object was destroyed\n";
//     }

//     public function __toString() {
//         return 'akhahg1234 to string\n';
//     }
// }
// $box1 = new Box(1, 'color');
// echo $box1 -> color;
// $box1->material = 'metal';
// $box1 -> nothing(1, 'hello');
// $box1 = 1;
// $box2 = new Box(2, 'asasd');
// echo $box1;


// TEST.PHP FAILIGA YHENDUS

// include 'test.php'; // ei kontrolli olemasolu ja kood jookseb edasi
// require 'test.php';   // on t2psem ja saab aru, kui pole - annab errori. KASUTA SEDA
// require_once 'test.php'; // n6utakse ainult yhel korral. muidu saab ka mitu korda n6uda.

