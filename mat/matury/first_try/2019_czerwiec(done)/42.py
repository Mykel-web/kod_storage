file = open("dane\pierwsze.txt")
pierwsze = list(map(int,file.read().splitlines()))

def prime(l):
    l = int(l)
    if l <=2:
        return False
    else:
        for i in range(2, l):
            if l % i == 0:
                return False
        return True
    
for liczba in pierwsze:
    liczba = str(liczba)
    if prime(liczba[::-1]):
        print(liczba)