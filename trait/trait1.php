<?php 

//功能:优先顺序是当前类中的方法会覆盖 trait 方法，而 trait 方法又覆盖了基类中的方法。

class Base {
	public function sayHello() {
		echo "Hello ";
	}
}

trait SayWorld {
	public function sayHello() {
		parent::sayHello();
		echo "World!";
	}
}

class MyHelloWorld extends Base {
	use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();

?>