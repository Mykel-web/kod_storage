file = open("liczby.txt", "r")
lines = file.readlines()

liczby = []
for line in lines:
    a = line.strip()
    liczby.append(a)
print(liczby)


def silnia(x):
    if x < 2:
        return 1
    else:
        return x * silnia(x - 1)


for liczba in liczby:
    suma = 0
    for cyfra in liczba:
        suma += silnia(int(cyfra))
    if suma == int(liczba):
        print(liczba)
