<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    backgroundImage: {
                        "custom-radial":
                            "radial-gradient(at center center, #331174 0%, #070000 100%)",
                        "custom-linear":
                            "linear-gradient(180deg, #CE6E4E26 0%, #E928581C 100%)",
                    },
                },
            },
        }
    </script>
    <style>
        .custom-shadow {
            box-shadow:
  3.8px 3.8px 11.1px rgba(0, 0, 0, 0.18),
  10.4px 10.6px 30.8px rgba(0, 0, 0, 0.117),
  25px 25.6px 74.2px rgba(0, 0, 0, 0.09),
  83px 85px 246px rgba(0, 0, 0, 0.063)
;
        }
        .custom-radius{
            border-radius: 3rem;
        }
    </style>
</head>

<body>

    <?php
    require ('./vendor/autoload.php'); // Ensure the correct path to the Composer autoload file
    
    use Razorpay\Api\Api;

    // Razorpay API credentials
    $key_id = 'rzp_live_UMJMaRjO1wNCxW';
    $secret = '4orcBql8r9EWmELjOGg4SDVS';

    $api = new Api($key_id, $secret);

    // Retrieve GET parameters
    $order_id = $_GET['order_id'] ?? '';
    $name = $_GET['name'] ?? '';
    $email = $_GET['email'] ?? '';
    $mobile = $_GET['mobile'] ?? '';

    // Create an order
    $orderData = [
        'receipt' => 'rcptid_11',
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
    ?>

    <section class="w-[100vw] h-[100vh]  flex flex-col gap-4 justify-center items-center">

        <div class="w-full max-w-sm bg-gray-300 border border-gray-200 rounded-2xl custom-shadow">
            
                <img class="p-8 custom-radius" src="images/datascience.png" alt="product image" />
           
            <div class="px-5 pb-5">
                <h5 class="text-xl font-semibold tracking-tight text-gray-900 pb-5">Data Science Master Class</h5>
                <div class="flex items-center justify-between">
                    <span class="text-3xl font-bold text-gray-900">₹99*</span>
                    <a href="#"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                        id="rzp-button1">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="text-center">
            <h4 class="text-sm text-gray-400 font-semibold"><a href="" class="underline">Terms and Conditions</a> applied *</h4>
            <h4 class="text-sm text-gray-400 font-semibold">Read our <a href="" class="underline">refund policy</a> for more information</h4>
        </div>

    </section>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        var options = {
            "key": "<?php echo $key_id; ?>", // Enter the Key ID generated from the Dashboard
            "amount": "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "CADL", // Your business name
            "image": "https://cadl.in/public/website/favicon2.png",
            "order_id": razorpay_order_id, // Dynamically set the order ID from PHP
            "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
            "prefill": {
                "name": "<?php echo $name; ?>", // Use the customer's name from the GET parameter
                "email": "<?php echo $email; ?>", // Use the customer's email from the GET parameter
                "contact": "<?php echo $mobile; ?>" // Use the customer's phone number from the GET parameter
            },
            "notes": {
                "address": "Razorpay Corporate Office"
            },
            "theme": {
                "color": "#3399cc"
            },
            "handler": function (response){
                // Redirect to WhatsApp group link
                window.location.href = "https://chat.whatsapp.com/JRIJYVnjG3vJBnyOZSEOsy ";
            },
        };
        var rzp1 = new Razorpay(options);
        document.getElementById('rzp-button1').onclick = function (e) {
            rzp1.open();
            e.preventDefault();
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>

</html>