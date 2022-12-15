# funkcja do wywolywania lambd
def funkcja(fun, liczba1):
    return fun(liczba1)


# lambda 4
print(funkcja(lambda x: x * 100, 5))

# lambda 3
procent = (lambda x: x * 100)(5)
print(procent)

# lambda 2
print((lambda x: x * 100)(5))

# lambda 1
sto = lambda x: x * 100
print(sto(5))

# przydatne
def setka(x): return x * 100
print(setka(5))
