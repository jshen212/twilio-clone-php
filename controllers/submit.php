<?php

if(isset($_POST['submit'])) {
  require('./vendor/twilio/sdk/Services/Twilio.php');

  function newMessage() {
    $phone = preg_replace('/[^0-9]/', '', $_POST['phone']);
    $message = $_POST['message'];
    $sid = "AC07d67c743576a50fbed9c8e356ca754a";
    $token = "134f778045d70cbc585bf287839a26ff";

    if(strlen($phone) === 10) {
      $client = new Services_Twilio($sid, $token);
      $message = $client->account->messages->sendMessage(
      '+16264363761',
      '+1'.$phone,
      $message
    );
  } else {
    echo "Please resubmit phone in this format 123-123-1234 => 1231231234";
  }
}
newMessage();
}

?>
