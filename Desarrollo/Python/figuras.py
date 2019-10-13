print ("Bienvenido")
print ("Elija la operacion a realizar")
print ("1. Área triángulo")
print ("2. Área Rectángulo")
print ("3. Área circulo")
print ("4. Área rombo")
print ("5. Área trapecio")
print ("6. Área cuadrado")
opcion = int (input(": "))
if opcion == 1:
    print ("Triangulo")
    a = float(input("Ingrese altura: "))
    b = float(input("Ingrese base: "))
    c = a*b/2
    print("El area del triangulo es: ", c)
elif opcion == 2:
    print ("Retangulo")
    a = float(input("Ingrese altura: "))
    b = float(input("Ingrese base: "))
    c = a*b/2
    print("El area del rectangulo es: ", c)
elif opcion == 3:
    print ("Circulo")
    p = 3.14
    r = float (input("ingrese radio: "))
    c = p*r**2
    print("El area del circulo es: ", c)
elif opcion == 4:
    print ("Rombo")
    a = float(input("Ingrese diagonal menor: "))
    b = float(input("Ingrese diagonal mayor: "))
    c = a*b/2
    print("El area del rombo es: ", c)
elif opcion == 5:
    print ("Trapecio")
    a = float(input("Ingrese altura: "))
    b = float(input("Ingrese base mayor: "))
    d = float(input("Ingrese base menor"))
    c = (d+b)*a/2
    print("El area del trapecio es: ", c)
elif opcion == 6:
    print ("Cuadrado")
    a = float(input("Ingrese lado: "))
    c = a**2
    print("El area del cuadrado es: ", c)