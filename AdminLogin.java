import java.io.Serializable; /* serializable was implemented to allow 
 the admin to log in safely so when it gets transferred to the database, 
 the byte stream can be restored into the original object when needed
*/

public class AdminUser implements Serializable { // AdminUser class implements serializable 
   
	private static final long serialVersionUID = 29112002L; /* serialVersionUID to ensure the objects 
    are still compatible after being serialized and transferred to the database, 
    and even when they are being deserialized. I did this to ensure if the class definition changes, 
    the objects have no issues when deserializing. i may not need this since the admin will not be signing up but if 
    i need to get rid of it i will. 
    */ 
	private String email;
    private String password; // define private string for email and password.
    // this is going to be the admins details to sign in

    public AdminUser() {
        this.email = "zishan@gmail.com";
        this.password = "team10"; /*the constructor has initialized 
        the email and password as 2 single values, this is to ensure there
        is only one admin for the website. the validation will not be accepted 
        unless these credentials are passed through when logging in */ 
    }


    public String getEmail() {
        return email; /* this returns the value of the email. in this case 
        it is zishan@gmail.com */
    }

 /*    public void setEmail(String email) {
        this.email = email;
    }*/

    public String getPassword() {
        return password; /* this returns the value of the password, in this case 
        it is team10 */
    }

  /*   public void setPassword(String password) {
        this.password = password;
    }*/


//NOTE this is still a work in progress and is not a finished prototype, changes may be inflicted if needed. 
}        