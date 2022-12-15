file = open("napisy.txt", "r")
dane = file.read().splitlines()

print(dane)

ile = 0
for fragment in dane:
    for znak in fragment:
        if znak.isdigit():
            ile += 1
print(ile)
