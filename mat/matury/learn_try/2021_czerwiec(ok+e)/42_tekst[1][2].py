file = open("napisy.txt", "r")
dane = file.read().splitlines()

print(dane)
znak = 0
target = 19
haslo = ""
for i in range(len(dane)):
    if i == target:
        target += 20
        haslo += dane[i][znak]
        znak += 1
print(haslo)
