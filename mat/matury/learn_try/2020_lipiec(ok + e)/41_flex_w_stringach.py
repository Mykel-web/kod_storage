file = open("identyfikator.txt", "r")
dane = file.read().splitlines()

print(dane)

suma = 0
max_suma = 0
max_ide = ""
maxy = []
for ide in dane:
    for znak in ide:
        if znak.isdigit():
            suma += int(znak)
    if suma > max_suma:
        max_suma = suma
        max_ide = ide
        maxy.clear()
    if suma == max_suma:
        maxy.append(ide)
    suma = 0

for cos in maxy:
    print(cos)
