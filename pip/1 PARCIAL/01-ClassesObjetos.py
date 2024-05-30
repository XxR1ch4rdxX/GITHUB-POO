#una clase es un tipo de dato, una plantilla para crear objetos
import os
import time


class Celular:
    def __init__(self,marca,modelo,camara):
        self.marca = marca
        self.modelo = modelo
        self.camara = camara

    def llamar(self):
        print(f'Esta llamando {self.marca} {self.modelo} {self.camara}')

    def colgar(self):
        print(f'Esta colgando {self.marca} {self.modelo} {self.camara}')

celular1 = Celular ('Apple','15 Pro max','48 mpx')
celular1.llamar()
celular1.colgar()
celular2 = Celular ('Samsung','S23','68 mpx')
celular2.llamar()
celular2.colgar()

os.system('cls')

class Estudiante:
    def __init__(self,nombre,edad,carrera,cuatrimestre):
        self.nombre = nombre
        self.edad = edad
        self.carrera = carrera
        self.cuatrimestre = cuatrimestre

    def estudiar(self):
        print(f'El estudiante {self.nombre} Esta estudiando')
        if self.carrera=='sistemas':
            print(f'El estudiante {self.nombre} de la carrera de {self.carrera} que cursa el {self.cuatrimestre} , esta programando')
        elif self.carrera=='negocios':
            print(
                f'El estudiante {self.nombre} de la carrera de {self.carrera} que cursa el {self.cuatrimestre} {time.sleep(4)}, No esta haciendo nada zzzzzzz')
        elif self.carrera=='mecatronica':
            print(
                f'El estudiante {self.nombre} de la carrera de {self.carrera} que cursa el {self.cuatrimestre} , No esta haciendo nada zzzzzzz')
        else:
            print('Esta estudiando el estudiante estudioso')

estudiantee= Estudiante (input('Ingresa tu nombre '),int(input('Ingresa tu Edad ')),input('Ingresa tu carrera ').lower(),input('Ingresa tu cuatrimestre '))
estudiantee.estudiar()
