<?php 
//功能:trait中可以使用抽象成员方法
trait Hello {
	public function sayHello() {
		echo 'Hello '.$this->getWorld();
	}

	abstract public function getWorld();
}

class MyHelloWorld {
	private $world;
	use Hello;
	public function getWorld() {
		return $this->world;
	}

	public function setWorld($val) {
		$this->world = $val;
	}
}

$o = new MyHelloWorld();
$o->setWorld("World!");
$o->sayHello();

?>