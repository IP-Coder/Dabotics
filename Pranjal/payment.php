<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $buyer_name = $_POST["name"];
    $buyer_email = $_POST["email"];
    $buyer_phone = $_POST["mobile"];
    $payment_id = $_POST["payment_id"];
    $payment_purpose = $_POST["payment_purpose"];
    $pay_amount = $_POST["pay_amount"];

    // Validate the data
    $url = "https://1uni.infomattic.com/api_upi_pg.php";

    # Define the data
    $accountID = "AID_2308141125571449";                                // Account ID
    $secret_key = "KEY_e113f5f566b2e3ec2b9016eeaa236450";               // Secret Key
/*    $payment_id = "Hello";                                        // Payment ID (40 characters max)
    $payment_purpose = "Chek";                                          // Purpose (30 characters max)
    $buyer_name = "Pranjals";                                           // Buyer name (30 characters max)
    $buyer_phone = "7388476701";                                        // Buyer phone number (10 digits)
    $buyer_email = "sdf@gmail.com";                                     // Buyer email (50 characters max)
    $pay_amount = "1";    */                                              // Amount (1-100000)


    # Put the data into an array
    $data = [
        "accountID" => $accountID,
        "secret_key" => $secret_key,
        "payment_id" => $payment_id,
        "payment_purpose" => $payment_purpose,
        "buyer_name" => $buyer_name,
        "buyer_phone" => $buyer_phone,
        "buyer_email" => $buyer_email,
        "pay_amount" => $pay_amount
    ];

    # Initialiaze the curl
    $ch = curl_init($url);

    # Setup request to send json via POST.
    $payload = json_encode(["pay_request" => $data]);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type:application/json']);

    # Return response instead of printing.
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    # Send request.
    $result = curl_exec($ch);

    curl_close($ch);

    # Convert the json response into array
    $api_response = json_decode($result, true);
    if ($api_response["response"]["code"] == 200) {
        header("Location: " . $api_response["response"]["pay_link"]);
    } else {
       echo "<pre>";
    print_r($api_response);
    echo "</pre>";
    }
}
