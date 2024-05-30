#Clase padreeee
class Persona:
    def __init__(self, nombre, edad,nacionalidad):
        self.nombre = nombre
        self.edad= edad
        self.nacionalidad = nacionalidad

    def hablar (self):
        print(f'{self.nombre} Esta hablando')


#Clase hija (la que hereda de persona)

class Empleado(Persona):
    def __init__(self,nombre,edad,nacionalidad,trabajo,salario):
        super().__init__(nombre,edad,nacionalidad)
        self.trabajo=trabajo
        self.salario =salario

roberto = Empleado('Roberto','18','Mexicana','Programador','100k')
print(roberto.salario)
roberto.hablar()

