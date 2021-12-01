<?php
include '../connect.php';
$id = $_GET['updateid'];
$sql = "select * from `stores` where id= $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$address = $row['address'];




if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];

    $sql = "update `toys` set id = $id, name = '$name', address = '$address' where id = $id";
    $result =  mysqli_query($con, $sql);
    if ($result) {
        // echo "Data inserted successfully";
        header('location: display.php');
    } else {
        die(mysqli_error($con));
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Crud Operation</title>
</head>

<body>
    <div class="container my-5">
        <form method="POST">

            <div class="form-group">
                <label>Store name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter store name" name="name" value=<?php echo $name; ?>>
            </div>

            <div class="form-group">
                <label>Store address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter toy price" name="address" value=<?php echo $address; ?>>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

</body>

</html>