#!/usr/bin/env php
<?php


use Sorter\Sorter;


require_once __DIR__ . "/vendor/autoload.php";


$arr = "5,2,3, 6, 1,4";
$sorter = new Sorter($arr);
$sort = $sorter->sort()->asc();
var_dump($sort);

$arr = "e,b,c, f, a,d";
$sorter = new Sorter($arr);
$sort = $sorter->sort()->asc();
var_dump($sort);

$arr = [5,2,3,6,1,4];
$sorter = new Sorter($arr);
$sort = $sorter->sort()->desc();
var_dump($sort);
