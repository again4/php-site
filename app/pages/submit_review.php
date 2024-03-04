<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if review field is set and not empty
    if (isset($_POST['review']) && !empty($_POST['review'])) {
        // Sanitize input
        $review = htmlspecialchars($_POST['review']);

        // Your database connection details
        $servername = "127.0.0.1:3306";
        $username = "root"; // Your MySQL username
        $password = ""; // Your MySQL password
        $dbname = "reviews"; // Your MySQL database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement
        $sql = "INSERT INTO reviews (review) VALUES ('$review')";

        // Execute SQL statement
        if ($conn->query($sql) === TRUE) {
            echo "Review submitted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close connection
        $conn->close();
    } else {
        echo "Review field is empty";
    }
} else {
    echo "Form not submitted";
}
?>
