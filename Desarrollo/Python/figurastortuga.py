import turtle
b = turtle.Screen()

def poligono (lado, n):
    for i in range(n):
        forward(lado)
        right(360 / n) 
def espiral ():
    for i in range(10, 200, 5):
        poligono(i, 3)
        right(10)

espiral()
turtle.mainloop()