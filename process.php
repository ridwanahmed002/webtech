<!-- process.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $formData = array(
        'firstName' => $_POST['firstName'],
        'lastName' => $_POST['lastName'],
        'address' => $_POST['address'],
        'city' => $_POST['city'],
        'zipCode' => $_POST['zipCode']
    );

    // Convert array to JSON
    $jsonData = json_encode($formData, JSON_PRETTY_PRINT);

    // Write JSON data into data.json file
    $filePath = '/opt/lampp/htdocs/webtech//data.json'; // Use the correct absolute path
    $result = file_put_contents($filePath, $jsonData);

    if ($result !== false) {
        echo 'Data successfully saved';
    } else {
        echo 'Failed to save data. Check file permissions or path.';
    }
} else {
    echo 'Invalid request method.';
}
?>