<?php
include '../connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD operation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>


<div class="container">
    <ul class="nav nav-tabs mt-2 justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="../toy/display.php">Toys</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="display.php">Stores</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
               aria-expanded="false">Static</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="../about.html">About</a>
                <a class="dropdown-item" href="../contacts.html">Contacts</a>
                <div class="dropdown-divider"></div>
            </div>
        </li>

    </ul>

    <div class="text-center">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">ADD Store</a></button>
    </div>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Store name</th>
            <th scope="col">Store address</th>
            <th scope="col">Operations</th>

        </tr>
        </thead>
        <tbody>

        <?php
        $sql = "select * from `stores`";
        $result = mysqli_query($con, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['ID'];
                $name = $row['name'];
                $address = $row['address'];
                echo '<tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . $address . '</td>
                    <td>
                        <button class = "btn btn-primary"><a href="update.php?updateid=' . $id . '" class="text-light">Update</a></button>
                        <button class = "btn btn-danger"> <a href="delete.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
                    </td>   
                </tr>';
            }
        }
        ?>


        </tbody>
    </table>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>