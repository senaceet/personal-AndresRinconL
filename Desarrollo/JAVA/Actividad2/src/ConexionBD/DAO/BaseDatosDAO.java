/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ConexionBD.DAO;

import java.sql.Connection;
import java.sql.DriverManager;
//import java.sql.SQLException;




/**
 *
 * @author Polar
 */
public class BaseDatosDAO {
    Connection conn;
    public void conectar(){
        try{
            //Class.forName("com.mysql.cj.jdbc.Driver"); 
            conn = (Connection) DriverManager.getConnection("jdbc:mysql://localhost:3306/actividad2?zeroDateTimeBehavior=CONVERT_TO_NULL&useSSL=false&useTimezone=true&serverTimezone=UTC", "root","");
        } catch (Exception e) {
            System.out.println("Error en el Driver");
        }
    }

    public BaseDatosDAO() {
        conectar();
    }
    
    public static void main(String[] args){
        new BaseDatosDAO();
    }
}
    