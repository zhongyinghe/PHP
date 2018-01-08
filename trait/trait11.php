<?php
//功能:trait属性和class的属性冲突
trait PropertiesTrait {
    public $same = true;
    public $different = false;
}

class PropertiesExample {
    use PropertiesTrait;
    public $same = true; // PHP 7.0.0 后没问题，之前版本是 E_STRICT 提醒
    public $different = false; // 致命错误
}

//探讨:PropertiesExample的$different是否和trait的值相同就没有问题?
$o = new PropertiesExample();
var_dump($o->same);
echo "\n";
var_dump( $o->different);

//结论:PropertiesExample的different值和trait的different值相同就没有问题，不同则报错
?>