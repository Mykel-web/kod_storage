file = open("DANE/liczby.txt", "r")
dane = file.read().splitlines()

liczby = []
print(dane)

def prime(x):
    for i in range(2, x):
        if x % i == 0:
            return False
    return True


for liczba in dane:
    odwrot = liczba[::-1]
    if prime(int(liczba)):
        if prime(int(odwrot)):
            print(liczba)

