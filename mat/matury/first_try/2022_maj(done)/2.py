file = open("dane/liczby.txt", "r")
dane = file.read().splitlines()
print(dane)

def prime(l):
    if l == 2:
        return True
    for i in range(2, l):
        if l % i == 0:
            return False
    return True


primes = [2]
for i in range(3, 100000):
    if prime(i):
        primes.append(i)

print(primes)
max_ile = 0
max_ile_liczba = 0
max_rozne = 0
max_rozne_liczba = 0


def rozklad(liczba):
    liczba_c = liczba
    global max_ile
    global max_ile_liczba
    global max_rozne
    global max_rozne_liczba
    current_ile = 0
    current_rozne = []
    i = 0
    while(liczba != 1):
        if liczba % primes[i] == 0:
            liczba = liczba / primes[i]
            current_ile += 1
            if primes[i] not in current_rozne:
                current_rozne.append(primes[i])
            i = 0
        else:
            i += 1

    if current_ile > max_ile:
        max_ile = current_ile
        max_ile_liczba = liczba_c
    if len(current_rozne) > max_rozne:
        max_rozne = len(current_rozne)
        max_rozne_liczba = liczba_c
for n in dane:
    rozklad(int(n))
print(max_ile_liczba, max_ile, max_rozne_liczba, max_rozne)
