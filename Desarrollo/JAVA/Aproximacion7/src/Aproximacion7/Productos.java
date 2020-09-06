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
public abstract class Productos {

    private final String id;
    private String nombreproducto;
    private double diauno;
    private double diados;
    private double diatres;
    private double diacuatro;
    private double diacinco;
    private int semanas;
    private Aproximacion7.Encargado[] encargadoList;

    public Productos(String id, String nombreproducto) {
        if (id != null) {
            this.id = id;
        } else {
            this.id = "";
        }
        setNombreProducto(nombreproducto);
        encargadoList = new Aproximacion7.Encargado[50];
        semanas = 0;
    }

    public String getId() {
        return id;
    }

    public String getNombreProducto() {
        return nombreproducto;
    }

    public final void setNombreProducto(String nombreproducto) {
        if (nombreproducto != null) {
            this.nombreproducto = nombreproducto;
        } else {
            this.nombreproducto = "";
        }
    }

    public double getDiauno() {
        return diauno;
    }

    public void setDiauno(double diauno) {
        if (diauno >= 0) {
            this.diauno = diauno;
        } else {
            this.diauno = 0;
        }
    }

    public double getDiados() {
        return diados;
    }

    public void setDiados(double diados) {
        if (diados >= 0) {
            this.diados = diados;
        } else {
            this.diados = 0;
        }
    }

    public double getDiatres() {
        return diatres;
    }

    public void setDiatres(double diatres) {
        if (diatres >= 0) {
            this.diatres = diatres;
        } else {
            this.diatres = 0;
        }
    }

    public double getDiacuatro() {
        return diacuatro;
    }

    public void setDiacuatro(double diacuatro) {
        if (diacuatro >= 0) {
            this.diacuatro = diacuatro;
        } else {
            this.diacuatro = 0;
        }
    }

    public double getDiacinco() {
        return diacinco;
    }

    public void setDiacinco(double diacinco) {
        if (diacinco >= 0) {
            this.diacinco = diacinco;
        } else {
            this.diacinco = 0;
        }
    }

    public double calcularPromedioGeneral() {
        double promedio = 0;
        for (int i = 0; i < semanas; i++) {
            promedio = promedio + encargadoList[i].calcularPromedio() / semanas;
            return promedio;
        }

        return promedio;
    }

    public abstract void adicionarVentas(int id, String nombre, int semanas);

}
