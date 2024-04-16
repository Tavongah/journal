<?php
include 'dbconnect.php';

$id = $_GET['id'];
$stmt = $con->prepare('SELECT * FROM tbl_files WHERE id = ?');
$stmt->bind_param('i', $id); // Assuming id is an integer
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo 'File not found';
} else {
    $row = $result->fetch_assoc();
    if ($row && array_key_exists('filename', $row)) {
        echo '<h2>' . $row['filename'] . '</h2>';
    } else {
        echo 'File name not available';
    }
}
?>