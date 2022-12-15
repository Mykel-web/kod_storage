file = open("pary.txt", "r")
linie = file.readlines()
liczby = []
for linia in linie:
    liniaformated = (linia.split(' '))
    liczby.append(int(liniaformated[0]))
print(liczby)


def prime(num):
    if num < 2:
        return False
    a = 0
    for x in range(2, num+1):
        if num % x == 0:
            a += 1
    if a == 1:
        return True
    else:
        return False


for liczba in liczby:
    if liczba > 4 and liczba % 2 == 0:
        for i in range(liczba):
            if prime(i):
                roznica = liczba - i
                if prime(roznica):
                    print(liczba, i, roznica)
                    break
