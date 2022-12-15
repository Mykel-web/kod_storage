file = open("sygnaly.txt", "r")
dane = file.read().splitlines()

print(dane)

for wiersz in dane:
    ok = True
    for litera in wiersz:
        for znak in range(len(wiersz) - 1):
            odleglosc = ord(litera) - ord(wiersz[znak])
            if odleglosc < 0:
                odleglosc = -odleglosc
            if odleglosc > 10:
                ok = False
    if ok:
        print(wiersz)

