<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['full_name']) && isset($_POST['email']) && isset($_POST['mobile'])) {
        // Get form data
        $full_name = $conn->real_escape_string($_POST['full_name']);
        $email = $conn->real_escape_string($_POST['email']);
        $mobile = $conn->real_escape_string($_POST['mobile']);

        // Insert data into database
        $sql = "INSERT INTO details (full_name, email, mobile_number) VALUES ('$full_name', '$email', '$mobile')";

        if ($conn->query($sql) === TRUE) {
            // On successful insert, generate the order ID and redirect to payment
            $order_id = "order_" . uniqid(); // Generate a unique order ID (this is a placeholder, you should get this from Razorpay)
            
            // Redirect to the payment page with the order ID
            header("Location: order.php?order_id=$order_id&name=$full_name&email=$email&mobile=$mobile");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error: Form data not received.";
    }
} else {
    echo "Error: Invalid request method.";
}

$conn->close();