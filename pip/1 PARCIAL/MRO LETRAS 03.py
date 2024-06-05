class O:
    def oola(self):
        print('Hola desde O')
class C(O):
    def oola(self):
        print('Hola desde C')
class A(O):
    def oola(self):
        print('Hola desde A')
class B(O):
    def oola(self):
        print('Hola desde B')
class D(O):
    def oola(self):
        print('Hola desde D')
class E(O):
    def oola(self):
        print('Hola desde E')
class K1(C,A,B):
    def oola(self):
        print('Hola desde K1')
class K3(A,D):
    def oola(self):
        print('Hola desde K3')
class K2(B,D,E):
    def oola(self):
        print('Hola desde K1')
class Z(K1,K3,K2):
  pass
z=Z()
z.oola()