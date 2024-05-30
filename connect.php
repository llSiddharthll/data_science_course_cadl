<?php

require ('./vendor/autoload.php'); // Ensure the correct path to the Composer autoload file
    
use Razorpay\Api\Api;

// Database connection parameters
$servername = "localhost";
$username = "u720739811_cadl";
$password = "Fp!TD3=6";
$dbname = "u720739811_students";

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

            // Razorpay API credentials
            $key_id = 'rzp_live_UMJMaRjO1wNCxW'; //Production API
            $secret = '4orcBql8r9EWmELjOGg4SDVS'; //Production API
            // $key_id = 'rzp_test_pXCHzfPyRdYTmM'; //Development API
            // $secret = 'cjzLjgOnJSeztz7rKgQ35wLq'; //Development API

            $api = new Api($key_id, $secret);

            // Create an order
            $orderData = [
                'receipt' => uniqid(),
                'amount' => 9900, // Amount in paise (50000 paise = 500 INR)
                'currency' => 'INR',
                'payment_capture' => 1, // Auto capture
                'notes' => [
                    'key1' => 'value3',
                    'key2' => 'value2'
                ]
            ];

            try {
                $order = $api->order->create($orderData);
                $razorpay_order_id = $order['id']; // Store the Razorpay order ID
                echo "<script>var razorpay_order_id = '$razorpay_order_id';</script>"; // Pass the order ID to JavaScript
            } catch (Exception $e) {
                echo 'Error: ' . $e->getMessage();
            }

            echo "<script src='https://checkout.razorpay.com/v1/checkout.js'></script>";
            echo "<script>
                var options = {
                    'key': '$key_id', // Enter the Key ID generated from the Dashboard
                    'amount': '9900', // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                    'currency': 'INR',
                    'name': 'CADL', // Your business name
                    'image': 'https://cadl.in/public/website/favicon2.png',
                    'order_id': '$razorpay_order_id', // Dynamically set the order ID from PHP
                    'callback_url': 'https://eneqd3r9zrjok.x.pipedream.net/',
                    'prefill': {
                        'name': '$full_name', // Use the customer's name from the POST parameter
                        'email': '$email', // Use the customer's email from the POST parameter
                        'contact': '$mobile' // Use the customer's phone number from the POST parameter
                    },
                    'notes': {
                        'address': 'Razorpay Corporate Office'
                    },
                    'theme': {
                        'color': '#3399cc'
                    },
                    'handler': function (response){
                        // Redirect to WhatsApp group link
                        window.location.href = 'https://chat.whatsapp.com/JRIJYVnjG3vJBnyOZSEOsy';
                    },
                    'modal': {
                        'ondismiss': function() {
                            // Redirect to home page on modal close
                            window.location.href = '/';
                        }
                    }
                };
                var rzp1 = new Razorpay(options);
                rzp1.on('payment.failed', function(response) {
                    alert(response.error.code);
                    alert(response.error.description);
                    alert(response.error.source);
                    alert(response.error.step);
                    alert(response.error.reason);
                    alert(response.error.metadata.order_id);
                    alert(response.error.metadata.payment_id);
                
                    // Delay the redirect to allow time for alerts
                    setTimeout(function() {
                        window.location.href = '/';
                    }, 1000); // Adjust the delay time (in milliseconds) as needed
                });

                rzp1.open(); // Automatically open Razorpay panel
            </script>";
            
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
