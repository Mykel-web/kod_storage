import secrets
a = 0
while a < 5:
    a += 1
    print("raz")
tab = []
i = 0
for x in tab:
    print(x)
    i += 1
print("")
print(i, "razy")
for x in range(100):
    tab.insert(x, secrets.randbelow(1000))
print(tab)

for x in range(5):
    for y in range(5 - x):
        print(y)
    print(" linia", x)
