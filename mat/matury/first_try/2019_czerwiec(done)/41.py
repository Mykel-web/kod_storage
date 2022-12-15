file = open("dane\liczby.txt")
liczby = list(map(int,file.read().splitlines()))

def prime(l):
    if l <=2:
        return False
    else:
        for i in range(2, l):
            if l % i == 0:
                return False
        return True

for liczba in liczby:
    if prime(liczba) and liczba >=100 and liczba <=5000:
        print(liczba)