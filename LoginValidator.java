import java.sql.*; // import everything from the sql package in java

public class LoginValidator { 
    /* the constants have been created as static to ensure their values do not change during runtime, this can lead to 
    disconnecting from the database if they do change. */
    private static final String DB_URL = "link for db"; // // info to the URL of the database to provide an exact location of where the database is
    private static final String DB_USERNAME = "username to db"; // info to the database username, to allow access to the database
    private static final String DB_PASSWORD = "password to db"; // info to the database password, to allow access to the database

    public static boolean validateLogin(String email, String password) { /* creating a boolean method which is static,
         it also takes the email and password as parameters, this is to ensure they do not change during runtime. */
         if(email == null || email.isEmpty()) {
            throw new IllegalArgumentException("Email cannot be empty");
        }
        if(password == null||password.isEmpty()) {
            throw new IllegalArgumentException("Password cannot be empty");
        
        }
        boolean loginSuccessful = false; // a new variable created and set to false, this is to check if the login details match the database 
        
        try/* try with resources statement is used here to  
        allow the database to close once the has been completed */
        
        (DBLink link = new DBLink(DB_URL,DB_USERNAME, DB_PASSWORD); //create a new instance of auto closeable
        Connection connection = link.getConnection();
        PreparedStatement preparedStatement =
        connection.prepareStatement
        ("SELECT email, password FROM adminlogin WHERE email = ? AND password = ?")){
            preparedStatement.setString(1, email);
            preparedStatement.setString(2, password);
            ResultSet resultSet = preparedStatement.executeQuery();
            if (resultSet.next()) {
                loginSuccessful = true;
            }
        }
        catch (SQLException e) {
            System.err.println("An error occurred whilst trying to log in: " + e.getMessage());
        }
        return loginSuccessful;
        }
    }
    /*from line 24 to 41, the large block of code basically 
     * creates a new object of a dbLink class which implements autocloseable,
     * 
     * line 25 gets the connection to the database,
     * 
     * line 28, prepared statement refers to the query that will validate 
     * the users input to the credentials in the database, 
     * the ? are the placeholders in the sql statement.
     * 
     * on line 29 and 30, setString sets 
     * the data type of the parameters of the placeholders to a String 
     * and (1, email), (2, password) refers which order they are meant 
     * to be in inside the sql code
     * 
     * on line 31, result set will return the data from the table in the database 
     * and when returned, it will contain the results of the query from line 28
     * 
     * resultSet.next will set loginsucessful to true if there is at least one row in 
     * the database which matches the credentials stated by the sql query
     * 
     * on line 36, the catch statement is inserted to catch any 
        exceptions and display a message accordingly, it checks to see 
        if any errors occur when the admin tries to log in
     * 
     * when the "try with resources" block finishes executing,
     * (either resulting in a successful login or an exception being thrown), 
     * the close() method implemented by the Autocloseable interface is automatically 
     * called in order to close the connection. 
     * 
     * finally the loginSucessful is returned to allow access to the admin page
     * 
    */


