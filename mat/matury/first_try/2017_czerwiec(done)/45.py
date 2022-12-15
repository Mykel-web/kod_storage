import math

file = open("dane/punkty.txt", "r")
dane = file.read().splitlines()

#a x = (-5000,5000) and y = (-5000,5000)
#b y = -5000 / 5000 x = <-5000,5000> | x = -5000 / 5000 y = <-5000,5000>
#c x > 5000 / x < -5000 and y any | y > 5000 or y < -5000 and x any
a = 0
b = 0
c = 0
for pkt in dane:
    punkt = pkt.split(" ")
    x = int(punkt[0])
    y = int(punkt[1])
    if -5000 < x < 5000 and -5000 < y < 5000:
        a += 1
    if (y == -5000 or y == 5000) and -5000 <= x <= 5000:
        b += 1
    if (x == -5000 or x == 5000) and -5000 <= y <= 5000:
        b += 1
    if (x > 5000 or x < -5000) or (y > 5000 or y < -5000):
        c += 1
print("a: ",a, " b: ",b, " c: ",c)


