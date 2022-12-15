file = open("pary.txt", "r")
tekst = file.readlines()
pary = []
for para in tekst:
    para = para.lower()
    fragment = para.strip().split()
    if int(fragment[0]) == len(fragment[1]):
        pary.append(fragment)
print(pary)

min_para = pary[0]

for para in pary:
    if int(para[0]) < int(min_para[0]):
        min_para[0] = para[0]
        min_para[1] = para[1]
    elif int(para[0]) == int(min_para[0]):
        if para[1] < min_para[1]:
            min_para[0] = para[0]
            min_para[1] = para[1]
print("\n najmniejsza para", min_para)
