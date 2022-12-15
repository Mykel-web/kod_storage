file = open("dane\liczby.txt")
dane = file.read().splitlines()

def silnia(liczba):
    if liczba == 0 or liczba == 1:
        return 1
    else:
        return liczba * silnia(liczba - 1)

def suma(l):
    suma = 0
    for znak in l:
        suma += silnia(int(znak))
    return suma
    

for liczba in dane:
    if suma(liczba) == int(liczba):
        print(liczba)
