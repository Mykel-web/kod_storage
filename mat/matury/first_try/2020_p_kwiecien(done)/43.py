file = open("dane4.txt")
dane = file.read().splitlines()
liczby = list(map(int, dane))

luki = []
for i in range(len(liczby) - 1):
    dodac = True
    luka = liczby[i] - liczby[i+1]
    if luka < 0:
        luka = -luka
    if len(luki) == 0:
        luki.append([luka, 1])
    for l in range(len(luki)):
        if luki[l][0] == luka:
            luki[l][1] += 1
            dodac = False
    if dodac:
        luki.append([luka, 1])
max_ile = 0
for i in range(len(luki)):
    if luki[i][1] > max_ile:
        max_ile = luki[i][1]
print("max ile ", max_ile)
for i in range(len(luki)):
    if luki[i][1] == max_ile:
        print(luki[i][0])
