file = open("dane/identyfikator.txt")
dane = file.read().splitlines()
print(dane)
max_suma = 0
for id in dane:
    liczba = id[3:]
    suma = 0
    for l in liczba:
        suma += int(l)
    if suma > max_suma:
        max_suma = suma
print(max_suma)
idy = []
for id in dane:
    liczba = id[3:]
    suma = 0
    for l in liczba:
        suma += int(l)
    if suma == max_suma:
        idy.append(id)
print(idy)