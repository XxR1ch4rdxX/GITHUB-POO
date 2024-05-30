#el polimorfismo es un concepto de POO
#Hacer el mismo metodo de diferente forma
# Es decir, que muchas objetos hagan el mismo metodo pero lo hagan de una forma distinta

#Y como gritan los neros: WOOF WOOFF
#Como gritan las neras: Dale Bogeto #

class Persona:
    def comogritan(self):
        `pass

class Nero(Persona):
    def comogritan(self):
        return 'WOOF WOFF'

class Nera(Persona):
    def comogritan(self):
        return 'Dale bogeto'

nero = Nero()
nera = Nera()

print(nera.comogritan())
print(nero.comogritan())

