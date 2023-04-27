<?php
//$name = $_GET["name"];
$name = $_POST["name"];
echo $name;
$age = $_POST["age"];
echo $age;

header("Location: students.php");

//
$products = [
    [
        "name"=>"..",
        "price"=>100,
        "thumbnail"=>"images/...",
        "qty"=>1
    ]
];
