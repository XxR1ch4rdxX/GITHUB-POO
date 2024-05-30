#Es una clase que no se puede instanciar ya que unicamente sirve como  "plantilla"
from abc import ABC, abstractmethod

class Persona(ABC):
    @abstractmethod
    def __init__(self, nombre,edad,sexo,actividad):
        self.nombre = nombre
        self.edad = edad
        self.sexo = sexo
        self.actividad = actividad
    @abstractmethod

    def doactividad(self):
        pass

    def presentarse(self):
        print(f'Hola mi nombre es {self.nombre} ')



class Estudiante(Persona):
    def __init__(self,nombre,edad,sexo,actividad):
        super().__init__(nombre,edad,sexo,actividad)

    def doactividad(self):
        print(f' mi actividad es {self.actividad}')

class Programador(Persona):
    def __init__(self,nombre,edad,sexo,actividad):
        super().__init__(nombre,edad,sexo,actividad)

    def doactividad(self):
        print(f'El programador {self.nombre} esta {self.actividad}')

class Profesor(Persona):
    def __init__(self,nombre,edad,sexo,actividad):
        super().__init__(nombre,edad,sexo,actividad)

    def doactividad(self):
        print(f'El profesor {self.nombre} Esta {self.actividad}')




richard = Estudiante('Richard',20,'Masculino','Estudiar')
pedro = Programador('Pedrolo',23,'masculino','Programando')
mariana = Profesor('Mariana',41,'Femenino','Educar')


richard.presentarse()
richard.doactividad()


pedro.presentarse()
pedro.doactividad()


mariana.presentarse()
mariana.doactividad()