file = open("dane1.txt", "r")
dane1 = file.read().splitlines()
file = open('dane2.txt', "r")
dane2 = file.read().splitlines()
liczby1 = []
liczby2 = []
for wiersz in range(len(dane1)):
    a = dane1[wiersz].split(" ")
    c = list(map(int, a))
    b = dane2[wiersz].split(" ")
    d = list(map(int, b))
    liczby1.append(c)
    liczby2.append(d)
print(liczby1)
print(liczby2)

ile = 0
numery = ""

for wiersz in range(len(liczby1)):
    same = True
    for liczba in liczby1[wiersz]:
        if liczba not in liczby2[wiersz]:
            same = False
            break
    if same:
        for liczba in liczby2[wiersz]:
            if liczba not in liczby1[wiersz]:
                same = False
                break
        if same:
            ile += 1
            numery += str(wiersz+1)+", "
print(ile)
print(numery)
