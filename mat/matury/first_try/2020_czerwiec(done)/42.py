file = open("dane_pr2\pary.txt", "r")
dane = file.read().splitlines()
file.close()

slowa = []
for wiersz in dane:
    slowa.append(wiersz.split()[1])
print(slowa)


for slowo in slowa:
    max_znak = slowo[0]
    max_ile = 1
    ile = 1
    for z in range(len(slowo) - 1):
        slowa = [slowo[z], slowo[z+1]]
        if slowo[z] == slowo[z+1]:
            ile += 1
        else:
            if ile > max_ile:
                max_ile = ile
                max_znak = slowo[z]
            ile = 1
        if z == len(slowo) - 2:
            if ile > max_ile:
                max_ile = ile
                max_znak = slowo[z]
            ile = 1
    print(max_znak, max_ile)
