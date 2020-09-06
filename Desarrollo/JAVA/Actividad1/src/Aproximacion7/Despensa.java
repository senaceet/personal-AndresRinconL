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
public class Despensa extends Productos {

    private double centimetros;
    private String medida;
    private Aproximacion7.Encargado[] encargadoList;

    Despensa(String id, String nombreproducto, double centimetros, String medida) {
        super(id, nombreproducto);
        this.centimetros = centimetros;
        this.medida = medida;
    }

    public double getCentimetros() {
        return centimetros;
    }

    public void setCentimetros(double centimetros) {
        this.centimetros = centimetros;
    }

    public String getMedida() {
        return medida;
    }

    public void setMedida(String medida) {
        this.medida = medida;
    }

    public void adicionarVentas(int id, String nombre, int semanas) {
        Aproximacion7.Encargado encargado = new Aproximacion7.Encargado();
        encargadoList[semanas] = encargado;
    }
}
