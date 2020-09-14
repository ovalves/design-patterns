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

if __name__ == "__main__":
    p1 = President()
    p2 = President()

    if id(p1) == id(p2):
        print("Objetos do mesmo tipo - Mesma instância.")
    else:
        print("Objetos de tipos diferentes - Diferentes instâncias.")