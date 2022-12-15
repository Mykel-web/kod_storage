file = open("instrukcje.txt", "r")
dane = file.read().splitlines()

instrukcje = []
for a in dane:
    b = a.split(" ")
    instrukcje.append(b)

print("INSTRUKCJE: ", instrukcje)
litery = []
for inst in instrukcje:
    if inst[0] == "DOPISZ":
        litery.append(inst[1])
print("litery", litery)

wszystkie_litery = []

for li in litery:
    if li not in wszystkie_litery:
        wszystkie_litery.append(li)

max_litera = "a"
max_litera_ilosc = 0
print("wszytkie lit: ", wszystkie_litery)

for litera in wszystkie_litery:
    ilosc = litery.count(litera)
    if ilosc > max_litera_ilosc:
        max_litera_ilosc = ilosc
        max_litera = litera

print(max_litera, max_litera_ilosc)