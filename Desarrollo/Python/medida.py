print ("Bienvenido")
print ("Ingrese la medida en centimetros: ")
a = int(input(": "))
print ("Elija la opcion a realizar")
print ("1. convertir a metros")
print ("2. convertir a kilometros")
print ("3. convertir a milimetros")
opcion = int (input(": "))
if opcion == 1:
    print ("metros")
    c = a*1/100
    print("en metros es: ", c)
elif opcion == 2:
    print ("kilometros")
    c = (a*1/100)*(1/1000)
    print("en kilometros es: ", c)
elif opcion == 3:
    print ("milimetros")
    c = a*10/1
    print("en milimetros es: ", c)