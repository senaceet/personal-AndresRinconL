/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Aproximacion2;

/**
 *
 * @author Polar
 */
public class Encargado{

	String nombre;
	double diauno; 
	double diados; 
	double diatres;
	double diacuatro;
    double diacinco;
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