<?php

class InventoryModel {

    function OpenCon() {
        $conn = new mysqli("localhost", "root", "", "inventory_management");
        return $conn;
    }

    function insertProduct($conn, $table, $productName, $productCategory, $productPrice, $productQuantity) {
        $productName = $conn->real_escape_string($productName);
        $productCategory = $conn->real_escape_string($productCategory);

        $sql = "INSERT INTO $table (name, category, price, quantity) 
                VALUES ('$productName', '$productCategory', $productPrice, $productQuantity)";

        $result = $conn->query($sql);
        return $result;
    }

    function closeConnection($conn) {
        $conn->close();
    }
}

?>
