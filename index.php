<?php
require 'vendor/autoload.php'; // If you're using Composer (recommended);
require_once('config.php');
use Twilio\Rest\Client;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SendSMS</title>
</head>
<body>
<?php
$account_sid = ACCOUNT_SID;
$auth_token = AUTH_TOKEN;
$twilio_number = TWILIO_NUMBER;
$client = new Client($account_sid, $auth_token);
$client->messages->create(
    TWILIO_SEND_NUMBER,
    array(
        'from' => $twilio_number,
        'body' => 'Hi, Miracle Developer @RAM '.date('Y-m-d h:i:s A')
    )
);
?>
</body>
</html>