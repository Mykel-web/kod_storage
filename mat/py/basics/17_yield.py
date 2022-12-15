def potegi(x):
    return x ** 2
liczby = []
for i in range(1, 6):
    liczby.append(potegi(i))
print(liczby)

liczby2 = []
def potega(x):
    for liczba in range(1, x):
        yield liczba ** 2
for potega in potega(6):
    liczby2.append(potega)
print(liczby2)

def parzysta(x):
    for i in range(0, x):
        if i % 2 == 0:
            yield i
for i in parzysta(20):
    print(i, " jest parzysta")
print(list(parzysta(20)))