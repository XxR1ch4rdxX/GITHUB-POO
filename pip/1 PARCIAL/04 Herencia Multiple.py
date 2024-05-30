class Persona:
    def __init__(self,nombre,edad,nacionalidad):
        self.nombre=nombre
        self.edad=edad
        self.nacionalidad=nacionalidad


    def hablar(self):
        print(f'{self.nombre} dice: -Holaaa ')


class Artista:
    def __init__(self,habilidad):
        self.habilidad=habilidad

    def skill(self):
        print(f' Mi habilidad es {self.habilidad} ')

class EmpleadoArtista(Persona,Artista):
    def __init__(self,nombre,edad,nacionalidad,habilidad,salario,empresa,puesto):
        Persona.__init__(self,nombre,edad,nacionalidad)
        Artista.__init__(self,habilidad)
        self.salario=salario
        self.empresa=empresa
        self.puesto=puesto

    def presentarse(self):
        return f'Hola,Mi habilidad es {super().skill()}'


roberto=EmpleadoArtista('Roberto','34','Mexicana','Patinar','30K','GeneralElectric','Programador')

#print(roberto.presentarse())

#Como saber su es una instancia o una subclase:

herencia = isinstance(roberto,Artista)
print(herencia)

herencia2 = issubclass(EmpleadoArtista,Persona)
print(herencia2)

