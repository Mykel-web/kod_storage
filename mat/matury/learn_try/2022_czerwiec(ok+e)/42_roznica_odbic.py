file = open("DANE/liczby.txt", "r")
dane = file.read().splitlines()

print(dane)

liczba_roznica = [0, 0]
liczby = []
for liczba in dane:
    odwrot = liczba[::-1]
    roznica = int(liczba) - int(odwrot)
    if roznica < 0:
        roznica = - roznica
    if roznica > liczba_roznica[1]:
        liczba_roznica[1] = roznica
        liczba_roznica[0] = liczba
print("wynik: ")
print(liczba_roznica)

