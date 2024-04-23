<?php
include 'db.php'; 

$db = new db();
$result = $db->getAllAdmins();

if ($result->num_rows > 0) {
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No users found.";
}

$db->closeConn();
?>
