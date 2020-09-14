# Singleton

### Definição da Wikipedia
> Singleton é um padrão de projeto de software. Este padrão garante a existência de apenas uma instância de uma classe, mantendo um ponto global de acesso ao seu objeto. Alguns projetos necessitam que algumas classes tenham apenas uma instância. Por exemplo, em uma aplicação que precisa de uma infraestrutura de log de dados, pode-se implementar uma classe no padrão singleton. Desta forma existe apenas um objeto responsável pelo log em toda a aplicação que é acessível unicamente através da classe singleton.

> Nota linguística: O termo vem do significado em inglês para um conjunto (entidade matemática) que contenha apenas um elemento.

### Resumindo
> Garante que apenas um objeto de uma determinada classe seja criado.

### Exemplo do mundo real
> Só pode haver um presidente execercendo mandato no país por vez.

### Observação
> Singleton é tido como um anti-pattern por violar alguns princípios de design de código. Um deles é o **princípio de responsabilidade única**


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