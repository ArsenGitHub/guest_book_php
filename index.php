<?php
error_reporting(E_ALL);

$db = mysqli_connect("MySQL-8.2","root","", 'world') or die();

$res = mysqli_query($db,"UPDATE * users");

var_dump($res);
