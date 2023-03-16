<?php
session_start();
include("connect.php");
if (!isset($_SESSION['id'])) {
    header("Location:adminlogin.php");
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $make = $_POST['make'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $year = $_POST['year'];
    $fueltype = $_POST['fueltype'];
    $color = $_POST['color'];
    $breakhorsepower = $_POST['breakhorsepower'];
    $drivetype = $_POST['drivetype'];
    $quantity = $_POST['quantity'];
    $mileage = $_POST['mileage'];
    $conditionofcar = $_POST['conditionofcar'];


    // Filtering and sanitizing the variables for security
    $make  = strip_tags(mysqli_real_escape_string($con, trim($make)));
    $model = strip_tags(mysqli_real_escape_string($con, trim($model)));
    $price = strip_tags(mysqli_real_escape_string($con, trim($price)));
    $year = strip_tags(mysqli_real_escape_string($con, trim($year)));
    $fueltype = strip_tags(mysqli_real_escape_string($con, trim($fueltype)));
    $color = strip_tags(mysqli_real_escape_string($con, trim($color)));
    $breakhorsepower = strip_tags(mysqli_real_escape_string($con, trim($breakhorsepower)));
    $drivetype = strip_tags(mysqli_real_escape_string($con, trim($drivetype)));
    $quantity = strip_tags(mysqli_real_escape_string($con, trim($quantity)));
    $mileage = strip_tags(mysqli_real_escape_string($con, trim($mileage)));
    $conditionofcar = strip_tags(mysqli_real_escape_string($con, trim($conditionofcar)));


    // SQL injection prevention 
    $stmt = $con->prepare("SELECT * FROM `toyota` WHERE id = ?");
    $stmt->bind_param("ssssssssssss", $make, $model, $price, $price, $year, $fueltype, $color, $breakhorsepower, $drivetype, $quantity, $mileage, $conditionofcar);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script> alert('Email already in use'); window.location = 'signup.php'</script>";
        exit();
    } else {
        $stmt = $con->prepare("INSERT INTO `toyota` (make, model, price, year, fueltype, color, breakhorsepower, drivetype, quantity, mileage, conditionofcar) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssss", $name, $email, $hashed_password, $phone, $gender);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            echo "<script> alert('Car succesfully added to the database!!!'); window.location = 'adminaddcar.php'</script>";
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
<style>
    img {
        width: 300px;
    }
</style>

<body>
    <?php include 'adminnavbar.php' ?>

    <div class="containerAddInventory ">
        <div class="form signup">
            <div class="content">
                <span class="title">Add to Toyota </span>
                <img src="images/logo-toyota.png">
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
                        <input type="radio" value="Automatic" name="drivetype" id="dot-5">
                        <input type="radio" value="Manual" name="drivetype" id="dot-6">
                        <span class="gender-title">Select a Transmission Type:</span>
                        <div class="category">
                            <label for="dot-5">
                                <span class="dot five"></span>
                                <span class="gender">Automatic</span>
                            </label>
                            <label for="dot-6">
                                <span class="dot six"></span>
                                <span class="gender">Manual</span>
                            </label>

                        </div>
                    </div>

                    <div class="button">
                        <input type="submit" value="Submit">
                        <input type="reset" value="Clear" />
                    </div>
            </div>


            </form>
        </div>

    </div>




</body>

</html>