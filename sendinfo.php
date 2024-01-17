<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // The message
    $name = $_GET["name"];
    $email = $_GET["email"];
    $phone_number = $_GET["number"];
    $company = $_GET["company"];
    $full_message = $name + '\n\r' + $email + '\n\r' + $phone_number + '\n\r'+$company;
    $subject = 'Someone just emailed you from your own site';
    // Send
    mail('badr.samane@usmba.ac.ma', $subject, $full_message);
  ?>

  Your mail has been sent.
</body>
</html>