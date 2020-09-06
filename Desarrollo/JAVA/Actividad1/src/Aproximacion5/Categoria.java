/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Aproximacion5;

/**
 *
 * @author Polar
 */
public class Categoria {

    private String id;
    private String nombrecategoria;
    private Encargado[] Encargado;
    private int semanas;

    public String getid() {
        return id;
    }

    public String getNombreCategoria() {
        return nombrecategoria;
    }

    public void setNombre(String nombrecategoString) {
        if (nombrecategoria != null) {
            this.nombrecategoria = nombrecategoria;
        } else {
            this.nombrecategoria = "";
        }
    }

    public void adicionarProductos(String id, String nombre, double diauno, double diados,
            double diatres, double diacuatro, double diacinco) {
        Encargado e = new Encargado(id, diauno, diados, diatres, diacuatro, diacinco);
        Encargado[semanas] = e;
        semanas++;
    }
}
