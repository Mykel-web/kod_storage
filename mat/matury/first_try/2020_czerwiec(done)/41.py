file = open("dane_pr2\pary.txt", "r")
dane = file.read().splitlines()
file.close()

liczby = []
for wiersz in dane:
    if int(wiersz.split()[0]) % 2 == 0 and int(wiersz.split()[0]) > 4:
        liczby.append(wiersz.split()[0])
print(liczby)

def prime(x):
    if x < 3:
        return False
    for i in range(2, x):
        if x % i == 0:
            return False
    return True
        
primes = []
for x in range(110):
    if prime(x):
        primes.append(x)
print(primes)

def goldba(l):     
    for c1 in primes:
        for c2 in primes:
            if c1 + c2 == l:
                print(liczba, c1, c2)
                return True
    return False

for liczba in liczby:
    goldba(int(liczba))
