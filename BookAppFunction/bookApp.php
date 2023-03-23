<html>
  <button onclick="toggleForm()">Book a test drive</button>
  <div id="appointment-form" style="display:none;">
    <form method="post">
      <label for="first_name">First Name:</label>
      <input type="text" id="first_name" name="first_name" required>
      <br>
      <label for="last_name">Last Name:</label>
      <input type="text" id="last_name" name="last_name" required>
      <br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <br>
      <label for="date">Appointment Date:</label>
      <input type="date" id="date" name="date">
      <label for="time">Appointment Time:</label>
      <input type="time" id="time" name="time">
      <input type="submit" name="book" value="Book Appointment">
    </form>
  </div>
  
  <script>/*the javascript below toggles the form, so if users click "book a test drive". the form appears. 
  and if they change their mind, they can just click either "cancel" or the same button as before and the form 
  will get hidden.*/
    function toggleForm() {
      var form = document.getElementById("appointment-form");
      if (form.style.display === "none") {
        form.style.display = "block";
      } else {
        form.style.display = "none";
      }
    }
  </script>
</html>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master\src\Exception.php';
require 'PHPMailer-master\src\PHPMailer.php';
require 'PHPMailer-master\src\SMTP.php';
//PHPMailer-master library file was found on GitHub. Link is below:
//https://github.com/PHPMailer/PHPMailer

include("connect.php");

if (isset($_POST['book'])) {
    // get form data
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $time = mysqli_real_escape_string($con, $_POST['time']);
  
    // generates an 8 digit booking number which starts with AA
    $booking_number = 'AA' . substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 6);
  
    // insert data into database 
    $sql = "INSERT INTO appointments (email, first_name, last_name, date, time, booking_number) VALUES ('$email', '$first_name', '$last_name', '$date', '$time', '$booking_number')";
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
        $mail->Username = 'aautos2023@outlook.com';
        $mail->Password = 'Gio9cash023';
  
        //recipients
        $mail->setFrom('aautos2023@outlook.com', 'Aston Autos'); // from
        $mail->addAddress($email, $first_name . ' ' . $last_name); // to
  
        //content of email
        $mail->isHTML(true);
        $mail->Subject = 'Appointment Confirmation';
        $mail->Body = 'Your test drive has been scheduled for ' . $date . ' at ' . $time . ', please ensure to bring your driver\'s license with you. Your booking number is ' . $booking_number . '.<br><br>'
        . 'If for any reason you are unable to attend the appointment, please email us with your booking number to request a cancellation.';
        //dont test this more than 25 times a day or the email will get marked as spam and suspended!!

        $mail->send();
        
      } catch (Exception $e) {
        echo "Error sending confirmation email: " . $mail->ErrorInfo;
      }
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
