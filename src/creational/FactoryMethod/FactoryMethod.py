from __future__ import annotations
from abc import ABC, abstractmethod

'''
    Classe criadora de objetos do tipo carro
'''
class CarCreator(ABC):
    CHEAP = 'cheap' # Carros do tipo "popular"
    FAST = 'fast' # Carros do tipo "luxuoso"

    '''
        Necessário definir o método makeCar como obrigatório para as classes filhas
    '''
    @abstractmethod
    def makeCar(self, type):
        pass


'''
    Classe criadora de carros da fábrica Fiat
'''
class ConcreteFiat(CarCreator):
    '''
        Cria um carro de acordo com seu tipo
    '''
    def makeCar(self, type) -> FiatModel:
        return self.getType(type)

    '''
        Retorna o tipo de carro de acordo com seu tipo
    '''
    def getType(self, x) -> FiatModel:
        return {
            CarCreator.CHEAP: Fusca(),
            CarCreator.FAST : Ferrari()
        }[x]


class FiatModel():
    @abstractmethod
    def printCarLogo(self):
        pass


'''
    Objeto do tipo Ferrari e métodos que o definem como carro
'''
class Ferrari(FiatModel):
    def driveTo(self, destination) -> str:
        print(f"Driving to: {destination}.")

    def printCarLogo(self):
        print(f"Fiat Ferrari Model")

'''
    Objeto do tipo Fusca e métodos que o definem como carro
'''
class Fusca(FiatModel):
    def driveTo(self, destination) -> str:
        print(f"Driving to: {destination}.")

    def printCarLogo(self):
        print(f"Fiat Fusca Model")


if __name__ == "__main__":
    print("Criando objeto concreto da fábrica Fiat.")
    fusca = ConcreteFiat().makeCar(CarCreator.CHEAP)
    fusca.driveTo('Santos')
    fusca.printCarLogo()

    ferrari = ConcreteFiat().makeCar(CarCreator.FAST)
    ferrari.driveTo('São Paulo')
    ferrari.printCarLogo()