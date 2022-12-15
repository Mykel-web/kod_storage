file = open("dane\pierwsze.txt")
pierwsze = list(map(int,file.read().splitlines()))

def waga(l):
    if l < 10:
        return l
    else:
        l = str(l)
        suma = 0
        for znak in l:
            suma += int(znak)
        return waga(suma)

ile = 0
for liczba in pierwsze:
    if waga(liczba) == 1:
        ile += 1
print(ile)