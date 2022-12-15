file = open("dane_pr/sygnaly.txt", "r")
dane = file.read().splitlines()
print(dane)

for slowo in dane:
    dobre = True
    for litera in slowo:
        for znak in slowo:
            odleglosc = ord(litera) - ord(znak)
            if odleglosc < 0:
                odleglosc = -odleglosc
            if odleglosc > 10:
                dobre = False
    if dobre:
        print(slowo)