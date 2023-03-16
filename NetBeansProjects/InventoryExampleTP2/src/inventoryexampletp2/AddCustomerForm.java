/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/GUIForms/JFrame.java to edit this template
 */
package inventoryexampletp2;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.DriverManager;
import java.sql.Driver;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JOptionPane;
import java.sql.Statement;
import java.sql.ResultSet;
import java.sql.ResultSetMetaData;
import java.util.Vector;
import javax.swing.SwingUtilities;
import javax.swing.table.DefaultTableModel;

/**
 *
 * @author Pantelis Xiourouppas
 */
public class AddCustomerForm extends javax.swing.JFrame {

    /**
     * Creates new form AddCustomerForm
     */
    public AddCustomerForm() {
        initComponents();
    }

    Connection con1;
    PreparedStatement statement;

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jTextField5 = new javax.swing.JTextField();
        jPanel1 = new javax.swing.JPanel();
        jLabel12 = new javax.swing.JLabel();
        jLabel13 = new javax.swing.JLabel();
        NameTextBox = new javax.swing.JTextField();
        EmailTextBox = new javax.swing.JTextField();
        jLabel14 = new javax.swing.JLabel();
        PasswordTextBox = new javax.swing.JTextField();
        jLabel15 = new javax.swing.JLabel();
        jLabel16 = new javax.swing.JLabel();
        AddressTextBox = new javax.swing.JTextField();
        jLabel17 = new javax.swing.JLabel();
        PhoneTextBox = new javax.swing.JTextField();
        jLabel18 = new javax.swing.JLabel();
        PostcodeTextBox = new javax.swing.JTextField();
        CreateUserButton = new javax.swing.JButton();
        ExitButton = new javax.swing.JButton();

        jTextField5.setText("jTextField5");

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setUndecorated(true);

        jPanel1.setBackground(new java.awt.Color(255, 255, 255));
        jPanel1.setBorder(javax.swing.BorderFactory.createMatteBorder(3, 3, 3, 3, new java.awt.Color(0, 0, 0)));

        jLabel12.setBackground(new java.awt.Color(102, 0, 0));
        jLabel12.setFont(new java.awt.Font("Arial", 1, 18)); // NOI18N
        jLabel12.setForeground(new java.awt.Color(191, 30, 46));
        jLabel12.setText("Name: ");
        jLabel12.setToolTipText("");

        jLabel13.setBackground(new java.awt.Color(102, 0, 0));
        jLabel13.setFont(new java.awt.Font("Sitka Heading", 1, 24)); // NOI18N
        jLabel13.setForeground(new java.awt.Color(191, 30, 46));
        jLabel13.setText("Create A New User");

        NameTextBox.setBackground(new java.awt.Color(255, 255, 255));
        NameTextBox.setForeground(new java.awt.Color(0, 0, 0));

        EmailTextBox.setBackground(new java.awt.Color(255, 255, 255));
        EmailTextBox.setForeground(new java.awt.Color(0, 0, 0));

        jLabel14.setBackground(new java.awt.Color(102, 0, 0));
        jLabel14.setFont(new java.awt.Font("Arial", 1, 18)); // NOI18N
        jLabel14.setForeground(new java.awt.Color(191, 30, 46));
        jLabel14.setText("Email:");
        jLabel14.setToolTipText("");

        PasswordTextBox.setBackground(new java.awt.Color(255, 255, 255));
        PasswordTextBox.setForeground(new java.awt.Color(0, 0, 0));

        jLabel15.setBackground(new java.awt.Color(102, 0, 0));
        jLabel15.setFont(new java.awt.Font("Arial", 1, 18)); // NOI18N
        jLabel15.setForeground(new java.awt.Color(191, 30, 46));
        jLabel15.setText("Password:");
        jLabel15.setToolTipText("");

        jLabel16.setBackground(new java.awt.Color(102, 0, 0));
        jLabel16.setFont(new java.awt.Font("Arial", 1, 18)); // NOI18N
        jLabel16.setForeground(new java.awt.Color(191, 30, 46));
        jLabel16.setText("Phone:");
        jLabel16.setToolTipText("");

        AddressTextBox.setBackground(new java.awt.Color(255, 255, 255));
        AddressTextBox.setForeground(new java.awt.Color(0, 0, 0));

