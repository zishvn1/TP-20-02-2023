<?php

use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    private $con;
    
    protected function setUp(): void
    {
        // Establish a database connection
        $this->con = mysqli_connect("localhost", "username", "password", "database");
        
        // Ensure the database connection is successful
        if (mysqli_connect_errno()) {
            throw new Exception("Failed to connect to MySQL: " . mysqli_connect_error());
        }
    }
    
    protected function tearDown(): void
    {
        // Close the database connection
        mysqli_close($this->con);
    }
    
    public function testSuccessfulLogin()
    {
        // Set up the HTTP POST request parameters
        $_POST['email'] = "user@example.com";
        $_POST['password'] = "password";
        
        // Call the login script
        include("login.php");
        
        // Ensure the user is redirected to the dashboard page
        $this->expectOutputString('<script> alert (\'You have entered correct credentials\');window.location=\'customerloggedIn.php\'</script>');
        
        // Ensure the session variables are set correctly
        $this->assertEquals($_SESSION['email'], "user@example.com");
        $this->assertGreaterThan(0, $_SESSION['id']);
    }
    
    public function testInvalidLogin()
    {
        // Set up the HTTP POST request parameters
        $_POST['email'] = "user@example.com";
        $_POST['password'] = "wrongpassword";
        
        // Call the login script
        include("login.php");
        
        // Ensure the user sees an error message and is redirected to the login page
        $this->expectOutputString('<script> alert (\'Wrong Email or Password!!!\');window.location=\'login.php\'    </script>');
    }
    
    public function testInvalidInput()
    {
        // Set up the HTTP POST request parameters
        $_POST['email'] = "";
        $_POST['password'] = "";
        
        // Call the login script
        include("login.php");
        
        // Ensure the user sees an error message and is redirected to the login page
        $this->expectOutputString('<script> alert (\'Wrong Input!!!\');window.location=\'login.php\'    </script>');
    }
}
Note that this example assumes that you have PHPUnit installed and configured correctly, and that you have created a separate database for testing purposes. The setUp and tearDown methods are used to establish and clo