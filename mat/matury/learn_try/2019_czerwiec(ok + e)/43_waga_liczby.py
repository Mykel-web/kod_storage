file = open("pierwsze.txt", "r")
lines = file.readlines()
liczby = []
for linia in lines:
    a = linia.strip()
    a = int(a)
    liczby.append(a)
print(liczby)


def waga(n):
    if n < 10:
        return n
    else:
        suma = 0
        x = str(n)
        for i in range(len(x)):
            suma += int(x[i])
        return waga(suma)


ilosc = 0
for liczba in liczby:
    if waga(liczba) == 1:
        ilosc += 1
print(ilosc)
