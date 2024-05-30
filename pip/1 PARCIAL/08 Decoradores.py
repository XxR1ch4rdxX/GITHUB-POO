def decorador (funcion):

    def funcionDecorada():
        print('Antes de llamar a la funcion')
        funcion()
        print('Despues de la funcion')
    return  funcionDecorada


@decorador
def saludo():
    print('saludo')


saludo()