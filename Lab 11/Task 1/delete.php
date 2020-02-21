<?php include_once('dbconn.php'); 

$stmt = $conn->prepare("DELETE FROM product WHERE id=?");

$stmt->bind_param('i', $_POST['product']);

if ($stmt->execute()) {
    echo "Record updated!";
} else {
    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
}

$conn->close();

?>