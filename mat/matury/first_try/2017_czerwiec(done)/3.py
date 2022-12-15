import math

file = open("dane/punkty.txt", "r")
dane = file.read().splitlines()
dlugosci = []
for pkt in dane:
    punkt = pkt.split(" ")
    x = int(punkt[0])
    y = int(punkt[1])
    for pkt2 in dane:
        punkt2 = pkt2.split(" ")
        x2 = int(punkt2[0])
        y2 = int(punkt2[1])
        odl = math.floor(math.sqrt( (x2-x)**2 + (y2 - y)**2 ))
        dlugosci.append([odl, pkt, pkt2])
print(max(dlugosci))




