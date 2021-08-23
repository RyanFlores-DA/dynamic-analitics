
package com.mycompany.backscraping;

import com.mycompany.backscraping.configs;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JOptionPane;

public class ConexaoDAO {
    static PreparedStatement pst;
    static ResultSet rs;
    static Connection con;


    public Connection conectaBD(){
        
        configs cf = new configs();
        cf.conf();
        String user = cf.getUser();
        String pass = cf.getPass();
        String url = cf.getUrl();
         
        try {
            // TRY CATCH DE CONEXAO COM BANCO DE DADOS
            Class.forName("com.mysql.jdbc.Driver");
            con = DriverManager.getConnection(url,user,pass);
        } catch (SQLException | ClassNotFoundException ex) {
            Logger.getLogger(ConexaoDAO.class.getName()).log(Level.SEVERE, null, ex);
            JOptionPane.showMessageDialog(null, url + ex + pass);
        }
            
            
        
        return con;
    }
    
}
