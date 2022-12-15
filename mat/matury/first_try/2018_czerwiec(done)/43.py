file = open("dane\dane1.txt")
dane1 = file.read().splitlines()
file = open("dane\dane2.txt")
dane2 = file.read().splitlines()

ile = 0
numery = []
for i in range(len(dane1)):
    same = True
    razem = []
    wiersz1 = dane1[i].split()
    wiersz2 = dane2[i].split()
    for liczba in wiersz1:
        razem.append(liczba)
    for liczba in wiersz2:
        if liczba not in razem:
            same = False
    if same:
        ile += 1
        numery.append(i + 1)
print(ile, numery)