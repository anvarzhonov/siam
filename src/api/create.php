<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include_once 'database.php';
include_once 'toy.php';
$database = new Database();
$db = $database->getConnection();
$item = new Employee($db);



$item->name = $_GET['name'];
$item->price = $_GET['price'];

if($item->createEmployee()){
    echo 'Toy created successfully.';
} else{
    echo 'Toy could not be created.';
}
?>