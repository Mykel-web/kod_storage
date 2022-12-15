file = open("dane_PR/dane.txt", "r")
dane = file.read().splitlines()
sasn = [[0, -1], [0, 1], [-1, 0], [1, 0]]
obraz = []
for wiersz in dane:
    piksele = wiersz.split(" ")
    piksele = list(map(int, piksele))
    obraz.append(piksele)

max_ile = 0
for x in range(320):
    ile = 1
    for y in range(199):
        if obraz[y][x] == obraz[y+1][x]:
            ile += 1
        else:
            if ile > max_ile:
                max_ile = ile
            ile = 1
        if y == 198:
            if ile > max_ile:
                max_ile = ile

print(max_ile)
