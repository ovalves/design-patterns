from __future__ import annotations
from abc import ABC, abstractmethod

'''
    Classe criadora de objetos do tipo carro
'''
class CarCreator(ABC):
    '''
        Necessário definir o método makeCar como obrigatório para as classes filhas
    '''
    @abstractmethod
    def makeCar(self):
        pass


'''
    Classe criadora de carros do tipo Ferrari
'''
class ConcreteFerrari(CarCreator):
    def makeCar(self) -> Ferrari:
        return Ferrari()


'''
    Objeto do tipo ferrari e métodos que o definem como carro
'''
class Ferrari():
    def driveTo(self, destination) -> str:
        print(f"Driving to: {destination}.\n")


if __name__ == "__main__":
    print("Criando objeto concreto do tipo Ferrari.")
    car = ConcreteFerrari().makeCar()
    car.driveTo('Paris')