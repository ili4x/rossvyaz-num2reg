#!/usr/bin/php
<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . './Num2reg.php';


$num2reg = new Num2reg();
//$num2reg->updatedb();
$ret = $num2reg->search(89101234567);

var_dump($ret);

