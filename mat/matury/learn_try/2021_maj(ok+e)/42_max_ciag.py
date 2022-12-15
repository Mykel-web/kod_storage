file = open("instrukcje.txt", "r")
dane = file.readlines()

instrukcje = []
for a in dane:
    b = a.strip().split(" ")
    instrukcje.append(b[0])

print(instrukcje)
ciag_inst = ""
ciag_dlug = 1
max_inst = ""
max_dlug = 0
for i in range(len(instrukcje) - 1):
    if instrukcje[i] == instrukcje[i+1]:
        ciag_inst = instrukcje[i]
        ciag_dlug += 1
    else:
        if ciag_dlug > max_dlug:
            max_dlug = ciag_dlug
            max_inst = ciag_inst
        ciag_dlug = 1
print(max_inst, max_dlug)