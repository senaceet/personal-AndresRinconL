/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Aproximacion3;

/**
 *
 * @author Polar
 */
public class Encargado{
    private String nombre;
    private double diauno; 
    private double diados;
    private double diatres;
    private double diacuatro;
    private double diacinco;

    public String getNombre( ){ 
        return nombre;
    }
    public void setNombre(String nombre) {
        if (nombre != null) this.nombre = nombre ;
        else this.nombre = "";
    }
    public double getDiauno(){ 
        return diauno;
    }
    public void setDiauno(double diauno) { 
        if (diauno >= 0) this.diauno = diauno; 
        else this.diauno = 0;
    }
    public double getDiados(){ 
        return diados;
    }
    public void setDiados(double diados) { 
        if (diados >= 0) this.diados = diados; 
        else this.diados = 0;
    }
    public double getDiatres (){ 
        return diatres;
    }
    public void setDiatres(double diatres) { 
        if (diatres >= 0) this.diatres = diatres; 
        else this.diatres = 0;
    }
    public double getDiacuatro (){ 
        return diacuatro;
    }
    public void setDiacuatro(double diacuatro) { 
        if (diacuatro >= 0) this.diacuatro = diacuatro; 
        else this.diacuatro = 0;
    }
    public double getDiacinco (){ 
        return diacinco;
    }
    public void setDiacinco(double diacinco) { 
        if (diacinco >= 0) this.diacinco = diacinco;
        else this.diacinco = 0;
    }
    Encargado (String nombre, double diauno, double diados, 
    double diatres, double diacuatro, double diacinco){
    this.nombre = nombre;
    this.diauno = diauno; this.diados = diados; this.diatres = diatres; 
    this.diacuatro = diacuatro; this.diacinco = diacinco;
    }
    double calcularPromedio(){
    return (diauno + diados + diatres + diacuatro + diacinco)/5;
    }

}