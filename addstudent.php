<?php
$name = $_POST["name"];
$email = $_POST["email"];
$birthday = $_POST["birthday"];
$gender = $_POST["gender"];
$class_id = $_POST["class_id"];
// luu vao db
// ket noi db
$host = "localhost";
$user = "root";
$pwd = "root";
$db = "t2207a";

$conn = new mysqli($host,$user,$pwd,$db);
if($conn->connect_error){
    die("Connect error...");
}
$sql = "insert into sinhvien(name,email,birthday,gender,class_id) values('$name','$email','$birthday','$gender',$class_id)";
if($conn->query($sql)){
    header("Location: database.php");
}else{
    echo "Error";
}


// chuyen ve trang danh sach
