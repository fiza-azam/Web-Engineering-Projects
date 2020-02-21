<?php include_once('dbconn.php'); 

$stmt = $conn->prepare("INSERT INTO product (prod_name, prod_price) VALUES (?,?)");

$stmt->bind_param('si', $_POST['prod_name'], $_POST['prod_price']);

if ($stmt->execute()) {
    echo "Record updated!";
} else {
    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
}

$conn->close();

?>