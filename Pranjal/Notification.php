<?php

require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;

// hjhjhjhj
echo"I am notification";
function sendFCMMessageone($token, $tittle, $body)
{
    $token = 'cMedXkXYTfeXyL17w8zq5z:APA91bGEtcLbQJ60DKbvSSysuzAWIzoElK7iMgbNYUikOUl36QsZXNXPrfIQ7oCbJ81EnkY4IuxeZb_DPEI7DgSRo7RVPMHrPKEzcp-Ow1WesYhfpjp6BcXpOYzwqWw23kglxQKt7m6-';

    $notification = Notification::fromArray([
        'title' => "Tittle is :- $tittle",
        'body' => "Body is :- $body",
    ]);

    $message = CloudMessage::withTarget('token', $token)
        ->withNotification($notification);

    try {
        $factory = (new Factory)->withServiceAccount('serviceAccountCredentials.json');
        $messaging = $factory->createMessaging();

        $response = $messaging->send($message);
        echo 'Successfully sent FCM notification: ' . $response->error();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
function sendFCMMessage($token1, $tittle, $body)
{
    $token = "$token1";
    // '';

    $notification = Notification::fromArray([
        'title' => "$tittle",
        'body' => "$body",
    ]);

    $message = CloudMessage::withTarget('token', $token)
        ->withNotification($notification);

    try {
        $factory = (new Factory)->withServiceAccount('serviceAccountCredentials.json');
        $messaging = $factory->createMessaging();

        $response = $messaging->send($message);
        echo 'Successfully sent FCM notification: ' . $response->error();
    } catch (Exception $e) {
        echo $e->getMessage();
        // sendFCMMessageone($token, $tittle, $body);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $token = $data['token'];
    $tittle = $data['tittle'];
    $body = $data['body'];

    sendFCMMessage($token, $tittle, $body);

    $response = array('status' => 'success', 'message' => 'OTP sent successfully');
    echo json_encode($response);
}
