<!DOCTYPE html>

<head>
    <title>Products</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>

    <h3>Insert Products</h3>

    <form name="products" id="products" action="insert.php"  method="POST">

        Product Name: <input type="text" name="prod_name" id="prod_name" class="form-control col-lg-4 col-sm-6" >
        Product Price: <input type="number" name="prod_price" id="prod_price" class="form-control col-lg-4 col-sm-6"></br>
        <button type="submit" class="btn btn-success">Insert</button>


    </form>

    <?php include_once('dbconn.php');

    $stmt = $conn->prepare("SELECT * FROM product");
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->execute();
    $result2 = $stmt->get_result();
    $conn->close();

    ?>

    <h3>Update Price of Products</h3>


    <form name="products" id="products" action="update.php" method="POST">

        <select name="product" id="product" class="form-control col-lg-4 col-sm-6">

            <option>Select Item</option>

            <?php
            if ($result->num_rows === 0) exit('No rows');
            while ($row = $result->fetch_assoc()) {

            ?>

                <option id="prod_id_<?php echo $row["id"] ?>" value="<?php echo $row["id"] ?>"><?php echo $row["prod_name"] ?></option>

            <?php
            }


            ?>

        </select>
        New Product Price: <input type="number" name="prod_price" id="prod_price" class="form-control col-lg-4 col-sm-6"></br>
        <button type="submit" class="btn btn-warning">Update</button>


    </form>
    <h3>Delete Product</h3>


    <form name="products" id="products" action="delete.php" method="POST">

        <select name="product" id="product" class="form-control col-lg-4 col-sm-6">

            <option>Select Item</option>

            <?php
            if ($result2->num_rows === 0) exit('No rows');
            while ($row = $result2->fetch_assoc()) {


            ?>

                <option id="prod_id_<?php echo $row["id"] ?>" value="<?php echo $row["id"] ?>"><?php echo $row["prod_name"] ?></option>

            <?php
            }

            ?>

        </select></br>
        <button type="submit" class="btn btn-danger">Delete</button>


    </form>

    <h3>Show Products</h3>


    <form name="products" id="products" action="printrecords.php" method="POST">

        <button type="submit" class="btn btn-primary">Show</button>

    </form>



</body>