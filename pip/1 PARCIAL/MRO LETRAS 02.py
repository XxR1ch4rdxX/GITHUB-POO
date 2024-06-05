class O:
    def ola(self):
        print('Hola desde O')
class D(O):
    def ola(self):
        print('Hola desde D')
class E(O):
    def ola(self):
        print('Hola desde E')
class F(O):
    def ola(self):
        print('Hola desde F')
class B(D,E):
    def ola(self):
        print('Hola desde B')
class C(D,F):
    def ola(self):
        print('Hola desde C')
class A(B,C):
    pass
a=A()
a.ola()



