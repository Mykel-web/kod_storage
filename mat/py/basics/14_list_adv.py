print("\n ---- sprawdzenie dla elementow listy----- ")
lista = list(range(10))
print(lista)


print("\n if any([i == 0 for i in lista])")
lista = [i * 2 for i in lista]
if any([x == 0 for x in lista]):
    print(True)


print("\n if all([i > 0 for i in lista])")
if all([i > 0 for i in lista]):
    print(True)
else:
    print(False)


print("\n for i in enumerate(lista)")
for i in enumerate(lista):
    print("numer = ", i[0], "wartosc = ", i[1])





