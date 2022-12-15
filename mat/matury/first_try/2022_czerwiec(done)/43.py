file = open("dane/liczby.txt", "r")
dane = file.read().splitlines()
print(dane)

def prime(n):
    for i in range(2, n // 2 + 2):
        if n % i == 0:
            return False
    return True
for liczba in dane:
    if prime(int(liczba)) and prime(int(liczba[::-1])):
        print(liczba)