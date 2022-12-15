file = open("dane/punkty.txt", "r")
dane = file.read().splitlines()
ile = 0
for pkt in dane:
    czy = True
    cyfry = []
    punkt = pkt.split(" ")
    x = punkt[0]
    y = punkt[1]

    for cyfra in x:
        cyfry.append(cyfra)
    for cyfra in y:
        if cyfra not in cyfry:
            czy = False

    cyfry = []
    for cyfra in y:
        cyfry.append(cyfra)
    for cyfra in x:
        if cyfra not in cyfry:
            czy = False
    if czy:
        ile += 1
print(ile)