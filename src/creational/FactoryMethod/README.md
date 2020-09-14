# Factory Method

### Definição da Wikipedia
> Factory Method ou Construtor virtual, na ciência da computação, é um padrão de projeto de software (design pattern, em inglês) que permite às classes delegar para subclasses decidirem, isso é feito através da criação de objetos que chamam o método fabrica especificado numa interface e implementado por um classe filha ou implementado numa classe abstrata e opcionalmente sobrescrito por classes derivadas.

### Resumindo
> Factory Method: Fornece uma maneira de delegar a lógica de criação de objetos às classes filhas.

### Exemplo do mundo real
> Considere que você é dono de uma fábrica de automóveis que constrói carros elétricos e a combustão. A primeira versão da sua fábrica pode criar apenas carros "populares".
>  Depois de um tempo, sua fábrica se torna bastante popular. Todos os dias você recebe dezenas de solicitações de clientes querendo comprar carros mais "luxuosos".

### Quando utilizar?
> Quando a criação de um objeto necessita de algum tipo de lógica. Nesse caso faz sentido criar uma fábrica dedicada a este objeto ao invés de repetir o código de sua instanciação em vários lugares.

**Exemplo de código**

```python
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
    def getType(self, type) -> FiatModel:
        return {
            CarCreator.CHEAP: Fusca(),
            CarCreator.FAST : Ferrari()
        }[type]


'''
    Define os modelos de carro da fábrica Fiat
'''
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
```

Utilizando o criador de objetos
```python
print("Criando objeto concreto da fábrica Fiat.\n")
fusca = ConcreteFiat().makeCar(CarCreator.CHEAP)
fusca.driveTo('Santos')
fusca.printCarLogo()

ferrari = ConcreteFiat().makeCar(CarCreator.FAST)
ferrari.driveTo('São Paulo')
ferrari.printCarLogo()
```
