<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
//PHPMailer-master library file was found on GitHub. Link is below:
//https://github.com/PHPMailer/PHPMailer


/* the mailing system should work as it is tested and confirmed
if it does not work please ensure:

the email is correct: aautos2023@outlook.com
the password is correct: Gio9cash023

if they are correct and the mailer still does not work, then please change some text in your php.ini file 

xampp > php > php.ini

replace the your current text for [mail function] for the text below

[mail function]
; For Win32 only.
SMTP=smtp.office365.com
smtp_port=587
; For Win32 only.
sendmail_from = aautos2023@outlook.com
; For Unix only.  You may supply arguments as well (default: "sendmail -t -i").
sendmail_path = "C:\xampp\sendmail\sendmail.exe -t"
; Force the addition of the specified parameters to be passed as extra parameters
; to the sendmail binary. These parameters will always replace the value of
; the 5th parameter to mail().
mail.force_extra_parameters =
; Add X-PHP-Originating-Script: that will include uid of the script followed by the filename
mail.add_x_header=Off
; The path to a log file that will log all mail() calls. Log entries include
; the full path of the script, line number, To address and headers.
;mail.log =
; Log mail to syslog (Event Log on Windows).
;mail.log = syslog

; Outlook SMTP settings
smtp_ssl=auto
smtp_tls=auto
smtp_auth=login
smtp_user=aautos2023@outlook.com
smtp_pass=Gio9cash023


it should work, if not, please speak to zishan about it
*/






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
      $mail->Username = 'aautos2023@outlook.com';
      $mail->Password = 'Gio9cash023';

      //recipients
      $mail->setFrom('aautos2023@outlook.com', 'Aston Autos'); // from
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
  <body>
<div class="containerContactUs">
        <div class="form">
            <div class="content">
                <form method="post" action="contactUs.php">
                    <h1 style="text-align:center">How can we help you?</h1>
                    <div class="user-details">

                        <div class="input-box">
                            <span class="details">First Name</span> 
  <input type="text" name="first_name" placeholder="Enter your first name" required>
                        </div>
  
                        <div class="input-box">
                            <span class="details">Last Name</span> 
  <input type="text" name="last_name" placeholder="Enter your last name" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="email" id="email" name="email" placeholder="Email" required>
                        </div>

                      

                        <div class="input-box">
                            <input type="text" id="textarea" name="message" placeholder="Elaborate on your query.." style="height:200px" required>
                        </div>

                        <div class="input-field button">
                            <input type="submit" name="submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>
  </body>
</html>


