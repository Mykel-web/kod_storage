file = open("dane_pr2\pary.txt", "r")
dane = file.read().splitlines()
file.close()

pary = []
for wiersz in dane:
    para = wiersz.split()
    if int(para[0]) == len(para[1]):
        pary.append(para)
print(pary)
print(min(pary))
