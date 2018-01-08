<?php 
//功能:使用as语法来调整方法的访问控制

trait HelloWorld {
	public function sayHello() {
		echo "Hello World!";
	}
}

class MyClass {
	use HelloWorld {
		sayHello as protected;
	}
}

$o = new MyClass();
$o->sayHello();

class MyClass2 {
    use HelloWorld { sayHello as private myPrivateHello; }
}

//探讨:能够调用原先的sayHello吗?
$o2 = new MyClass2();
$o2->sayHello();
//结果:print Hello World!
//结论:是可以调用原先sayHello()方法的
$o2->myPrivateHello();//不能够调用私有方法

?>