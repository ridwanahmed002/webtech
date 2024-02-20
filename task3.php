<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Saving Form</title>
</head>

<body>

    <h2>Data Saving Form</h2>

    <form id="dataForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br>

        <button type="button" onclick="submitForm()">Submit</button>
    </form>

    <script>
    function submitForm() {
        // Get form data
        var formData = {
            name: document.getElementById('name').value,
            email: document.getElementById('email').value,
            age: document.getElementById('age').value
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