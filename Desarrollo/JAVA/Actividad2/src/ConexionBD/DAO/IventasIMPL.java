/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ConexionBD.DAO;

import ConexionBD.DAO.Interface.Iventas;
import ConexionBD.Ventas;
import java.sql.ResultSet;
import java.sql.Statement;
import java.sql.PreparedStatement;
//import java.sql.SQLException;

/**
 *
 * @author Polar
 */
public class IventasIMPL implements Iventas{

    @Override
    public boolean agregarVenta(Ventas u) {
        BaseDatosDAO base = new BaseDatosDAO();
        try{
            String sql = "INSERT INTO ventas(nombre,dia1,dia2,dia3,dia4,dia5) VALUES(?,?,?,?,?,?)";
            PreparedStatement stmt = base.conn.prepareStatement(sql);
            stmt.setString(1, u.getNombre());
            stmt.setInt(2, u.getDia1());
            stmt.setInt(3, u.getDia2());
            stmt.setInt(4, u.getDia3());
            stmt.setInt(5, u.getDia4());
            stmt.setInt(6, u.getDia5());
            stmt.executeUpdate();
            
             return true;   
            
        } catch(Exception e){
            
        }        
        
        return false;
    }

    @Override
    public String eliminarVenta(String nombre) {
        BaseDatosDAO base = new BaseDatosDAO();
        try{
            String sql = "DELETE from ventas WHERE nombre =?";
            PreparedStatement stmt = base.conn.prepareStatement(sql);
            stmt.setString(1, nombre);
            stmt.executeUpdate();
            
             return "Eliminado";   
            
        } catch(Exception e){
            
        }        
        
        return "No fue eliminado";
    }

    @Override
    public boolean actualizarVenta(String nombre, Ventas u) {
        BaseDatosDAO base = new BaseDatosDAO();
        try{
            String sql = "UPDATE ventas set nombre=? ,dia1=?,dia2=?,dia3=?,dia4=?,dia5=? where nombre=? ";
            PreparedStatement stmt = base.conn.prepareStatement(sql);
            stmt.setString(1, u.getNombre());
            stmt.setInt(2, u.getDia1());
            stmt.setInt(3, u.getDia2());
            stmt.setInt(4, u.getDia3());
            stmt.setInt(5, u.getDia4());
            stmt.setInt(6, u.getDia5());
            stmt.setString(7, nombre);
            stmt.executeUpdate();
            
             return true;   
            
        } catch(Exception e){
            
        }        
        
        return false;
    }

    @Override
    public Ventas listarVenta(String nombre) {
        BaseDatosDAO base = new BaseDatosDAO();
         
        try{
            Statement stmt = base.conn.createStatement();
            String sql = "SELECT * FROM ventas where nombre='"+nombre+"'";
            ResultSet rs= stmt.executeQuery(sql);
            if(rs.next()){
                return (new Ventas(rs.getString("nombre"),rs.getInt("dia1"),rs.getInt("dia2"),rs.getInt("dia3"),rs.getInt("dia4"),rs.getInt("dia5")));
            }
        } catch(Exception e){
            
        }        
        
        return null;
    }

    @Override
    public boolean validarVenta(String nombre) {
        BaseDatosDAO base = new BaseDatosDAO();
        try{
            Statement stmt = base.conn.createStatement();
            String sql = "SELECT * FROM ventas where nombre='"+nombre+"'";
            ResultSet rs= stmt.executeQuery(sql);
            if(rs.next()){
                return true;
            }
        } catch(Exception e){
            
        }        
        
        return false;
    }
    
}
