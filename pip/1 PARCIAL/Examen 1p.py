from abc import ABC, abstractmethod
class SuperHeroe(ABC):
    @abstractmethod
    def __init__(self,nombre,edad,superpoder):
        self.nombre=nombre
        self.edad=edad
        self.superpoder=superpoder

    @abstractmethod
    def mostrarSuperPoder(self):
       pass

class Persona():
    def __init__(self,nombre,edad,actividad):
        self.nombre=nombre
        self.edad=edad
        self.actividad =actividad

    def mostrarActividad(self):
        print(f'eres {self.nombre} tu actividad es {self.actividad}')

    def presentarse(self):
        print(f'Hola mi nombre es {self.nombre} y tengo {self.edad} years old ')

class HeroePersona(Persona,SuperHeroe):
    def __init__(self,nombre,edad,actividad,superpoder):
        Persona.__init__(self,nombre,edad,actividad)
        SuperHeroe.__init__(self,nombre,edad,superpoder)

    def mostrarActividad(self):
        print(f'Soy una persona y un supereroe que sabe {self.actividad}')

    def mostrarSuperPoder(self):
        print(f'Soy una perosna normal , mi nombre es {self.nombre} pero tambien soy un heroe que puede {self.superpoder}')

class menu:

    def op1(self):
        name = input('Ingresa tu nombre ')
        age = input('Ingresa tu edad ')
        act = input('Ingresa tu actividad ')
        sp = input('Ingresa tu supoerpoder \n')
        shazam = HeroePersona(name, age, act, sp)
        shazam.mostrarSuperPoder()
        shazam.mostrarActividad()

    def op2(self):
        name = input('Ingresa tu nombre ')
        age = input('Ingresa tu edad ')
        act = input('Ingresa tu actividad \n')
        personaa = Persona(name, age, act)
        personaa.mostrarActividad()
        personaa.presentarse()

    def op3(self):
        heroe=SuperHeroe
        heroe.__init_subclass__(ABC)
        print('Estas intentando instanciar una clase abstracta jajajajsjssa')




dec=int(input('Selecciona que quieres hacer\n\n1)Instanciar HeroePersona \n2)Instanciar Persona y mostrar sus atributos\n3)Instanciar SuperHeroe y verificas si es abstracta\n\n'))

if  dec==1:
    opcion=menu()
    opcion.op1()
elif dec==2:
    opcion = menu()
    opcion.op2()
elif dec==3:
    opcion = menu()
    opcion.op3()



