file = open("dane\dane1.txt")
dane1 = file.read().splitlines()
file = open("dane\dane2.txt")
dane2 = file.read().splitlines()

ile = 0
for i in range(len(dane1)):
    wiersz1 = dane1[i].split()
    wiersz2 = dane2[i].split()
    if wiersz1[len(wiersz1) - 1] == wiersz2[len(wiersz1) - 1]:
        ile += 1
print(ile)