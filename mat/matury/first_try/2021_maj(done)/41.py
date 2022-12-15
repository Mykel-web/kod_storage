file = open("dane_2105\instrukcje.txt")
dane = file.read().splitlines()
file.close()

t_napis = []

for ins in dane:
    if ins[0] == 'D':
        t_napis.append(ins[7])
    elif ins[0] == 'Z':
        t_napis[len(t_napis) - 1] = ins[6]
    elif ins[0] == 'U' and len(t_napis) > 0:
        t_napis.pop()
    else:
        index = t_napis.index(ins[8])
        if ins[8] != "Z":
            t_napis[index] = chr(1 + ord(ins[8]))
        else:
            t_napis[index] = 'A'
            
print(t_napis)
print(len(t_napis))
