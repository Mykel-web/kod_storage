file1 = open("dane1.txt", "r")
dane1 = file1.read().splitlines()
dane_1 = []
for fragment in dane1:
    a = fragment.split(" ")
    dane_1.append(a)

dane_2 = []
file2 = open("dane2.txt", "r")
dane2 = file2.read().splitlines()
for fragment in dane2:
    a = fragment.split(" ")
    dane_2.append(a)

print(dane_1)
print(dane_2)

parzyste = 0
ile = 0
for element in range(len(dane_1)):
    #dane 1
    for i in range(len(dane_1[element])):
        if int(dane_1[element][i]) % 2 == 0:
            parzyste += 1
    if parzyste == 5:
        parzyste = 0
        for i in range(len(dane_2[element])):
            if int(dane_2[element][i]) % 2 == 0:
                parzyste += 1
        if parzyste == 5:
            ile += 1
    parzyste = 0

print(ile)



