'''
Crear un sistema para una escuela. En este sistema, vamos a tener dos clases principales:

La clase Persona tendrá los atributos de y y un método que imprima el nombre y la edad de la persona.
La clase heredará de la clase
y también tendrá un atributo adicional: y un método que imprima el grado del estudiante.

Deberás utilizar super en el método de inicialización (init) para reutilizar el código de la clase padre
(Persona).
'''

class Persona:
    def __init__(self,nombre,ap,am,edad):
        self.nombre=nombre
        self.edad=edad
        self.ap=ap
        self.am=am

class Estudiante(Persona):
    def __init__(self,nombre,ap,am,edad,grado,matricula):
        super().__init__(nombre,ap,am,edad)
        self.grado=grado
        self.matricula=matricula

    def estudiar(self):
        return f'\nEl estudiante {self.nombre} {self.ap} {self.am} de la edad de {self.edad} con la matricula {self.matricula}\nque va en {self.grado} grado, esta estudiando!!'

richy = Estudiante('Ricardo','Sandoval','Bermudez',20,'6 To',122042515)
print(richy.estudiar())



if isinstance(richy,Estudiante)==True:
    si1='Si, si es'
else:
    si1='No,no  es'

if issubclass(Estudiante,Persona)==True:
    si2='Si, si es :D'
else:
    si2='No,no  es tontito jaajajjaj'


print('\nRichy es instancia de Estudiante?? \n',si1 ,'\n')
print('Estudiante es subclase de Persona?? \n',si2)

