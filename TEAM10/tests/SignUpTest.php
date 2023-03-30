<?php

use PHPUnit\Framework\TestCase;

class SignupTest extends TestCase
{
    private $con;

    protected function setUp(): void
    {
        // Connect to the database
        $this->con = mysqli_connect("localhost", "root", "", "team10");

        // Create the test table
        mysqli_query($this->con, "CREATE TABLE customers_test LIKE customers");

        // Insert a test user into the test table
        mysqli_query($this->con, "INSERT INTO customers_test (name, email, username, password, phone, gender) VALUES ('John Doe', 'johndoe@example.com', 'johndoe', '$2y$10\$6UZ8zTJg7wK/cY1yV7pL8eP9V7vGZ/CzNymJ/a.BZ0d78lGUSax3q', '1234567890', 'male')");
    }

    protected function tearDown(): void
    {
        // Delete the test table
        mysqli_query($this->con, "DROP TABLE customers_test");

        // Close the database connection
        mysqli_close($this->con);
    }

    public function testSuccessfulSignup(): void
    {
        // Set up the request variables
        $_POST = [
            'name' => 'Jane Doe',
            'email' => 'janedoe@example.com',
            'uname' => 'janedoe',
            'password' => 'Password1!',
            'phone' => '0987654321',
            'gender' => 'female',
            'confpassword' => 'Password1!'
        ];

        // Make the request
        ob_start();
        include('signup.php');
        $output = ob_get_clean();

        // Check that the user was added to the database
        $result = mysqli_query($this->con, "SELECT * FROM customers_test WHERE email = 'janedoe@example.com'");
        $this->assertEquals(1, mysqli_num_rows($result));

        // Check that the output message is correct
        $this->assertStringContainsString('Registration Successful', $output);
    }

    public function testInvalidPassword(): void
    {
        // Set up the request variables
        $_POST = [
            'name' => 'Jane Doe',
            'email' => 'janedoe@example.com',
            'uname' => 'janedoe',
            'password' => 'password',
            'phone' => '0987654321',
            'gender' => 'female',
            'confpassword' => 'password'
        ];

        // Make the request
        ob_start();
        include('signup.php');
        $output = ob_get_clean();

        // Check that the user was not added to the database
        $result = mysqli_query($this->con, "SELECT * FROM customers_test WHERE email = 'janedoe@example.com'");
        $this->assertEquals(0, mysqli_num_rows($result));

        // Check that the output message is correct
        $this->assertStringContainsString('Password must contain at least 8 characters including uppercase letters, lowercase letters, numbers, and special characters', $output);
    }

    public function testPasswordsDoNotMatch(): void
    {
        // Set up the request variables
        $_POST = [
            'name' => 'Jane Doe',
            'email' => 'janedoe@example.com',
            'uname' => 'janedoe',
            'password' => 'Password1!',
            'phone' => '4242424',
            'gender' => 'male',
            'confpassword' => 'password',
        );

    }
?>