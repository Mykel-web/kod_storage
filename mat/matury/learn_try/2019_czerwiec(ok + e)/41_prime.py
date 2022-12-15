file = open("liczby.txt", "r")
linie = file.readlines()
liczbytxt = []
for line in linie:
    a = line.lower().strip()
    a = int(a)
    if a >= 100 and a <= 5000:
        liczbytxt.append(a)
print("liczby", liczbytxt)


def prime(x):
    for i in range(2, x):
        if x % i == 0:
            return False
    print(x)


for liczba in liczbytxt:
    prime(liczba)
