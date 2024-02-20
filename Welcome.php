<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Saving Form</title>
</head>

<body>

    <h2>Data Saving Form</h2>

    <form id="dataForm" onsubmit="event.preventDefault(); submitForm();">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required><br>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" required><br>

        <label for="zipCode">Zip Code:</label>
        <input type="text" id="zipCode" name="zipCode" required pattern="[0-9]{5}" title="Five-digit ZIP Code"><br>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>

    <script>
    function submitForm() {
        // Get form data
        var formData = {
            firstName: document.getElementById('firstName').value,
            lastName: document.getElementById('lastName').value,
            address: document.getElementById('address').value,
            city: document.getElementById('city').value,
            zipCode: document.getElementById('zipCode').value
        };

        // Convert data to JSON
        var jsonData = JSON.stringify(formData);

        // Save JSON data to file (data.json)
        var blob = new Blob([jsonData], {
            type: 'application/json'
        });
        var a = document.createElement('a');
        a.href = URL.createObjectURL(blob);
        a.download = 'data.json';
        a.click();
    }
    </script>

</body>

</html>