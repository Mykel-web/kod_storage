file = open("dane\dane1.txt")
dane1 = file.read().splitlines()
file = open("dane\dane2.txt")
dane2 = file.read().splitlines()

ile = 0
p1 = 0
p2 = 0
for i in range(len(dane1)):
    wiersz1 = dane1[i].split()
    wiersz2 = dane2[i].split()
    for liczba in wiersz1:
        if int(liczba) % 2 == 0:
            p1 += 1
    if p1 == 5:
        for liczba in wiersz2:
            if int(liczba) % 2 == 0:
                p2 += 1
    if p2 == 5:
        ile +=1
    p2 = 0
    p1 = 0
print(ile)