file = open("DANE/liczby.txt", "r")
dane = file.read().splitlines()

liczby = []
print(dane)
for liczba in dane:
    odwrot = liczba[::-1]
    odwrot = int(odwrot)
    if odwrot % 17 == 0:
        liczby.append(odwrot)

print("odbicia podzielne przez 17: ", liczby)