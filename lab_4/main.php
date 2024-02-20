<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product Form</title>
</head>
<body>

    <form action="process.php" method="post">

        <table align="center">
            <tr>
                <td colspan="2" align="center">
                    <h2>Add Product Form</h2>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="productID">Product ID:</label>
                </td>
                <td>
                    <input type="text" id="productID" name="productID" required>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="productName">Product Name:</label>
                </td>
                <td>
                    <input type="text" id="productName" name="productName" required>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="productCategory">Product Category:</label>
                </td>
                <td>
                    <select id="productCategory" name="productCategory" required>
                        <option value="electronics">Electronics</option>
                        <option value="clothing">Clothing</option>
                        <option value="furniture">Furniture</option>
                        <option value="books">Books</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="productPrice">Product Price:</label>
                </td>
                <td>
                    <input type="number" id="productPrice" name="productPrice" min="0.01" step="0.01" required>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="productQuantity">Product Quantity:</label>
                </td>
                <td>
                    <input type="number" id="productQuantity" name="productQuantity" min="1" required>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="productDescription">Product Description:</label>
                </td>
                <td>
                    <textarea id="productDescription" name="productDescription" rows="4" required></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">Add Product</button>
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>

    </form>

</body>
</html>
