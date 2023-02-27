import java.sql.*; // imported everything from the sql package, can waste memory but it may be needed

public class DBLink implements AutoCloseable { /*
                                                * implemented auto closeable to close the connection to the
                                                * table of admin users once the validation is completed
                                                */

    private Connection connection; // Stores the connection between the database and the backend

    public DBLink(String url, String username, String password) throws SQLException, ClassNotFoundException {

        Class.forName("com.mysql.cj.jdbc.Driver");
        // Class.forName loads the jdbc driver needed to connect to the
        // db, we are using phpmyadmin so i used the correlating driver

        connection = DriverManager.getConnection(
                "jdbc:mysql://210131701.cs2410-web01pvm.aston.ac.uk:3306/u_210131701_adminlogin",
                "u-210131701",
                "6c5FtT45Wq3Vofg");

    }

    public Connection getConnection() {
        return connection;
    }

    @Override /*
               * overrides the auto closeable interface to allow itself to
               * close the connection along with any statements that may be open
               */
    public void close() throws SQLException {
        // method to close the connection to the database

        if (connection != null) {
            connection.close();
            connection = null;
            /*
             * is the connection is not null, then close the connection
             * and set connection to null
             */
        }
    }
}
