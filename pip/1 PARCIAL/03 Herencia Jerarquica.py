class ComidaMex:
    def __init__(self,tortilla,salsa,frijoles,queso,carne):
        self.tortilla=tortilla
        self.salsa=salsa
        self.frijoles=frijoles
        self.queso=queso
        self.carne=carne

class Tacos(ComidaMex):
    def __init__(self, tortilla, salsa, carne, orden, frijoles='', queso=''):
        super().__init__(tortilla, salsa, frijoles, queso, carne)
        self.orden = orden

    def comer_tacos(self):
        tt=''
        if self.orden>1:
            tt='s'
        print (f'Me comi una orden de {self.orden} taco{tt} de {self.carne} con una salsita {self.salsa} , con tortilla de {self.tortilla}\n')



class Chilaquiles(ComidaMex):
    def __init__(self, tortilla, salsa, carne ,queso, cebolla, frijoles='',):
        super().__init__(tortilla, salsa, frijoles, queso, carne)
        self.cebolla = cebolla

    def comerChilaquiles(self):
        print(f'Me estoy comiendo unos chilaquiles con salsa {self.salsa} , tortillas de {self.tortilla} \ncon {self.carne} , {self.queso} y con un poco de celbolla {self.cebolla}\n')

class Enchiladas(ComidaMex):
    def __init__(self, tortilla, salsa, carne, queso, cebolla, frijoles,):
        super().__init__(tortilla, salsa, frijoles, queso, carne)
        self.cebolla = cebolla

    def comerEnchiladas(self):
        print(f'Comiendo Enchiladas con salsa {self.salsa} , tortillas de {self.tortilla} \ncon relleno de {self.carne} , {self.queso}, una guarnicion de {self.frijoles} y cebolla {self.cebolla}')

tacopastor = Tacos('Maiz','Verde','Pastor',3)
tacopastor.comer_tacos()

chilav = Chilaquiles('Maiz','Verde','Pollo','Philadelfia','Morada')
chilav.comerChilaquiles()

enchiladasbandera = Enchiladas('Maiz','Verde y roja ','Cordero azado','Oxaca','Blanca','Bayos')
enchiladasbandera.comerEnchiladas()