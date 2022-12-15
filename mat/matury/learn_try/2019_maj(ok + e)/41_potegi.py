file = open("liczby.txt", "r")
lines = file.readlines()
liczby = []
for line in lines:
    a = line.strip()
    a = int(a)
    liczby.append(a)
print(liczby)


def potega3(x):
    for i in range(12):
        if 3 ** i == x:
            return True


ilosc = 0
for liczba in liczby:
    if potega3(liczba):
        ilosc += 1
print(ilosc)
