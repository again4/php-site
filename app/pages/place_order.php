<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if required fields are set and not empty
    if (isset($_POST['dish']) && isset($_POST['quantity'])) {
        // Sanitize inputs
        $dish = htmlspecialchars($_POST['dish']);
        $quantity = htmlspecialchars($_POST['quantity']);
        $comments = htmlspecialchars($_POST['comments']); // Optional

        // Your database connection details
        $servername = "mysql-db";
        $username = "root"; // Your MySQL username
        $password = "password"; // Your MySQL password
        $dbname = "orders"; // Your MySQL database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement
        $sql = "INSERT INTO orders (dish, quantity, comments) VALUES ('$dish', '$quantity', '$comments')";

        // Execute SQL statement
        if ($conn->query($sql) === TRUE) {
            echo "Order placed successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close connection
        $conn->close();
    } else {
        echo "Required fields are empty";
    }
} else {
    echo "Form not submitted";
}
?>
