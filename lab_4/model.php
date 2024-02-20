<?php

class InventoryModel {

    function OpenCon() {
        $conn = new mysqli("localhost", "root", "", "inventory_management");
        return $conn;
    }

    function insertProduct($conn, $table, $productID, $productName, $productCategory, $productPrice, $productQuantity) {


        $sql = "INSERT INTO $table (ID, name, category, price, quantity) 
                VALUES ($productID, '$productName', '$productCategory', $productPrice, $productQuantity )";

        $result = $conn->query($sql);
        return $result;
    }

    function closeConnection($conn) {
        $conn->close();
    }
}

?>
