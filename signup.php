<?php
//Action taken once register button is clicked2
if(isset($_POST['submitted'])){
    require_once('connectdb.php');

    $email=isset($_POST['email'])?$_POST['email']:false;
    $password=isset($_POST['password'])?password_hash($_POST['password'],PASSWORD_DEFAULT):false;

    if(!($email)){
        echo "Email Address wrong!";
        exit;
    }
    if(!($password)){
        exit("Password wrong!");
    }
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confpassword = $_POST['confpassword'];
    $gender = $_POST['gender'];
    //Check that both passwords in register form work.
    if($password == $confpassword){
        echo "Password match";
    } else{
        echo "Passwords do not match";
    }
    //Check that password is at least 8 characters and not more than 15
    if(strlen($password) < 8 || strlen($password) > 15){
        echo "Password must be between 8 and 20 characters long";
    } else{
        echo "Password does not meet the requirements";
    }
    //Check that password contains letters, numbers and at least one special character
    if(!preg_match('/[A-Za-Z]/', $password) && !preg_match('/[0-9]/', $password) && 
    !preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password)){
        echo "Password is good!"
    }   else{
        echo "Passsword does not meet the requirements";
    }
    try{
        $stat=$db->prepare("INSERT INTO Customer(Name, Username, Email, Password, Phone, Gender)
        VALUES(:name, :username, :email, :phone, :password, :gender)");
        $stat->bindParam(':name', $name, PDO::PARAM_STR, 20);
        $stat->bindParam(':username', $username, PDO::PARAM_STR, 20);
        $stat->bindParam(':email', $email, PDO::PARAM_STR, 64);
        $stat->bindParam(':password', $password, PDO::PARAM_STR, 20);
        $stat->bindParam(':phone', $phone, PDO::PARAM_STR, 20);
        $stat->bindParam(':gender', $gender, PDO::PARAM_STR, 20);

        $id=$db->lastInsertID();
        echo "Congratulations! You are now registered.";

    } catch (PDOexception $ex){
        echo "Sorry, a database error occured! <br>";
        echo "Error details: <em>". $ex->getMessage()."</em>";
    }
    }

?>


<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>

    <?php include 'navbar.php' ?>

    <div class="form signup">
        <div class="title">Registration</div>
        <div class="content">
            <form action="#">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" name="username" placeholder="Enter your username" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" name="phone" placeholder="Enter your number" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" name="confpassword"placeholder="Confirm your password" required>
                    </div>
                </div>
                <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1">
                    <input type="radio" name="gender" id="dot-2">
                    <input type="radio" name="gender" id="dot-3">
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                        </label>
                        <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="gender">Prefer not to say</span>
                        </label>
                    </div>
                </div>

                <div class="checkbox-text">
                    <div class="checkbox-content">
                        <input type="checkbox" id="termCon">
                        <label for="termCon" class="text">I accepted all terms and conditions</label>
                    </div>
                </div>

                <div class="button">
                    <input type="submit" value="Register">
                    <input type="reset" value="Clear"/>
                    <input type="hidden" name="submitted" value="true"/>
                </div>
            </form>
        </div>
    </div>

    <script src="script.js"></script>

    <?php include 'footer.php' ?>

</body>

</html>

<script src="script.js">
function validateForm() {
  var password = document.getElementById("password").value;
  var name = document.getElementById("name");
  var username = document.getElementById("username");
  var confpassword = documen.getElementById("confpassword");
  var email = document.getElementById("email");

  if (email == "") {
    alert("Email field cannot be empty");
    return false;
  }
  if (name == "") {
    alert("Please enter your name!");
    return false;
  }
  if (username == "") {
    alert("Please enter a username!");
    return false;
  }
  if (password == "") {
    alert("Password field cannot be empty");
    return false;
  }
  return true;
}
</script>