import java.sql.*; // imported everything from the sql package, can waste memory but it may be needed

public class dbLink {
    
    private Connection connection; // Stores the connection between the database and the backend

    public dbLink(String url, String username, String password) { // Constructor that creates the connection, it holds the url, username and password
        try { //try and catch method to catch any exceptions or errors

            Class.forName("com.mysql.cj.jdbc.Driver"); //Class.forName loads the jdbc driver needed to connect to the db, we are using phpmyadmin so i used the correlating driver

            connection = DriverManager.getConnection(url, username, password);// this gets the connection from the driver manager and stores it inside the connection variable
        } catch (ClassNotFoundException e) {
            System.out.println("Unable to load JDBC driver");// throws an exception if the driver was not successfully loaded
        } catch (SQLException e) {
            System.out.println("Unable to connect to database");// throws an exception if the connection was unsuccessful 
            //creates the connection
        }
    }

    public Connection getConnection() {
        return connection; // this returns the connection variable once it can connected, if it was not connected properly, the try and catch methods on lines 
        // 10, 15, 17 and will throw exceptions with the appropriate messages.
    }

    public void close() {// close method closes the connection 
        try {
            connection.close();
        } catch (SQLException e) {
            System.out.println("Unable to close database connection"); // if there is an issue with closing the database, an exception will be thrown
            // and a message will appear 



            //NOTE this is still a work in progress and is not a finished prototype, changes may be inflicted if needed. 
        }
    }
}