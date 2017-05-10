#!/usr/bin/php
<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . './Num2reg.php';


$DATABASE = "";
$arg0 = array_shift($argv);

function usage() {
	global $arg0;
	echo "Usage: $argv0 <updatedb|number>\n";
}

$arg1 = array_shift($argv);
if ($arg1 == "-d") {
	$_db = array_shift($argv);
	if (!$_db) {
		usage(1);
		exit(1);		
	}
	$DATABASE = $_db;
	$cmd = array_shift($argv);
} else {
	$cmd = $arg1;
}



if (!$cmd) {
	usage();
	exit(1);
}



if ($cmd == "updatedb") {
	$nub2reg = new Num2reg($DATABASE, true);
	$nub2reg->updatedb();
	exit();
}

$nub2reg = new Num2reg($DATABASE, false);
$ret = $nub2reg->search($cmd);
if ($ret["err"]) {
	echo '#'.$ret["err"]."\n";
	exit(1);
}

//echo "reg_code\t".$ret["reg_code"]."\nregion\t".$ret["region"]."\noper\t".$ret["oper"]."\n";
echo $ret["reg_code"]."\n".$ret["region"]."\n".$ret["oper"]."\n";

