/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package aproximacion1;

import java.util.Scanner;

/**
 *
 * @author Polar
 */
public class Ventas{
	public static void main( final String Args[]) throws Exception {
		Scanner entrada = new Scanner(System.in);
		int semanas = 0;
		final Encargado[] unEncargado1 = new Encargado[50];
		String nombres;
		double dia1, dia2, dia3, dia4, dia5;
		double promedio = 0;
		System.out.println("Digite el numero de semanas: ");
		semanas = entrada.nextInt();
		for (int i = 0; i < semanas; i++) {
			System.out.println("Digite el nombre del encargado ");
			nombres = entrada.nextLine();
			System.out.println("Digite el valor de día de venta: ");
			dia1 = entrada.nextDouble();
			System.out.println("Digite el valor de día de venta: ");
			dia2 = entrada.nextDouble();
			System.out.println("Digite el valor de día de venta: ");
			dia3 = entrada.nextDouble();
			System.out.println("Digite el valor de día de venta: ");
			dia4 = entrada.nextDouble();
			System.out.println("Digite el valor de día de venta: ");
			dia5 = entrada.nextDouble();
			final Encargado unEncargado = new Encargado();
			unEncargado.nombre = nombres;
			unEncargado.diauno = dia1;
			unEncargado.diados = dia2;
			unEncargado.diatres = dia3;
			unEncargado.diacuatro = dia4;
			unEncargado.diacinco = dia5;
			unEncargado1[i] = unEncargado;

		}
		for (int i = 0; i < semanas; i++) {
			final double sum = (unEncargado1[i].diauno + unEncargado1[i].diados + unEncargado1[i].diatres
					+ unEncargado1[i].diacuatro + unEncargado1[i].diacinco) / 5;
			promedio = promedio + sum / semanas ; 
			System.out.println ("\n El promedio de notas es: " + promedio);
        	}
    	}
    }