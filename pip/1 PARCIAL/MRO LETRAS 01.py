class A:
    def hola(self):
        print('Hola desde A')
class B(A):
    def hola(self):
        print('Hola desde B')
class D(A):
    def hola(self):
        print('Hola desde D')
class C(B):
    def hola(self):
        print('Hola desde C')
class E(D,C):
    def hola(self):
        print('Hola desde E')
class F(D):
    def hola(self):
        print('Hola desde F')
class G(E,C):
    def hola(self):
        print('Hola desde G')
class H(E,B):
    def hola(self):
        print('Hola desde H')
class O(F,G,H):
    pass
o=O()
o.hola()



