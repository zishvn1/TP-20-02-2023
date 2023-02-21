import java.sql.*; // imported everything from the sql package, can waste memory but it may be needed

public class DBLink implements AutoCloseable { /* implemented auto closeable to close the connection to the 
   table of admin users once the validation is completed */
    
    private Connection connection; // Stores the connection between the database and the backend

    public DBLink(String url, String username, String password) { // Constructor that creates the connection, it holds the url, username and password
        try { //try and catch method to catch any exceptions or errors
            Class.forName("com.mysql.cj.jdbc.Driver"); //Class.forName loads the jdbc driver needed to connect to the db, we are using phpmyadmin so i used the correlating driver
            connect(url, username, password);
      } catch (ClassNotFoundException e) {
            System.out.println("Unable to load JDBC driver");// throws an exception if the driver was not successfully loaded
    
          
        }
    }
    public void connect(String url, String username, String password) { // method to create connection to the data base
        // method to establish a connection to the database
        try {
            connection = DriverManager.getConnection(url, username, password); // this gets the connection from the driver manager and stores it inside the connection variable
        } catch (SQLException e) {
            System.out.println("Unable to connect to database"); // throws an exception if the connection was unsuccessful 
        }
    }

    public Connection getConnection() {
        return connection; /*  this returns the connection variable once it can connected,
         if it was not connected properly,the try and catch methods on lines 
         8, 11, 19, 21 and will throw exceptions with the appropriate messages.*/
    }

   

	@Override /*overrides the auto closeable interface to allow itself to 
    close the connection along with any statements that may be open*/
	public void close() { 
		 // method to close the connection to the database
        try {
            if (connection != null) {
                connection.close();
                connection = null;
                /* is the connection is not null, then close the connection 
                and set connection to null */
            }
        } catch (SQLException e) {
            System.out.println("Unable to close database connection"); /*if there is an issue with closing the database, 
          an exception will be thrown and a message will appear */
		
	}
}
}