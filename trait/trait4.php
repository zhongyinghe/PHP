<?php 
//功能:方法冲突解决示例

trait A {
	public function smallTalk() {
		echo 'a';
	}

	public function bigTalk() {
		echo 'A';
	}
}

trait B {
	public function smallTalk() {
		echo 'b';
	}

	public function bigTalk() {
		echo 'B';
	}
}

class Talk {
	use A,B {
		B::smallTalk insteadof A;
		A::bigTalk insteadof B;
	}
}

class Al_Talk {
	use A,B {
		B::smallTalk insteadof A;
		A::bigTalk insteadof B;
		B::bigTalk as talk;  //as 操作符来定义别名
	}
}

$t = new Talk();
$t->smallTalk();
$t->bigTalk();
echo "\n";

$al = new Al_Talk();
$al->smallTalk();
$al->bigTalk();
$al->talk();
echo "\n";
?>