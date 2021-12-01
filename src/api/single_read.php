
<?php

include_once 'database.php';
include_once 'toy.php';
$database = new Database();
$db = $database->getConnection();
$item = new Employee($db);
$item->id = isset($_GET['id']) ? $_GET['id'] : die();
$item->getSingleEmployee();
if($item->name != null){

// create array
    $emp_arr = array(
        "id" => $item->id,
        "name" => $item->name,
        "price" => $item->price
    );

    http_response_code(200);
    echo json_encode($emp_arr);
}
else{
    http_response_code(404);
    echo json_encode("Toy not found.");
}
?>