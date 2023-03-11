<?php
session_start();
include("connect.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];


    // Filtering and sanitizing the variables for security
    $name = strip_tags(mysqli_real_escape_string($con, trim($name)));
    $email = strip_tags(mysqli_real_escape_string($con, trim($email)));
    $password = strip_tags(mysqli_real_escape_string($con, trim($password)));
    $phone = strip_tags(mysqli_real_escape_string($con, trim($phone)));
    $gender = strip_tags(mysqli_real_escape_string($con, trim($gender)));

    // SQL injection prevention 
    $stmt = $con->prepare("SELECT * FROM `users` WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script> alert('Email already in use'); window.location = 'signup.php'</script>";
        exit();
    } else {
        $stmt = $con->prepare("INSERT INTO `users` (name, email, password, phone, gender) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $email, $hashed_password, $phone, $gender);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            echo "<script> alert('Registration Successful'); window.location = 'login.php'</script>";
            exit();
        } else {
            die(mysqli_errno($con));
        }
    }
}
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
    <?php include 'adminheader.php' ?>

    <div class="containerAddInventory ">
        <div class="form signup">
            <div class="content">
                <span class="title">Add to Inventory </span>
                <form method="POST" autocomplete="off">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Make</span>
                            <input type="text" name="make" placeholder="Enter the Make" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Model</span>
                            <input type="text" name="model" placeholder="Enter the Model" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Price</span>
                            <input type="text" name="price" placeholder="Enter Price" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Year</span>
                            <input type="text" name="year" placeholder="Enter Year" required>
                        </div>
                    </div>
                    <div class="input-details">
                        <input type="radio" value="Petrol" name="fueltype" id="dot-1">
                        <input type="radio" value="Diesel" name="fueltype" id="dot-2">
                        <input type="radio" value="Electric" name="fueltype" id="dot-3">
                        <input type="radio" value="Hybrid" name="fueltype" id="dot-4">
                        <span class="gender-title">Select a Fuel Type:</span>
                        <div class="category">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="gender">Petrol</span>
                            </label>
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="gender">Diesel</span>
                            </label>
                            <label for="dot-3">
                                <span class="dot three"></span>
                                <span class="gender">Electric</span>
                            </label>
                            <label for="dot-4">
                                <span class="dot four"></span>
                                <span class="gender">Hybrid</span>
                            </label>
                        </div>
                    </div>
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Color</span>
                            <input type="text" name="color" placeholder="Enter Colour" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Break Horse Power</span>
                            <input type="text" name="breakhorsepower" placeholder="Enter the Break Horse Power" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Quantity</span>
                            <input type="text" name="quantity" placeholder="Enter Quantity" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Mileage</span>
                            <input type="text" name="mileage" placeholder="Enter Mileage" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Condition of Car</span>
                            <input type="text" name="conditionofcar" placeholder="Enter Condition" required>
                        </div>
                    </div>
                    <div class="input-details">
                        <input type="radio" value="ALL-WHEEL DRIVE" name="drivetype" id="dot-1">
                        <input type="radio" value="FOUR-WHEEL DRIVE" name="drivetype" id="dot-2">
                        <input type="radio" value="FRONT-WHEEL DRIVE" name="drivetype" id="dot-3">
                        <input type="radio" value="REAR-WHEEL DRIVE" name="drivetype" id="dot-4">
                        <span class="gender-title">Select a Drive Type:</span>
                        <div class="category">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="gender">AWD</span>
                            </label>
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="gender">4WD</span>
                            </label>
                            <label for="dot-3">
                                <span class="dot three"></span>
                                <span class="gender">FWD</span>
                            </label>
                            <label for="dot-4">
                                <span class="dot four"></span>
                                <span class="gender">RWD</span>
                            </label>
                        </div>
                    </div>

                    <div class="input-details">
                        <input type="radio" value="Automatic" name="transmission" id="dot-1">
                        <input type="radio" value="Manual" name="transmission" id="dot-2">
                        <span class="gender-title">Select a Transmission Type:</span>
                        <div class="category">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="gender">Automatic</span>
                            </label>
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="gender">Manual</span>
                            </label>

                        </div>
                    </div>

                    <div class="button">
                        <input type="submit" value="Register">
                        <input type="reset" value="Clear" />
                    </div>
            </div>


            </form>
        </div>
        <div class="login-signup">
            <span class="text">Already have an account?<a href="login.php" class="text signup-link"> Login</a></span>
        </div>
    </div>
    </div>




</body>

</html>