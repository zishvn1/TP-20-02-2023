
public class AdminUser { // AdminUser class implements serializable

    private String email;
    private String password; // define private string for email and password.
    // this is going to be the admins details to sign in

    public AdminUser(String email, String password) {
        this.email = email;
        this.password = password; /*
                                   * the constructor has initialized
                                   * the email and password as 2 single values, this is to ensure there
                                   * is only one admin for the website. the validation will not be accepted
                                   * unless these credentials are passed through when logging in
                                   */
    }

    public String getEmail() {
        return email; /*
                       * this returns the value of the email. in this case
                       * it is zishan@gmail.com
                       */
    }

    /*
     * public void setEmail(String email) {
     * this.email = email;
     * }
     */

    public String getPassword() {
        return password; /*
                          * this returns the value of the password, in this case
                          * it is team10
                          */
    }

    /*
     * public void setPassword(String password) {
     * this.password = password;
     * }
     */

    // NOTE this is still a work in progress and is not a finished prototype,
    // changes may be inflicted if needed.

}