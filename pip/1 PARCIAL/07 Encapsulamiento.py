class Persona:
    def __init__(self, nombre, edad):
        self.__nombre = nombre
        self.__edad = edad


    @property
    def getNombre(self):
        return self.__nombre

    @nombre.setter
    def setNombre(self, newNombre):
        self.__nombre = newNombre

    @nombre.deleter
    def nombre(self):
        del self.__nombre

javier = Persona('Javier', 24)

nombre=javier.nombre
print(nombre)

javier.nombre=('Javi')
nombre = javier.nombre


#javier.setNombre('Richy Sandoval')
#print(javier.getNombre())  # Salida: Richy Sandoval

