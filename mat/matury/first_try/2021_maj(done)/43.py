file = open("dane_2105\instrukcje.txt")
dane = file.read().splitlines()
file.close()


litery = [['Z', 0]]
for ins in dane:
    if ins[0] == 'D':
        dopisz = True
        litera = ins[7]
        for i in range(len(litery)):
            if litery[i][0] == litera:
                dopisz = False
            if litery[i][0] == litera:
                litery[i][1] += 1
                break
        if dopisz:
            litery.append([litera, 1])
maxi = 0
maxl = ""
for i in range(len(litery)):
    if litery[i][1] > maxi:
        maxi = litery[i][1]
        maxl = litery[i][0]
print(maxl, maxi)
            

            

