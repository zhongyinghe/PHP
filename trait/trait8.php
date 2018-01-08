<?php 
//功能:trait的静态成员
trait Counter {
	public function inc() {
		static $c = 0;
		$c = $c + 1;
		echo "$c\n";
	}
}

class C1 {
	use Counter;
}

class C2 {
	use Counter;
}

//探讨:连续调用inc的输出是否连续增加?
//猜想:增加
$c1 = new C1();
$c1->inc();
$c1->inc();

//结果:1,2
//结论:是连续增加的。猜想正确

$c2 = new C2();
$c2->inc();

?>