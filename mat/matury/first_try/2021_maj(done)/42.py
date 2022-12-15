file = open("dane_2105\instrukcje.txt")
dane = file.read().splitlines()
file.close()

max_ile = 0
max_ins = ""

ile = 1
for i in range(len(dane) - 1):
    if dane[i][0] == dane[i+1][0]:
        ile += 1
        if ile > max_ile:
            max_ile = ile
            max_ins = dane[i][0]
    else:
        ile = 1
if max_ins == "D":
    max_ins = "DOPISZ"
if max_ins == "Z":
    max_ins = "ZMIEN"
if max_ins == "U":
    max_ins = "USUN"
if max_ins == "P":
    max_ins = "PRZESUN"
    
print(max_ile, max_ins)