file = open("dane\liczby.txt")
dane = file.read().splitlines()

def potega3(l):
    potega = 1
    while potega <= l:
        if potega == l:
            return True
        potega *= 3
    return False
    
ile = 0
for liczba in dane:
    if potega3(int(liczba)):
        ile += 1
print(ile)