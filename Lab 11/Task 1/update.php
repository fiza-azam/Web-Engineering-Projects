<?php include_once('dbconn.php'); 

$stmt = $conn->prepare("UPDATE product SET prod_price=? WHERE id=?");

$stmt->bind_param('ii', $_POST['prod_price'], $_POST['product']);

if ($stmt->execute()) {
    echo "Record updated!";
} else {
    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
}

$conn->close();

?>