        jLabel17.setBackground(new java.awt.Color(102, 0, 0));
        jLabel17.setFont(new java.awt.Font("Arial", 1, 18)); // NOI18N
        jLabel17.setForeground(new java.awt.Color(191, 30, 46));
        jLabel17.setText("Address:");
        jLabel17.setToolTipText("");

        PhoneTextBox.setBackground(new java.awt.Color(255, 255, 255));
        PhoneTextBox.setForeground(new java.awt.Color(0, 0, 0));
        PhoneTextBox.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                PhoneTextBoxActionPerformed(evt);
            }
        });

        jLabel18.setBackground(new java.awt.Color(102, 0, 0));
        jLabel18.setFont(new java.awt.Font("Arial", 1, 18)); // NOI18N
        jLabel18.setForeground(new java.awt.Color(191, 30, 46));
        jLabel18.setText("Postcode:");
        jLabel18.setToolTipText("");

        PostcodeTextBox.setBackground(new java.awt.Color(255, 255, 255));
        PostcodeTextBox.setForeground(new java.awt.Color(0, 0, 0));

        CreateUserButton.setBackground(new java.awt.Color(255, 255, 255));
        CreateUserButton.setFont(new java.awt.Font("Sitka Heading", 1, 18)); // NOI18N
        CreateUserButton.setForeground(new java.awt.Color(191, 30, 46));
        CreateUserButton.setText("Create User");
        CreateUserButton.setBorder(new javax.swing.border.SoftBevelBorder(javax.swing.border.BevelBorder.RAISED));
        CreateUserButton.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                CreateUserButtonMouseClicked(evt);
            }
        });
        CreateUserButton.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                CreateUserButtonActionPerformed(evt);
            }
        });

        ExitButton.setBackground(new java.awt.Color(255, 255, 255));
        ExitButton.setFont(new java.awt.Font("Sitka Heading", 1, 18)); // NOI18N
        ExitButton.setForeground(new java.awt.Color(191, 30, 46));
        ExitButton.setText("Exit");
        ExitButton.setBorder(new javax.swing.border.SoftBevelBorder(javax.swing.border.BevelBorder.RAISED));
        ExitButton.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                ExitButtonMouseClicked(evt);
            }
        });
        ExitButton.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                ExitButtonActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout jPanel1Layout = new javax.swing.GroupLayout(jPanel1);
        jPanel1.setLayout(jPanel1Layout);
        jPanel1Layout.setHorizontalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                        .addComponent(jLabel17)
                        .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                .addComponent(jLabel15)
                                .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                    .addComponent(jLabel14)
                                    .addComponent(jLabel12)))
                            .addComponent(jLabel16, javax.swing.GroupLayout.Alignment.TRAILING)))
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addGap(13, 13, 13)
                        .addComponent(jLabel18)))
                .addGap(18, 18, 18)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(PostcodeTextBox, javax.swing.GroupLayout.DEFAULT_SIZE, 217, Short.MAX_VALUE)
                    .addComponent(NameTextBox)
                    .addComponent(EmailTextBox)
                    .addComponent(PasswordTextBox)
                    .addComponent(AddressTextBox)
                    .addComponent(PhoneTextBox))
                .addGap(131, 131, 131))
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addGap(174, 174, 174)
                .addComponent(CreateUserButton, javax.swing.GroupLayout.PREFERRED_SIZE, 120, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel1Layout.createSequentialGroup()
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(ExitButton, javax.swing.GroupLayout.PREFERRED_SIZE, 78, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap())
            .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel1Layout.createSequentialGroup()
                    .addContainerGap(150, Short.MAX_VALUE)
                    .addComponent(jLabel13)
                    .addGap(129, 129, 129)))
        );
        jPanel1Layout.setVerticalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addGap(90, 90, 90)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel12, javax.swing.GroupLayout.PREFERRED_SIZE, 44, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(NameTextBox, javax.swing.GroupLayout.PREFERRED_SIZE, 30, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(18, 18, 18)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(EmailTextBox, javax.swing.GroupLayout.PREFERRED_SIZE, 30, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel14, javax.swing.GroupLayout.PREFERRED_SIZE, 44, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(18, 18, 18)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(PasswordTextBox, javax.swing.GroupLayout.PREFERRED_SIZE, 30, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel15, javax.swing.GroupLayout.PREFERRED_SIZE, 44, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                    .addComponent(jLabel16, javax.swing.GroupLayout.PREFERRED_SIZE, 44, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(PhoneTextBox, javax.swing.GroupLayout.PREFERRED_SIZE, 30, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(18, 18, 18)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel17, javax.swing.GroupLayout.PREFERRED_SIZE, 44, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(AddressTextBox, javax.swing.GroupLayout.PREFERRED_SIZE, 30, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(18, 18, 18)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel18, javax.swing.GroupLayout.PREFERRED_SIZE, 44, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(PostcodeTextBox, javax.swing.GroupLayout.PREFERRED_SIZE, 30, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(18, 18, 18)
                .addComponent(CreateUserButton, javax.swing.GroupLayout.PREFERRED_SIZE, 41, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 92, Short.MAX_VALUE)
                .addComponent(ExitButton, javax.swing.GroupLayout.PREFERRED_SIZE, 36, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap())
            .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                .addGroup(jPanel1Layout.createSequentialGroup()
                    .addGap(33, 33, 33)
                    .addComponent(jLabel13, javax.swing.GroupLayout.PREFERRED_SIZE, 44, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addContainerGap(554, Short.MAX_VALUE)))
        );

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jPanel1, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jPanel1, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );

        pack();
        setLocationRelativeTo(null);
    }// </editor-fold>//GEN-END:initComponents

    private void PhoneTextBoxActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_PhoneTextBoxActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_PhoneTextBoxActionPerformed

    private void CreateUserButtonMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_CreateUserButtonMouseClicked

    }//GEN-LAST:event_CreateUserButtonMouseClicked

    private void CreateUserButtonActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_CreateUserButtonActionPerformed
        // TODO add your handling code here:

        String name = NameTextBox.getText();
        String email = EmailTextBox.getText();
        String password = PasswordTextBox.getText();
        String phone = PhoneTextBox.getText();
        String address = AddressTextBox.getText();
        String postcode = PostcodeTextBox.getText();

        
        

        try {
            Class.forName("com.mysql.jdbc.Driver");
            con1 = DriverManager.getConnection("jdbc:mysql://localhost/inventory", "root", "");
            statement = con1.prepareStatement("insert into customers (name,email,password,phone,address,postcode) values ( ? , ? , ? , ? , ? , ? )");
            statement.setString(1, name);
            statement.setString(2, email);
            statement.setString(3, password);
            statement.setString(4, phone);
            statement.setString(5, address);
            statement.setString(6, postcode);
            statement.executeUpdate();
            JOptionPane.showMessageDialog(null, "Customer Added!!!");
            NameTextBox.setText("");
            EmailTextBox.setText("");
            PasswordTextBox.setText("");
            PhoneTextBox.setText("");
            AddressTextBox.setText("");
            PostcodeTextBox.setText("");
            NameTextBox.requestFocus();

        } catch (ClassNotFoundException ex) {
            Logger.getLogger(ToyotaForm.class.getName()).log(Level.SEVERE, null, ex);
        } catch (SQLException ex) {
            Logger.getLogger(ToyotaForm.class.getName()).log(Level.SEVERE, null, ex);
        }
    }//GEN-LAST:event_CreateUserButtonActionPerformed

    private void ExitButtonMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_ExitButtonMouseClicked
        // TODO add your handling code here:


    }//GEN-LAST:event_ExitButtonMouseClicked

    private void ExitButtonActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_ExitButtonActionPerformed
        // TODO add your handling code here:
        this.dispose();

    }//GEN-LAST:event_ExitButtonActionPerformed

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(AddCustomerForm.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(AddCustomerForm.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(AddCustomerForm.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(AddCustomerForm.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new AddCustomerForm().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JTextField AddressTextBox;
    private javax.swing.JButton CreateUserButton;
    private javax.swing.JTextField EmailTextBox;
    private javax.swing.JButton ExitButton;
    private javax.swing.JTextField NameTextBox;
    private javax.swing.JTextField PasswordTextBox;
    private javax.swing.JTextField PhoneTextBox;
    private javax.swing.JTextField PostcodeTextBox;
    private javax.swing.JLabel jLabel12;
    private javax.swing.JLabel jLabel13;
    private javax.swing.JLabel jLabel14;
    private javax.swing.JLabel jLabel15;
    private javax.swing.JLabel jLabel16;
    private javax.swing.JLabel jLabel17;
    private javax.swing.JLabel jLabel18;
    private javax.swing.JPanel jPanel1;
    private javax.swing.JTextField jTextField5;
    // End of variables declaration//GEN-END:variables
}
