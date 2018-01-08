<?php
//功能:trait的静态方法
trait StaticExample {
    public static function doSomething() {
        return 'Doing something';
    }
}

class Example {
    use StaticExample;
}

echo Example::doSomething();
?>