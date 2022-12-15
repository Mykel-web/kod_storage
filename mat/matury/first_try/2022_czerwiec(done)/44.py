file = open("dane/liczby.txt", "r")
dane = file.read().splitlines()
print(dane)

rozne = []
for liczba in dane:
    if liczba not in rozne:
        rozne.append(liczba)
ile_2 = 0
ile_3 = 0
print(rozne)
for liczba in rozne:
    if dane.count(liczba) == 2:
        ile_2 += 1
    if dane.count(liczba) == 3:
        ile_3 += 1
print(len(rozne), ile_2, ile_3)