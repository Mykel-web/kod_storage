file = open("dane/identyfikator.txt")
dane = file.read().splitlines()
print(dane)

for id in dane:
    suma = 0
    suma += (ord(id[0]) - 55) * 7
    suma += (ord(id[1]) - 55) * 3
    suma += (ord(id[2]) - 55) * 1
    suma += int(id[4]) * 7
    suma += int(id[5]) * 3
    suma += int(id[6]) * 1
    suma += int(id[7]) * 7
    suma += int(id[8]) * 3
    if suma % 10 != int(id[3]):
        print(id)
    
