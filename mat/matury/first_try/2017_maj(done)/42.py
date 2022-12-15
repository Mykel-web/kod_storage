file = open("dane_PR/dane.txt", "r")
dane = file.read().splitlines()
nie = 0
for wiersz in dane:
    piksele = wiersz.split(" ")
    for pix in range(len(piksele)):
        if piksele[pix] != piksele[len(piksele) -1 -pix]:
            nie += 1
            break
print(nie)
file.close()