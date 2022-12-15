file = open("pierwsze.txt", "r")
lines = file.readlines()
pierwsze = []
for linia in lines:
    a = linia.strip()
    a = str(a)
    pierwsze.append(a)
print(pierwsze)


def prime(x):
    if x < 2:
        return False
    if x == 2:
        return True
    for b in range(2, x):
        if x % b == 0:
            return False
    return True


for liczba in pierwsze:
    odwrotna = ''
    for i in range(len(liczba)):
        odwrotna += liczba[len(liczba) - 1 - i]
    if prime(int(odwrotna)):
        print(liczba)



