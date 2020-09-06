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
import java.util.Scanner;

public class Ventas {

    public static void main(String Args[]) {

        Scanner sc = new Scanner(System.in);
        int semanas = 0;
        int cantidadOficina = 0;
        int cantidadDespensa = 0;
        Encargado[] unEncargado1 = new Encargado[50];
        String nombres = "";
        double dia1 = 0, dia2 = 0, dia3 = 0, dia4 = 0, dia5 = 0;
        double promedio = 0;
        System.out.println("Digite el numero de semanas: ");
        semanas = sc.nextInt();
        System.out.println("Digite el nombre del man: ");
        nombres = sc.nextLine();
        
        for (int i = 0; i < semanas; i++) {
            System.out.println("Digite el valor de día de venta: ");
            dia1 = sc.nextDouble();
            System.out.println("Digite el valor de día de venta: ");
            dia2 = sc.nextDouble();
            System.out.println("Digite el valor de día de venta: ");
            dia3 = sc.nextDouble();
            System.out.println("Digite el valor de día de venta: ");
            dia4 = sc.nextDouble();
            System.out.println("Digite el valor de día de venta: ");
            dia5 = sc.nextDouble();
            System.out.println("Digite la cantidad de productos de oficina vendidos: ");
            cantidadOficina = sc.nextInt();
            System.out.println("Digite la cantidad de productos de despensa vendidos: ");
            cantidadDespensa = sc.nextInt();
            Encargado unEncargado = new Encargado(nombres, dia1, dia2, dia3, dia4, dia5);
            unEncargado1[i] = unEncargado;
        }
        
        for (int i = 0; i < semanas; i++) {
            promedio = promedio + unEncargado1[i].calcularPromedio() / semanas;
            System.out.println("\n El promedio de notas es : " + promedio);
        }
    }
}
