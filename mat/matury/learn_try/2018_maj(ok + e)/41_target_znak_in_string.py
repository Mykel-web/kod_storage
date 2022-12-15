file = open("sygnaly.txt", "r")
dane = file.read().splitlines()

print(dane)
numer = 0
wynik = ""
litera = 0
for wiersz in dane:
    numer += 1
    if numer == 40:
        for znak in wiersz:
            litera += 1
            if litera == 10:
                wynik += znak
                litera = 0
                break
        numer = 0
print(wynik)