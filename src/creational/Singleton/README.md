# Singleton

### Definição da Wikipedia
> In software engineering, the singleton pattern is a software design pattern that restricts the instantiation of a class to one object. This is useful when exactly one object is needed to coordinate actions across the system.
> Singleton pattern is actually considered an anti-pattern and overuse of it should be avoided. It is not necessarily bad and could have some valid use-cases but should be used with caution because it introduces a global state in your application and change to it in one place could affect in the other areas and it could become pretty difficult to debug. The other bad thing about them is it makes your code tightly coupled plus mocking the singleton could be difficult.

### Resumindo
> Garante que apenas um objeto de uma determinada classe seja criado.

### Exemplo do mundo real
> Só pode haver um presidente do país por vez.

**Exemplo de código**

```python
class Singleton(type):
    """
        Guarda as instâncias criadas da classe
    """
    _instances = {}

    """
        Método - checa se a classe está presente no dicionário de instâncias
        Caso não esteja - cria-o
    """
    def __call__(calledClass, *args, **kwargs):
        if calledClass not in calledClass._instances:
            instance = super().__call__(*args, **kwargs)
            calledClass._instances[calledClass] = instance
        return calledClass._instances[calledClass]


class President(metaclass=Singleton):
    pass
```

Utilizando a classe Singleton
```python
p1 = President()
p2 = President()

if id(p1) == id(p2):
    print("Objetos do mesmo tipo - Mesma instância.")
else:
    print("Objetos de tipos diferentes - Diferentes instâncias.")
```