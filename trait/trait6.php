<?php 
//功能:trait中能够使用trait

trait Hello {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait World {
    public function sayWorld() {
        echo 'World!';
    }
}

trait HelloWorld {
	use Hello, World;
}

class MyClass {
	use HelloWorld;
}

$o = new MyClass();
$o->sayHello();
$o->sayWorld();

?>