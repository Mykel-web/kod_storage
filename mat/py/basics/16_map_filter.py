lista = list(range(0, 51, 5))
print(lista)

def funkcja(x):
    if x < 25:
        return x

print("map: ")
wynik = map(funkcja, lista)
print(list(wynik))
wynik = map(lambda x: x * 2, lista)
print(list(wynik))

print("filter: ")
wynik = filter(lambda x: x > 25, lista)
print(list(wynik))