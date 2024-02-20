<?php

include_once 'model.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $productID = trim($_POST["productID"]);
    $productName = trim($_POST["productName"]);
    $productCategory = $_POST["productCategory"];
    $productPrice = floatval($_POST["productPrice"]);
    $productQuantity = intval($_POST["productQuantity"]);

    $errors = array();

    if (empty($productID)) {
        $errors["productID"] = "Product ID is required";
    }
    if (empty($productName)) {
        $errors["productName"] = "Product Name is required";
    }

    if (empty($productCategory)) {
        $errors["productCategory"] = "Product Category is required";
    }

    if ($productPrice <= 0) {
        $errors["productPrice"] = "Product Price must be greater than 0";
    }

    if ($productQuantity < 1) {
        $errors["productQuantity"] = "Product Quantity must be at least 1";
    }

    if (empty($errors)) {

        include_once 'model.php';

        $model = new InventoryModel();
        $conn = $model->OpenCon();

        $result = $model->insertProduct($conn, 'product', $productID, $productName, $productCategory, $productPrice, $productQuantity);

        $model->closeConnection($conn);

        if ($result) {
            echo "Product successfully added to the database";
        } else {
            echo "Error adding product to the database";
        }
    } else {
        echo "Validation Errors: <br>";
        foreach ($errors as $error) {
            echo "- $error <br>";
        }
    }
} else {
    header("Location: main.php");
    exit();
}
?>
