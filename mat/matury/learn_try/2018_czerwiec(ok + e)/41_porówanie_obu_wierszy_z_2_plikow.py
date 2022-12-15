file1 = open("dane1.txt", "r")
dane1 = file1.read().splitlines()

file2 = open("dane2.txt", "r")
dane2 = file2.read().splitlines()

print(dane1)
print(dane2)
liczba = []
liczba2 = []
ile = 0
for element in range(len(dane1)):
    for i in range(len(dane1[element])):
        if dane1[element][i].isdigit():
            liczba.append(dane1[element][i])
        else:
            liczba.clear()
    for i in range(len(dane2[element])):
        if dane2[element][i].isdigit():
            liczba2.append(dane2[element][i])
        else:
            liczba2.clear()
    if liczba == liczba2:
        ile += 1
print(ile)



