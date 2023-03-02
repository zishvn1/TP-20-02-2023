import java.sql.SQLException;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) throws ClassNotFoundException, SQLException {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Enter email: ");
        String email = scanner.nextLine();
        System.out.print("Enter password: ");
        String password = scanner.nextLine();

        try (DBLink dbLink = new DBLink(
                "jdbc:mysql://cs2410-web01pvm.aston.ac.uk:3306/u_210131701_adminlogin", "u-210131701",
                "6c5FtT45Wq3Vofg")) {
            LoginValidator validator = new LoginValidator(dbLink.getConnection());

            if (validator.login(email, password)) {
                System.out.println("Login successful!");
            } else {
                System.out.println("Login failed!");
            }
        } catch (SQLException e) {
            System.out.println("Unable to connect to database: " + e.getMessage());
        } catch (ClassNotFoundException e) {
            System.out.println("Unable to load JDBC driver: " + e.getMessage());
        } finally {
            scanner.close();
        }
    }
}
