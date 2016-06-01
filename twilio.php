<?php include "./controllers/SubmitController.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/master.css">
</head>
<body>
  <div class="container">
    <h1>TWILIO CLONE</h1>
    <div>
      <form id="smsForm" method="post">
        <div class="form-group">
          <label for="phone">Recipient Phone</label>
          <input type="text" name="phone" placeholder="Enter phone number here" class="form-control">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea name="message" rows="8" cols="40" placeholder="Type message here" class="form-control"></textarea>
        </div>
        <input type="submit" name="submit" value="Send" class="btn btn-primary">
      </form>
    </div>
  </div>
</body>
</html>
