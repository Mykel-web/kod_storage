file = open("dane/liczby.txt", "r")
dane = file.read().splitlines()
print(dane)
max_roznica = -1
liczba_n = 0
for liczba in dane:
    roznica = int(liczba) - int(liczba[::-1])
    if roznica < 0:
        roznica = - roznica
    if roznica > max_roznica:
        max_roznica = roznica
        liczba_n = liczba
print(liczba_n, max_roznica)
