<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Services_Twilio;

class SubmitController extends Controller
{
  public function newMessage() {
    if(isset($_POST['submit'])) {
      // sanitizing phone input
      $phone = preg_replace('/[^0-9]/', '', $_POST['phone']);
      $message = $_POST['message'];
      $sid = "AC07d67c743576a50fbed9c8e356ca754a";
      $token = "134f778045d70cbc585bf287839a26ff";

      // checks string length after sanitization
      if(strlen($phone) === 10) {
        // uses twilio-php module to send message
        $client = new Services_Twilio($sid, $token);
        $message = $client->account->messages->sendMessage(
        '+16264363761',
        '+1'.$phone,
        $message
      );
    }
  }
  header("Location: twilio-clone.blade.php");
}
}
?>
