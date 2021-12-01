
<?php
include_once 'database.php';
include_once 'toy.php';
$database = new Database();

$db = $database->getConnection();
$items = new Employee($db);
$records = $items->getEmployees();
$itemCount = $records->num_rows;
echo json_encode($itemCount);
if($itemCount > 0){
    $employeeArr = array();
    $employeeArr["body"] = array();
    $employeeArr["itemCount"] = $itemCount;
    while ($row = $records->fetch_assoc())
    {
        array_push($employeeArr["body"], $row);
    }
    echo json_encode($employeeArr);
}
else{
    http_response_code(404);
    echo json_encode(
        array("message" => "No record found.")
    );
}
?>