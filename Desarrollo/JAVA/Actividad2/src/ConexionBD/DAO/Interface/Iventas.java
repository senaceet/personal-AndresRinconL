/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ConexionBD.DAO.Interface;

import ConexionBD.Ventas;
/**
 *
 * @author Polar
 */
public interface Iventas {
    public boolean agregarVenta(Ventas u);
    public String eliminarVenta(String nombre);
    public boolean actualizarVenta(String nombre, Ventas u);
    public Ventas listarVenta(String nombre);
    public boolean validarVenta(String nombre);
}
