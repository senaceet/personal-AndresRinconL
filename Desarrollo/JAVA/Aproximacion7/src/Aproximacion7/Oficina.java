/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Aproximacion7;

/**
 *
 * @author Polar
 */
public class Oficina extends Productos{
    String color;
    double size;
    private Aproximacion7.Encargado[] encargadoList;
    
    Oficina(String id, String nombreproducto, double size, String color){
        super(id, nombreproducto);
        this.color = color;
        this.size = size;
    }

    public String getColor() {
        return color;
    }

    public void setColor(String color) {
        this.color = color;
    }

    public double getSize() {
        return size;
    }

    public void setSize(double size) {
        this.size = size;
    }

    public void adicionarVentas(int id, String nombre, int semanas) {
        Aproximacion7.Encargado encargado = new Aproximacion7.Encargado();
        encargadoList[semanas] = encargado;
    }
    
}
