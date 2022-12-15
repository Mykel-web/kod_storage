file = open("napisy.txt", "r")
dane = file.read().splitlines()

print(dane)
palikot_start = True
palikot_end = True
haslo = ""

for fragment in dane:
    p_fragment = fragment[len(fragment) - 1] + fragment
    for i in range(len(p_fragment)):
        if p_fragment[i] != p_fragment[len(p_fragment) - 1 - i]:
            palikot_start = False
            break
    if not palikot_start:
        p_fragment = fragment + fragment[0]
        for i in range(len(p_fragment)):
            if p_fragment[i] != p_fragment[len(p_fragment) - 1 - i]:
                palikot_end = False
                break
    if palikot_end or palikot_start:
        haslo += p_fragment[25]
    palikot_start = True
    palikot_end = True
print(haslo)
