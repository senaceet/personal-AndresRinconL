/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ConexionBD;



/**
 *
 * @author Polar
 */
public class Ventas {
    
    private String nombre;
    private int dia1;
    private int dia2;
    private int dia3;
    private int dia4;
    private int dia5;

    public Ventas(String nombre, int dia1, int dia2, int dia3, int dia4, int dia5) {
        this.nombre = nombre;
        this.dia1 = dia1;
        this.dia2 = dia2;
        this.dia3 = dia3;
        this.dia4 = dia4;
        this.dia5 = dia5;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public int getDia1() {
        return dia1;
    }

    public void setDia1(int dia1) {
        this.dia1 = dia1;
    }

    public int getDia2() {
        return dia2;
    }

    public void setDia2(int dia2) {
        this.dia2 = dia2;
    }

    public int getDia3() {
        return dia3;
    }

    public void setDia3(int dia3) {
        this.dia3 = dia3;
    }

    public int getDia4() {
        return dia4;
    }

    public void setDia4(int dia4) {
        this.dia4 = dia4;
    }

    public int getDia5() {
        return dia5;
    }

    public void setDia5(int dia5) {
        this.dia5 = dia5;
    }

    
   
}
