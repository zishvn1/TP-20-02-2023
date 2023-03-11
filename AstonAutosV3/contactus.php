<?php
session_start();
include("connect.php");
//disallows any and all access to this page UNLESS you sign in
if (!isset($_SESSION['id'])) {
    header("Location:login.php");
}
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $textarea = $_POST['textarea'];

    // Filtering and sanitizing the variables 
    $name = strip_tags(mysqli_real_escape_string($con, trim($name)));
    $email = strip_tags(mysqli_real_escape_string($con, trim($email)));
    $subject = strip_tags(mysqli_real_escape_string($con, trim($subject)));
    $textarea = strip_tags(mysqli_real_escape_string($con, trim($textarea)));

    // SQL injection prevention 
    $stmt = $con->prepare("INSERT INTO `contact_us` (name, email, subject, textarea) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $textarea);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<script> alert('Thank you for your inquiry, we aim to respond with 24 hours!'); window.location = 'contactus.php'</script>";
    } else {
        die(mysqli_errno($con));
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,intitial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <title>Contact Us</title>


</head>
<style>
    body {
        background-image: url("images/backgroundAboutUs.jpg");
        background-size: 100% 100%;
    }
</style>


<body>


    <?php
    include('navbar.php')
    ?>
    <!--start of the infomation on the contact us page-->
    <div class="containerContactUs">
        <div class="form">
            <div class="content">
                <form method="POST">
                    <h1 style="text-align:center">How can we help you?</h1>
                    <div class="user-details">

                        <div class="input-box">
                            <span class="details">Full Name</span>
                            <input type="text" name="name" placeholder="Enter your full name" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="email" id="email" name="email" placeholder="Email" required>
                        </div>

                        <div class="input-box">
                            <select name="subject">
                                <option value="Where is my order?">Choose option</option>
                                <option value="Where is my order?">Where is my order?</option>
                                <option value="Delivery Enquiry">Delivery Enquiry</option>
                                <option value="Order Query">Order Query</option>
                                <option value="Return Query">Return Query</option>
                                <option value="Account/Techincal Query">Account/Techincal Query</option>
                                <option value="Store Query">Store Query</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="input-box">
                            <input type="text" id="textarea" name="textarea" placeholder="Elaborate on your query.." style="height:200px" required>
                        </div>

                        <div class="input-field button">
                            <input type="submit" name="submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end of contact us -->
    <?php
    include('footer.php')
    ?>

</body>

</html>