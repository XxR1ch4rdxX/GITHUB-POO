class Animal:
    def comer(self):
        print('Esta comiendo')

class Mamifero(Animal):

    def amamantar(self):
        print('El animal esta amamantando a su bebe ')

class Ave(Animal):

    def volar(self):
        print('Tu animal esta volando ')

class Murcielago(Mamifero,Ave):

    def skill(self):
        print('Tu murcielago esta existiendo')

desmodus=Murcielago()
desmodus.comer()
desmodus.volar()
desmodus.amamantar()







