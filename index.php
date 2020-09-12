<?php
//全局自动加载
require __DIR__ . '/vendor/autoload.php';
//调用类方法，打印返回字符串的长度
var_dump(strlen(ifbiu\http\Http::requertByGet('https://ifbiu.com')));
