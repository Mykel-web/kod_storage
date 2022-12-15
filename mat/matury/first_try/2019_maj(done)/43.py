file = open("dane\liczby.txt")
liczby = list(map(int, file.read().splitlines()))

def nwd(l1, l2):
    dzielniki = []
    for i in range(1, min(l1, l2) + 1):
        if l1 % i == 0 and l2 % i == 0:
            dzielniki.append(i)
    return max(dzielniki)

max_len = 0
max_dzielnik = 0
ciag = [0]
for j in range(len(liczby)):
    for i in range(j, len(liczby) - 1):
        if ciag[0] == 0:
            dzielnik = nwd(liczby[i], liczby[i+1])
        else:
            dzielnik = nwd(ciag[0], liczby[i+1])
        if dzielnik > 1:
            ciag[0] = dzielnik
            if len(ciag) == 1:
                ciag.append(liczby[i])
                ciag.append(liczby[+1])
            else:
                ciag.append(liczby[i+1])
        else:
            if len(ciag) - 1 > max_len:
                max_dzielnik = ciag[0]
                max_len = len(ciag) - 1
                piersza = ciag[1]
            ciag = [0]
            break
print(piersza, max_len, max_dzielnik)