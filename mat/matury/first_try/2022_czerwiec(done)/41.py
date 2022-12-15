file = open("dane/liczby.txt", "r")
dane = file.read().splitlines()
print(dane)
for liczba in dane:
    if int(liczba[::-1]) % 17 == 0:
        print(int(liczba[::-1]))
