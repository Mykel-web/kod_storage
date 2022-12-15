file = open("dane_PR/dane.txt", "r")
dane = file.read().splitlines()
zad = 0
sasn = [[0, -1], [0, 1], [-1, 0], [1, 0]]
obraz = []
for wiersz in dane:
    piksele = wiersz.split(" ")
    piksele = list(map(int,piksele))
    obraz.append(piksele)
for y in range(200):
    for x in range(320):
        ile = False
        for pix in sasn:
            if y+pix[0]<0 or  y+pix[0] > 199 or  x+pix[1] < 0 or  x+pix[1] > 319:
                continue
            roznica = abs(obraz[y][x] - obraz[y+pix[0]][x+pix[1]])
            if roznica > 128:
                ile = True
        if ile:
            zad += 1
print(zad)