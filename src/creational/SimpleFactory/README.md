# Simple Factory

### Definição da Wikipedia
> Na programação orientada a objetos (OOP), uma fábrica é um objeto para criar outros objetos - formalmente, uma fábrica é uma função ou método que retorna objetos de um protótipo ou classe variável de alguma chamada de método, que é considerada "nova" .

### Resumindo
> Factory Method: É uma função ou método que deve ser usado para criar objetos sem especificar suas classes concretas.

### Por que utilizar?
> Factory Method é útil quando precisamos de alta flexibilidade no código.

### Exemplo do mundo real
> Considere que você é dono de uma fábrica de automóveis que constrói carros elétricos e a combustão. O que seria melhor, ter uma única fábrica onde os dois tipos de carros são construídos? Ou ter fábricas separadas para cada tipo de carro?
> Dado ao fato do precesso de criação desses dois tipos de veículos exigirem lógicas de criação diferenciadas, faz mais sentido criar fabricas separadas.

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
```

Utilizando o criador de objetos
```python
car = ConcreteFerrari().makeCar()
car.driveTo('Paris')
```
