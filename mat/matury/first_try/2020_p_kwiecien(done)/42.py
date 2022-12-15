file = open("dane4.txt")
dane = file.read().splitlines()
liczby = list(map(int, dane))

regulary = []
reg = [liczby[0], 'z']
j = 0
while j < len(liczby) - 1:
    luka = liczby[j+1] - liczby[j]
    if luka < 0:
        luka = -luka
    if reg[1] == 'z':
        reg[1] = luka
        reg.append(liczby[j+1])
    else:
        if luka == reg[1]:
            reg.append(liczby[j+1])
        else:
            regulary.append(reg)
            reg = [liczby[j], 'z']
            j -= 1
    j += 1

max_len = 0
for reg in regulary:
    dlug = len(reg) - 1
    if dlug > max_len:
        max_len = dlug
for reg in regulary:
    if len(reg) - 1 == max_len:
        print(max_len, reg[0], reg[len(reg) - 1])
