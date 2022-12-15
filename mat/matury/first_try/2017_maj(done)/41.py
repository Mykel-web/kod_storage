file = open("dane_PR/dane.txt", "r")
dane = file.read().splitlines()
piksele = []
for wiersz in dane:
    piks = wiersz.split(" ")
    for piksel in piks:
        piksele.append(int(piksel))
print(piksele)
print("(ciemny)min: ",min(piksele))
print("(jasny)max: ",max(piksele))