<?php 

//功能:当前方法覆盖trait方法
trait HelloWorld {
public function sayHello() {
    echo 'Hello World!';
}
}

class TheWorldIsNotEnough {
    use HelloWorld;
    public function sayHello() {
        echo 'Hello Universe!';
    }
}

$o = new TheWorldIsNotEnough();
$o->sayHello();

?>