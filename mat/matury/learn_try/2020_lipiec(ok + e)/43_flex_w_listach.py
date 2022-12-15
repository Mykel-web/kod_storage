file = open("identyfikator.txt", "r")
dane = file.read().splitlines()

print(dane)

idd = []
waga = [7, 3, 1, 7, 3, 1, 7, 3]
idd_waga = []
for ide in dane:
    for znak in range(len(ide)):
        if not ide[znak].isdigit():
            idd.append(ord(ide[znak]) - 55)
        if znak > 3:
            idd.append(ide[znak])
    for i in range(8):
        idd_waga.append(waga[i] * int(idd[i]))
    suma = 0
    for a in idd_waga:
        suma += a
    if suma % 10 != int(ide[3]):
        print(ide)
    idd.clear()
    idd_waga.clear()
