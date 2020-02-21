<?php include_once('dbconn.php');

$stmt = $conn->prepare("SELECT * FROM product");
$stmt->execute();
$result = $stmt->get_result();
$conn->close();

if ($result->num_rows === 0) exit('No rows');

?>


<!DOCTYPE html>

<head>
    <title>Products</title>
</head>

<body>

    <h1>Show Products</h1>


    <table border="1">
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
        </tr>

        <?php

        while ($row = $result->fetch_assoc()) {

        ?>

            <tr>
                <td>
                    <?php echo $row["id"] ?>
                </td>
                <td>
                    <?php echo $row["prod_name"] ?>
                </td>
                <td>
                    <?php echo $row["prod_price"] ?>
                </td>
            </tr>

        <?php
        }


        ?>



    </table>





</body>