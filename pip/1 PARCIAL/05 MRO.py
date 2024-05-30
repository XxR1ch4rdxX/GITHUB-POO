#MRO -> Method Resolution Order (Metodo de resolucion de orden)
#Se usa cuando tenemos muchas clases, pa que paiton sepa cuando agarrar metodos de las clases
# o algo asi xd

class A:
    def hablar (self):
        print('Hablando desde A')

class F:
    def hablar (self):
        print('Hablando desde F')

class B(A):
    def hablar(self):
        print('Hablando desde B')


class C(F):
    def hablar(self):
        print('Hablando desde C')


class D(B,C):
    def hablar(self):
        print('Hablando desde D')

d=D()
d.hablar()

print(D.mro())
