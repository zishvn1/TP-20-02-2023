<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
//PHPMailer-master library file was found on GitHub. Link is below:
//https://github.com/PHPMailer/PHPMailer


include("connect.php");

// process the form submission from html 
if (isset($_POST['submit'])) {
  // get form data
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
  $message = mysqli_real_escape_string($con, $_POST['message']);

  // insert data into database
  $sql = "INSERT INTO contacts (email, first_name, last_name, message) VALUES ('$email', '$first_name', '$last_name', '$message')";
  if (mysqli_query($con, $sql)) {
    // send confirmation email
    $mail = new PHPMailer(true);
    try {
      //server settings, connecting the email to the code so it can access the email to send the confirmation email
      $mail->isSMTP();
      $mail->SMTPAuth = true;
      $mail->SMTPSecure = 'tls';
      $mail->Host = 'smtp-mail.outlook.com';
      $mail->Port = 587;
      $mail->Username = 'autosaston@outlook.com';
      $mail->Password = 'Gio9cash023';

      //recipients
      $mail->setFrom('autosaston@outlook.com', 'Aston Autos'); // from
      $mail->addAddress($email, $first_name . ' ' . $last_name); // to

      //content of email
      $mail->isHTML(true);
      $mail->Subject = 'Thank you for getting in touch';
      $mail->Body    = 'We have received your message, we will get back to you shortly.';

      $mail->send();
      
    } catch (Exception $e) {
      echo "Error sending confirmation email: " . $mail->ErrorInfo;
    }
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
}

// close database connection
mysqli_close($con);

?>
<html>
<form method="post" action="contactUs.php">
  <label>Email:</label>
  <input type="email" name="email" required><br><br>
  
  <label>First Name:</label>
  <input type="text" name="first_name" required><br><br>
  
  <label>Last Name:</label>
  <input type="text" name="last_name" required><br><br>
  
  <label>Message:</label>
  <textarea name="message" required></textarea><br><br>
  
  <input type="submit" name="submit" value="Submit">
</form>
</html>


